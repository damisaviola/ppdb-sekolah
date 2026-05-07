<!-- Navbar PPDB -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-8 bg-transparent">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="flex items-center gap-2 md:gap-4 group shrink-0">
                <div class="w-10 h-10 md:w-14 md:h-14 bg-white rounded-full flex items-center justify-center shadow-md group-hover:scale-105 transition-transform overflow-hidden border-2 border-white/80 shrink-0">
                    <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Logo SMA YPPK Tiga Raja" class="w-full h-full object-contain scale-[1.15]">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 id="nav-title" class="font-heading font-bold text-sm sm:text-base md:text-xl text-white tracking-tight transition-colors leading-tight">PPDB 2026/2027</h1>
                    <p id="nav-subtitle" class="text-white/80 text-[8px] sm:text-[10px] md:text-xs font-semibold tracking-widest sm:tracking-[0.2em] transition-colors uppercase mt-0.5">SMA YPPK Tiga Raja</p>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-1">
                <a href="<?= base_url() ?>" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Beranda Web</a>
                <a href="#alur" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Alur</a>
                <a href="#jalur" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Jalur</a>
                <a href="#persyaratan" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Persyaratan</a>
                <a href="#jadwal" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Jadwal</a>
                <a href="#faq" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">FAQ</a>
                <a href="<?= base_url('ppdb/pengumuman') ?>" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Pengumuman</a>
                
                <div class="ml-4 pl-4 border-l border-white/20 flex items-center gap-4">
                    <a href="<?= base_url('ppdb/login') ?>" id="nav-login-link" class="text-white hover:text-accent-400 font-bold transition-colors">Login</a>
                    <a href="https://forms.gle/placeholder" target="_blank" class="px-5 py-2.5 bg-accent-500 hover:bg-accent-600 text-brand-900 font-bold rounded-full shadow-lg hover:shadow-accent-500/30 transition-all transform hover:-translate-y-0.5">
                        Daftar Sekarang <i class="fa-solid fa-paper-plane ml-1 text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2 focus:outline-none">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white shadow-2xl border-t border-gray-100 flex-col overflow-hidden transition-all duration-300">
        <div class="flex flex-col p-4 gap-2">
            <a href="<?= base_url() ?>" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-globe"></i></div> 
                Beranda Web
            </a>
            <a href="#alur" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-route"></i></div> 
                Alur Pendaftaran
            </a>
            <a href="#jalur" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-code-fork"></i></div> 
                Jalur Seleksi
            </a>
            <a href="#persyaratan" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-clipboard-list"></i></div> 
                Persyaratan
            </a>
            <a href="#jadwal" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-regular fa-calendar-alt"></i></div> 
                Jadwal
            </a>
            <a href="#faq" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-circle-question"></i></div> 
                FAQ
            </a>
            <a href="<?= base_url('ppdb/pengumuman') ?>" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-bullhorn"></i></div> 
                Pengumuman
            </a>
            <div class="mt-2 pt-4 border-t border-gray-100 space-y-3">
                <a href="<?= base_url('ppdb/login') ?>" class="block w-full text-center py-3 border-2 border-brand-600 text-brand-600 font-bold rounded-lg hover:bg-brand-50 transition-colors">
                    Login Siswa
                </a>
                <a href="https://forms.gle/placeholder" target="_blank" class="block w-full text-center py-3 bg-brand-600 text-white font-bold rounded-lg shadow-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript for Navbar Scroll Effect and Mobile Menu -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const navTitle = document.getElementById('nav-title');
        const navSubtitle = document.getElementById('nav-subtitle');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        const loginLink = document.getElementById('nav-login-link');
        let isMenuOpen = false;

        // Scroll Effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/95', 'glass-nav', 'shadow-sm', 'py-5');
                navbar.classList.remove('bg-transparent', 'py-8');
                
                navTitle.classList.replace('text-white', 'text-brand-900');
                navSubtitle.classList.replace('text-white/80', 'text-gray-500');
                mobileBtn.classList.replace('text-white', 'text-brand-900');
                
                navLinks.forEach(link => {
                    link.classList.replace('text-white', 'text-gray-600');
                    link.classList.replace('hover:text-brand-100', 'hover:text-brand-600');
                    link.classList.replace('hover:bg-white/10', 'hover:bg-brand-50');
                });

                if (loginLink) {
                    loginLink.classList.replace('text-white', 'text-gray-600');
                    loginLink.classList.replace('hover:text-accent-400', 'hover:text-brand-600');
                }
            } else {
                navbar.classList.remove('bg-white/95', 'glass-nav', 'shadow-sm', 'py-5');
                navbar.classList.add('bg-transparent', 'py-8');
                
                navTitle.classList.replace('text-brand-900', 'text-white');
                navSubtitle.classList.replace('text-gray-500', 'text-white/80');
                mobileBtn.classList.replace('text-brand-900', 'text-white');
                
                navLinks.forEach(link => {
                    link.classList.replace('text-gray-600', 'text-white');
                    link.classList.replace('hover:text-brand-600', 'hover:text-brand-100');
                    link.classList.replace('hover:bg-brand-50', 'hover:bg-white/10');
                });

                if (loginLink) {
                    loginLink.classList.replace('text-gray-600', 'text-white');
                    loginLink.classList.replace('hover:text-brand-600', 'hover:text-accent-400');
                }
            }
        });

        // Mobile Menu Toggle
        mobileBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                mobileBtn.innerHTML = '<i class="fa-solid fa-xmark text-2xl"></i>';
                // Force navbar background when menu is open at top
                if (window.scrollY <= 50) {
                    navbar.classList.add('bg-brand-900');
                    navbar.classList.remove('bg-transparent');
                }
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                mobileBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl"></i>';
                if (window.scrollY <= 50) {
                    navbar.classList.remove('bg-brand-900');
                    navbar.classList.add('bg-transparent');
                }
            }
        });

        // Close mobile menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                isMenuOpen = false;
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                mobileBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl"></i>';
                if (window.scrollY <= 50) {
                    navbar.classList.remove('bg-brand-900');
                    navbar.classList.add('bg-transparent');
                }
            });
        });
    });
</script>
