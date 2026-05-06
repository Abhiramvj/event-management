// js/site.js
const loadHeader = () => {
    fetch(`/header.html?v=${new Date().getTime()}`)
        .then(response => {
            if (!response.ok) throw new Error('Header fetch failed');
            return response.text();
        })
        .then(data => {
            const placeholder = document.getElementById('header-placeholder');
            if (placeholder) {
                placeholder.innerHTML = data;
                initializeHeaderScripts();
            }
        })
        .catch(error => console.error('Error fetching header:', error));
};

const loadFooter = () => {
    fetch(`/footer.html?v=${new Date().getTime()}`)
        .then(response => {
            if (!response.ok) throw new Error('Footer fetch failed');
            return response.text();
        })
        .then(data => {
            const placeholder = document.getElementById('footer-placeholder');
            if (placeholder) {
                placeholder.innerHTML = data;
                initializeFooterScripts();
            }
        })
        .catch(error => console.error('Error fetching footer:', error));
};

const initializeHeaderScripts = () => {
    const header = document.getElementById('main-header');
    if (header) {
        const handleScroll = () => {
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled', 'glass-dark', 'py-2');
                header.classList.remove('header-transparent', 'py-5', 'py-4');
            } else {
                header.classList.remove('header-scrolled', 'glass-dark', 'py-2');
                header.classList.add('header-transparent', 'py-5');
                header.classList.remove('py-2', 'py-4');
            }
        };

        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Initialize state on load
    }

    // Active Link Logic
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (currentPath.endsWith(href) || (currentPath === '/' && (href === 'index.html' || href === '/'))) {
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
                setTimeout(() => {
                    mobileMenu.classList.remove('max-h-0', 'opacity-0');
                    mobileMenu.classList.add('max-h-screen', 'opacity-100');
                }, 10);
            } else {
                mobileMenu.classList.remove('max-h-screen', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
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

// Initial Load
loadHeader();
loadFooter();