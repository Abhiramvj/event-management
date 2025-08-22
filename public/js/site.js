// js/site.js
document.addEventListener("DOMContentLoaded", function() {

    const loadHeader = () => {
        fetch('header.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
                initializeHeaderScripts();
            })
            .catch(error => console.error('Error fetching header:', error));
    };

    const loadFooter = () => {
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
                initializeFooterScripts();
            })
            .catch(error => console.error('Error fetching footer:', error));
    };

    const initializeHeaderScripts = () => {
        const header = document.getElementById('main-header');
        if (header) {
            window.addEventListener('scroll', () => {
                header.classList.toggle('header-scrolled', window.scrollY > 50);
            });
        }

        // --- NEW AND IMPROVED ACTIVE LINK LOGIC ---
        // This new logic correctly handles clean URLs like "/about"
        const currentPath = window.location.pathname; // This will be "/" or "/about", etc.

        // Handle Desktop Links
        const desktopLinks = document.querySelectorAll('#main-header .nav-link');
        desktopLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            // Check for homepage: path is "/" and link is "index.html"
            if (currentPath === '/' && linkHref === 'index.html') {
                link.classList.remove('border-transparent');
                link.classList.add('border-yellow-400');
            } 
            // Check for other pages: if "/about" is inside "about.html"
            else if (currentPath !== '/' && linkHref.includes(currentPath.substring(1))) {
                link.classList.remove('border-transparent');
                link.classList.add('border-yellow-400');
            }
        });

        // Handle Mobile Links
        const mobileLinks = document.querySelectorAll('#navbar-mobile-menu a');
        mobileLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            // Check for homepage
            if (currentPath === '/' && linkHref === 'index.html') {
                link.classList.add('text-yellow-400');
            } 
            // Check for other pages
            else if (currentPath !== '/' && linkHref.includes(currentPath.substring(1))) {
                link.classList.add('text-yellow-400');
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('navbar-mobile-btn');
        const mobileMenu = document.getElementById('navbar-mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    };

    const initializeFooterScripts = () => {
        const yearSpan = document.getElementById('year');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    };

    loadHeader();
    loadFooter();
});