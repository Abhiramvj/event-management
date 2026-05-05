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
                if (window.scrollY > 50) {
                    header.classList.add('header-scrolled', 'glass-dark', 'py-2');
                    header.classList.remove('header-transparent', 'py-4');
                } else {
                    header.classList.remove('header-scrolled', 'glass-dark', 'py-2');
                    header.classList.add('header-transparent', 'py-4');
                }
            });
        }

        // Active Link Logic
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (currentPath.endsWith(href) || (currentPath === '/' && href === 'index.html')) {
                link.classList.add('text-accent', 'after:w-full');
                link.classList.remove('after:w-0');
            }
        });

        // Enhanced Mobile menu toggle
        const mobileMenuBtn = document.getElementById('navbar-mobile-btn');
        const mobileMenu = document.getElementById('navbar-mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    // Small timeout to allow the 'hidden' removal to register before animating
                    setTimeout(() => {
                        mobileMenu.classList.remove('max-h-0');
                        mobileMenu.classList.add('max-h-[500px]');
                    }, 10);
                } else {
                    mobileMenu.classList.remove('max-h-[500px]');
                    mobileMenu.classList.add('max-h-0');
                    // Wait for transition to finish before adding hidden
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
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