// js/site.js
document.addEventListener("DOMContentLoaded", function() {

    // --- Function to load and initialize the header ---
    const loadHeader = () => {
        fetch('header.html')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
                initializeHeaderScripts();
            })
            .catch(error => console.error('Error fetching header:', error));
    };

    // --- Function to load and initialize the footer ---
    const loadFooter = () => {
        fetch('footer.html')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
                initializeFooterScripts();
            })
            .catch(error => console.error('Error fetching footer:', error));
    };
    
    // --- All scripts that depend on the header's HTML go here ---
    const initializeHeaderScripts = () => {
        // 1. Handle scroll effect for the header
        const header = document.getElementById('main-header');
        if (header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('header-scrolled');
                } else {
                    header.classList.remove('header-scrolled');
                }
            });
        }

        // 2. Highlight the active navigation link
        const currentPage = window.location.pathname.split('/').pop() || 'index.html';
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('border-yellow-400');
                link.classList.remove('border-transparent');
            }
        });

        // 3. Mobile menu toggle
        const mobileMenuBtn = document.getElementById('navbar-mobile-btn');
        const mobileMenu = document.getElementById('navbar-mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    };

    // --- All scripts that depend on the footer's HTML go here ---
    const initializeFooterScripts = () => {
        // Set the current year in the footer
        const yearSpan = document.getElementById('year');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    };

    // --- Load the components ---
    loadHeader();
    loadFooter();
});
