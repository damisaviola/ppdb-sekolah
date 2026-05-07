<!-- Navbar -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-8 bg-transparent">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="flex items-center gap-2 md:gap-4 group shrink-0">
                <div class="w-10 h-10 md:w-14 md:h-14 bg-white rounded-full flex items-center justify-center shadow-md group-hover:scale-105 transition-transform overflow-hidden border-2 border-white/80 shrink-0">
                    <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Logo SMA YPPK Tiga Raja" class="w-full h-full object-contain scale-[1.15]">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 id="nav-title" class="font-heading font-bold text-sm sm:text-base md:text-xl text-white tracking-tight transition-colors leading-tight">SMA YPPK TIGA RAJA</h1>
                    <p id="nav-subtitle" class="text-white/80 text-[8px] sm:text-[10px] md:text-xs font-semibold tracking-widest sm:tracking-[0.2em] transition-colors uppercase mt-0.5">Timika - Papua</p>
                </div>
            </a>

            <style>
                /* Fallback custom animation for dropdown to ensure it's always 'rapi' */
                .group:hover .dropdown-menu {
                    display: block;
                    animation: fadeInDropdown 0.3s ease forwards;
                }
                @keyframes fadeInDropdown {
                    from { opacity: 0; transform: translateY(10px); }
                    to { opacity: 1; transform: translateY(0); }
                }
            </style>


            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-1">
                <a href="<?= base_url() ?>#beranda" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Beranda</a>
                
                <!-- Dropdown Profil -->
                <div class="relative group py-2">
                    <button class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10 flex items-center gap-1.5 outline-none">
                        Profil <i class="fa-solid fa-chevron-down text-[10px] group-hover:rotate-180 transition-transform duration-300 mt-0.5"></i>
                    </button>
                    <!-- Dropdown Content -->
                    <div class="dropdown-menu absolute top-full left-0 w-60 hidden z-[100] pt-2">
                        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 overflow-hidden ring-1 ring-black/5">
                            <a href="<?= base_url('home/profil') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 transition-all group/item">
                                <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-600 flex items-center justify-center group-hover/item:bg-brand-600 group-hover/item:text-white transition-colors">
                                    <i class="fa-solid fa-school text-xs"></i>
                                </div>
                                Profil Sekolah
                            </a>
                            <a href="<?= base_url('home/visi_misi') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 transition-all group/item">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-accent-600 flex items-center justify-center group-hover/item:bg-accent-600 group-hover/item:text-white transition-colors">
                                    <i class="fa-solid fa-bullseye text-xs"></i>
                                </div>
                                Visi & Misi
                            </a>
                            <a href="<?= base_url('home/sejarah') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 transition-all group/item">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center group-hover/item:bg-blue-600 group-hover/item:text-white transition-colors">
                                    <i class="fa-solid fa-clock-rotate-left text-xs"></i>
                                </div>
                                Sejarah Singkat
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 transition-all group/item">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover/item:bg-emerald-600 group-hover/item:text-white transition-colors">
                                    <i class="fa-solid fa-sitemap text-xs"></i>
                                </div>
                                Struktur Organisasi
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?= base_url() ?>#program" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Program</a>
                <a href="<?= base_url() ?>#guru" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Guru</a>
                <a href="<?= base_url() ?>#prestasi" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Prestasi</a>
                <a href="<?= base_url() ?>#berita" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Berita</a>
                <a href="<?= base_url() ?>#galeri" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Galeri</a>
                <a href="<?= base_url() ?>#kontak" class="nav-link px-4 py-2 text-white font-medium hover:text-brand-100 transition-colors rounded-lg hover:bg-white/10">Kontak</a>
                
                <div class="ml-4 pl-4 border-l border-white/20">
                    <a href="<?= base_url('ppdb') ?>" class="px-5 py-2.5 bg-accent-500 hover:bg-accent-600 text-white font-semibold rounded-full shadow-lg hover:shadow-accent-500/30 transition-all transform hover:-translate-y-0.5">
                        Info PPDB <i class="fa-solid fa-arrow-right ml-1 text-sm"></i>
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
            <a href="<?= base_url() ?>#beranda" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-home"></i></div> 
                Beranda
            </a>
            
            <!-- Mobile Dropdown Profil -->
            <div class="flex flex-col">
                <button class="w-full p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center justify-between gap-3 transition-colors outline-none" onclick="toggleMobileDropdown()">
                    <div class="flex items-center gap-3">
                        <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-building"></i></div> 
                        Profil
                    </div>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300" id="mobile-profil-chevron"></i>
                </button>
                <div id="mobile-profil-dropdown" class="hidden flex-col pl-4 pr-4 py-1 gap-1">
                    <a href="<?= base_url('home/profil') ?>" class="mobile-link p-3 rounded-lg text-gray-600 text-sm hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3 ml-6">
                        <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-school text-xs"></i></div> 
                        Profil Sekolah
                    </a>
                    <a href="<?= base_url('home/visi_misi') ?>" class="mobile-link p-3 rounded-lg text-gray-600 text-sm hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3 ml-6">
                        <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-bullseye text-xs"></i></div> 
                        Visi & Misi
                    </a>
                    <a href="<?= base_url('home/sejarah') ?>" class="mobile-link p-3 rounded-lg text-gray-600 text-sm hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3 ml-6">
                        <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-clock-rotate-left text-xs"></i></div> 
                        Sejarah Singkat
                    </a>
                    <a href="#" class="mobile-link p-3 rounded-lg text-gray-600 text-sm hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3 ml-6">
                        <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-sitemap text-xs"></i></div> 
                        Struktur Organisasi
                    </a>
                </div>
            </div>

            <a href="<?= base_url() ?>#program" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-book-open"></i></div> 
                Program
            </a>
            <a href="<?= base_url() ?>#guru" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-user-tie"></i></div> 
                Guru
            </a>
            <a href="<?= base_url() ?>#prestasi" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-trophy"></i></div> 
                Prestasi
            </a>
            <a href="<?= base_url() ?>#berita" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-regular fa-newspaper"></i></div> 
                Berita
            </a>
            <a href="<?= base_url() ?>#galeri" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-regular fa-images"></i></div> 
                Galeri
            </a>
            <a href="<?= base_url() ?>#kontak" class="mobile-link p-3 rounded-lg text-gray-700 font-medium hover:bg-brand-50 hover:text-brand-600 flex items-center gap-3">
                <div class="w-6 flex items-center justify-center"><i class="fa-solid fa-envelope"></i></div> 
                Kontak
            </a>
            <div class="mt-2 pt-4 border-t border-gray-100">
                <a href="<?= base_url('ppdb') ?>" class="block w-full text-center py-3 bg-brand-600 text-white font-semibold rounded-lg shadow-md">
                    Informasi PPDB
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript for Navbar Scroll Effect and Mobile Menu -->
<script>
    function toggleMobileDropdown() {
        const dropdown = document.getElementById('mobile-profil-dropdown');
        const chevron = document.getElementById('mobile-profil-chevron');
        dropdown.classList.toggle('hidden');
        dropdown.classList.toggle('flex');
        chevron.classList.toggle('rotate-180');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const navTitle = document.getElementById('nav-title');
        const navSubtitle = document.getElementById('nav-subtitle');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');
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
            }
        });

        // Mobile Menu Toggle
        mobileBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                mobileBtn.innerHTML = '<i class="fa-solid fa-xmark text-2xl"></i>';
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
