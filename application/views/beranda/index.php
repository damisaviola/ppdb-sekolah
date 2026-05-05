<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- HERO SECTION -->
<section id="beranda" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://scontent.fjog3-1.fna.fbcdn.net/v/t1.6435-9/62305084_2339358842983176_6351193278485889024_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeGjWXXBMDu3LOdePhYZs1ctwm8tFNGXiQvCby0U0ZeJCwk0jhFlBUwLPGSb_MvTXB3WTasGStBO61uFp_Rd9v99&_nc_ohc=pzKL00kZzY8Q7kNvwH0SQvW&_nc_oc=Adq9OQnVyVy0xq7hlRBMrXB3V2SoukBYtpAeuKznkfk4_3Mx1m20MchIBydcMeKhL3jE-0JDIu0yzElPMMddhU16&_nc_zt=23&_nc_ht=scontent.fjog3-1.fna&_nc_gid=1dLz2aruGQD5rR27lminng&_nc_ss=7b2a8&oh=00_Af4eToO5f8vwOgm6wwstiGImymEDdlKLKlQb5Dnw5EPjJQ&oe=6A1F7622" alt="Sekolah Background" class="w-full h-full object-cover" />
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-1/4 right-0 w-64 h-64 bg-brand-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-1/4 left-0 w-72 h-72 bg-accent-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10 text-center lg:text-left">
        <div class="max-w-4xl mx-auto lg:mx-0">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white text-sm font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
                Penerimaan Siswa Baru 2026/2027 Dibuka
            </div>
            
            <h1 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                Membangun Generasi <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-amber-300">Cerdas & Berkarakter</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                Kami berkomitmen menyediakan pendidikan berkualitas tinggi, fasilitas modern, dan lingkungan belajar yang inspiratif untuk masa depan gemilang anak Anda.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                <a href="<?= base_url('ppdb') ?>" class="w-full sm:w-auto px-8 py-4 bg-brand-600 hover:bg-brand-500 text-white font-bold rounded-xl shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_30px_rgba(37,99,235,0.6)] transition-all transform hover:-translate-y-1 text-center">
                    Daftar Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
                <a href="#profil" class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold rounded-xl border border-white/20 transition-all text-center">
                    Jelajahi Profil
                </a>
            </div>
        </div>
    </div>
    
</section>

<!-- TENTANG SEKOLAH -->
<section id="profil" class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            
            <!-- Left Text -->
            <div class="lg:w-1/2 reveal">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Tentang Sekolah
                </div>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">
                    Mencetak Pemimpin Masa Depan Sejak 1990
                </h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    SMA Negeri 1 Nusantara adalah lembaga pendidikan menengah atas yang berdedikasi untuk mengembangkan potensi maksimal setiap siswa melalui pendekatan holistik yang menyeimbangkan kecerdasan intelektual, emosional, dan spiritual.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-50 text-brand-600 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-2">Visi</h3>
                        <p class="text-gray-600 text-sm">Menjadi sekolah rujukan nasional yang unggul dalam prestasi, berkarakter, dan berwawasan lingkungan global.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-amber-50 text-accent-500 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-2">Misi</h3>
                        <p class="text-gray-600 text-sm">Menyelenggarakan pendidikan yang bermutu, inovatif, dan berakar pada nilai-nilai budaya bangsa.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Images -->
            <div class="lg:w-1/2 reveal">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-brand-100 to-blue-50 rounded-[2rem] transform rotate-3 -z-10"></div>
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2070&auto=format&fit=crop" alt="Kegiatan Belajar" class="rounded-2xl w-full h-64 object-cover shadow-lg transform translate-y-8" />
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2132&auto=format&fit=crop" alt="Gedung Sekolah" class="rounded-2xl w-full h-64 object-cover shadow-lg" />
                    </div>
                    
                    <!-- Stats badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 flex items-center gap-4">
                        <div class="w-14 h-14 bg-brand-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-heading font-black text-brand-900">Akreditasi A</p>
                            <p class="text-gray-500 font-medium">Badan Akreditasi Nasional</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- PROGRAM JURUSAN -->
<section id="program" class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Program Studi <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">Pilihan Jurusan Terbaik</h2>
            <p class="text-gray-600 text-lg">Sesuaikan minat dan bakat siswa dengan program studi unggulan yang dirancang khusus untuk kesiapan jenjang karir dan perguruan tinggi.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Program 1 -->
            <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal">
                <div class="w-16 h-16 bg-blue-50 group-hover:bg-brand-600 text-brand-600 group-hover:text-white rounded-2xl flex items-center justify-center text-3xl mb-6 transition-colors">
                    <i class="fa-solid fa-flask"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">MIPA</h3>
                <p class="text-gray-600 mb-6">Matematika & Ilmu Pengetahuan Alam. Fokus pada analisis, logika, dan penelitian saintifik yang mendalam.</p>
                <a href="#" class="inline-flex items-center text-brand-600 font-semibold group-hover:text-brand-700">Pelajari <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i></a>
            </div>

            <!-- Program 2 -->
            <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-100">
                <div class="w-16 h-16 bg-green-50 group-hover:bg-green-600 text-green-600 group-hover:text-white rounded-2xl flex items-center justify-center text-3xl mb-6 transition-colors">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-green-600 transition-colors">IPS</h3>
                <p class="text-gray-600 mb-6">Ilmu Pengetahuan Sosial. Mempelajari dinamika masyarakat, ekonomi, sosiologi, dan geografi.</p>
                <a href="#" class="inline-flex items-center text-green-600 font-semibold group-hover:text-green-700">Pelajari <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i></a>
            </div>

            <!-- Program 3 -->
            <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-200">
                <div class="w-16 h-16 bg-orange-50 group-hover:bg-orange-500 text-orange-500 group-hover:text-white rounded-2xl flex items-center justify-center text-3xl mb-6 transition-colors">
                    <i class="fa-solid fa-language"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-orange-500 transition-colors">BAHASA</h3>
                <p class="text-gray-600 mb-6">Pengembangan kemampuan linguistik, sastra, dan komunikasi lintas budaya yang komprehensif.</p>
                <a href="#" class="inline-flex items-center text-orange-500 font-semibold group-hover:text-orange-600">Pelajari <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- FASILITAS -->
<section id="fasilitas" class="py-20 lg:py-32 bg-gray-900 text-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 text-brand-400 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-400 rounded-full"></span> Infrastruktur
                </div>
                <h2 class="font-heading text-4xl md:text-5xl font-bold mb-6">Fasilitas Modern</h2>
                <p class="text-gray-400 text-lg">Lingkungan belajar yang kondusif didukung oleh sarana dan prasarana berstandar nasional.</p>
            </div>
            <a href="#" class="hidden md:inline-flex items-center gap-2 text-white hover:text-brand-400 font-semibold transition-colors mt-6 md:mt-0">
                Lihat Semua Fasilitas <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
            <!-- Item 1 -->
            <div class="group relative aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" alt="Lab Komputer" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <div class="w-12 h-12 bg-brand-600 text-white rounded-2xl flex items-center justify-center text-xl mb-4 shadow-lg">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h3 class="font-heading font-bold text-2xl mb-2 group-hover:text-brand-300 transition-colors">Laboratorium Komputer</h3>
                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-2">Unit komputer spesifikasi tinggi untuk menunjang pembelajaran digital.</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group relative aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
                <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?q=80&w=1976&auto=format&fit=crop" alt="Perpustakaan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <div class="w-12 h-12 bg-brand-600 text-white rounded-2xl flex items-center justify-center text-xl mb-4 shadow-lg">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h3 class="font-heading font-bold text-2xl mb-2 group-hover:text-brand-300 transition-colors">Perpustakaan Digital</h3>
                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-2">Koleksi ribuan buku fisik dan e-book yang dapat diakses kapan saja.</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group relative aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/5] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
                <img src="https://images.unsplash.com/photo-1526676037777-05a232554f77?q=80&w=2070&auto=format&fit=crop" alt="Lapangan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <div class="w-12 h-12 bg-brand-600 text-white rounded-2xl flex items-center justify-center text-xl mb-4 shadow-lg">
                        <i class="fa-solid fa-volleyball"></i>
                    </div>
                    <h3 class="font-heading font-bold text-2xl mb-2 group-hover:text-brand-300 transition-colors">Sport Center</h3>
                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-2">Fasilitas olahraga indoor dan outdoor lengkap untuk prestasi siswa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EKSTRAKURIKULER -->
<section id="ekskul" class="py-20 lg:py-32 bg-brand-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Pengembangan Diri <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">Ekstrakurikuler</h2>
            <p class="text-gray-600 text-lg">Wadahi minat dan bakat siswa di luar jam pelajaran untuk membentuk pribadi yang aktif dan berprestasi.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <!-- Ekskul 1 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Futsal</h3>
            </div>

            <!-- Ekskul 2 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-100">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-masks-theater"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Seni Tari</h3>
            </div>

            <!-- Ekskul 3 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-200">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-language"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">English Club</h3>
            </div>

            <!-- Ekskul 4 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-300">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-laptop"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">IT Club</h3>
            </div>

            <!-- Ekskul 5 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-400">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-mountain"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Mapala</h3>
            </div>

            <!-- Ekskul 6 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-500">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Robotic</h3>
            </div>

            <!-- Ekskul 7 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-basketball"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Basket</h3>
            </div>

            <!-- Ekskul 8 -->
            <div class="group bg-white rounded-2xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-100">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i class="fa-solid fa-music"></i>
                </div>
                <h3 class="font-heading font-bold text-brand-900 text-lg">Paduan Suara</h3>
            </div>
        </div>
    </div>
</section>

<!-- PRESTASI -->
<section id="prestasi" class="py-20 lg:py-32 bg-white overflow-hidden">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Galeri Prestasi
                </div>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">Pencapaian Siswa Kami</h2>
                <p class="text-gray-600 text-lg">Bukti nyata dedikasi dan kerja keras seluruh civitas akademika dalam meraih keunggulan di berbagai bidang.</p>
            </div>
            <div class="mt-8 md:mt-0">
                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-900 text-white font-bold rounded-xl hover:bg-brand-800 transition-all shadow-lg">
                    Lihat Semua Prestasi <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Prestasi 1 -->
            <div class="group relative bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-500 reveal">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?q=80&w=1974&auto=format&fit=crop" alt="Juara Robotik" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 left-4 bg-accent-500 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                        NASIONAL
                    </div>
                </div>
                <div class="p-8">
                    <div class="text-brand-600 font-bold text-sm mb-2">AGUSTUS 2025</div>
                    <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">Juara 1 Lomba Robotik Nasional</h3>
                    <p class="text-gray-600 leading-relaxed">Tim Robotik sekolah berhasil meraih peringkat pertama dalam kompetisi teknologi tahunan yang diselenggarakan di Jakarta.</p>
                </div>
            </div>

            <!-- Prestasi 2 -->
            <div class="group relative bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-500 reveal delay-100">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2070&auto=format&fit=crop" alt="Lomba Debat" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 left-4 bg-brand-600 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                        PROVINSI
                    </div>
                </div>
                <div class="p-8">
                    <div class="text-brand-600 font-bold text-sm mb-2">MEI 2025</div>
                    <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">Juara Umum Debat Bahasa Inggris</h3>
                    <p class="text-gray-600 leading-relaxed">Kemenangan gemilang diraih oleh tim debat kami pada kompetisi tingkat provinsi se-Jawa Barat tahun ini.</p>
                </div>
            </div>

            <!-- Prestasi 3 -->
            <div class="group relative bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-500 reveal delay-200">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2132&auto=format&fit=crop" alt="Olimpiade Sains" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 left-4 bg-accent-500 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                        NASIONAL
                    </div>
                </div>
                <div class="p-8">
                    <div class="text-brand-600 font-bold text-sm mb-2">MARET 2025</div>
                    <h3 class="font-heading font-bold text-2xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">Medali Emas Olimpiade Sains (OSN)</h3>
                    <p class="text-gray-600 leading-relaxed">Siswa kami berhasil mengharumkan nama sekolah dengan meraih medali emas pada bidang Astronomi di OSN Nasional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BERITA & ARTIKEL -->
<section id="berita" class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Kabar Sekolah <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">Berita Terbaru</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Berita 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group reveal">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop" alt="Juara Olimpiade" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-brand-900 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                        PRESTASI
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-400 mb-3 gap-4">
                        <span><i class="fa-regular fa-calendar mr-1"></i> 12 Okt 2025</span>
                        <span><i class="fa-regular fa-user mr-1"></i> Humas</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors line-clamp-2">
                        Tim Robotik SMAN 1 Nusantara Raih Juara 1 Nasional
                    </h3>
                    <p class="text-gray-600 mb-5 line-clamp-3">Tim robotik berhasil mengalahkan puluhan sekolah lain pada ajang kompetisi teknologi nasional tahunan dengan karya inovasi robot pemilah sampah otomatis.</p>
                    <a href="#" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors flex items-center gap-2">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </article>

            <!-- Berita 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group reveal delay-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=2070&auto=format&fit=crop" alt="Study Tour" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-brand-900 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                        KEGIATAN
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-400 mb-3 gap-4">
                        <span><i class="fa-regular fa-calendar mr-1"></i> 05 Okt 2025</span>
                        <span><i class="fa-regular fa-user mr-1"></i> Kesiswaan</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors line-clamp-2">
                        Study Tour Budaya ke Kampung Naga Tasikmalaya
                    </h3>
                    <p class="text-gray-600 mb-5 line-clamp-3">Siswa kelas XI melaksanakan kunjungan budaya untuk mempelajari kearifan lokal dan pelestarian lingkungan hidup masyarakat adat secara langsung.</p>
                    <a href="#" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors flex items-center gap-2">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </article>

            <!-- Berita 3 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group reveal delay-200">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=2022&auto=format&fit=crop" alt="Ekskul" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-brand-900 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                        PENGUMUMAN
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-400 mb-3 gap-4">
                        <span><i class="fa-regular fa-calendar mr-1"></i> 28 Sep 2025</span>
                        <span><i class="fa-regular fa-user mr-1"></i> Admin</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-3 group-hover:text-brand-600 transition-colors line-clamp-2">
                        Jadwal Pendaftaran Ekstrakurikuler Semester Ganjil
                    </h3>
                    <p class="text-gray-600 mb-5 line-clamp-3">Diberitahukan kepada seluruh siswa kelas X, pendaftaran ekstrakurikuler wajib dan pilihan telah dibuka melalui portal akademik masing-masing.</p>
                    <a href="#" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors flex items-center gap-2">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </article>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 bg-white text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition-colors">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

<!-- GALERI & TESTIMONI -->
<section id="galeri" class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <!-- Galeri -->
        <div class="mb-24">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 reveal">
                <div>
                    <h2 class="font-heading text-4xl font-bold text-brand-900 mb-2">Momen Berharga</h2>
                    <p class="text-gray-600">Dokumentasi kegiatan siswa di lingkungan sekolah.</p>
                </div>
                <div class="flex gap-2 mt-4 md:mt-0">
                    <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 reveal">
                <div class="group relative aspect-square overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Galeri">
                    <div class="absolute inset-0 bg-brand-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-white text-3xl"></i>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1523580494112-071d4581a59c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Galeri">
                    <div class="absolute inset-0 bg-brand-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-white text-3xl"></i>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2132&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Galeri">
                    <div class="absolute inset-0 bg-brand-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-white text-3xl"></i>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Galeri">
                    <div class="absolute inset-0 bg-brand-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-white text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni -->
        <div class="bg-brand-50 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden reveal">
            <!-- Decorative quote -->
            <i class="fa-solid fa-quote-right absolute top-8 right-12 text-9xl text-brand-500/10"></i>
            
            <div class="grid md:grid-cols-2 gap-12 items-center relative z-10">
                <div>
                    <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                        Kata Alumni
                    </div>
                    <h2 class="font-heading text-4xl font-bold text-brand-900 mb-8">Apa Kata Mereka Tentang Kami?</h2>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-brand-100 relative">
                        <div class="flex text-accent-500 text-sm mb-4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-700 text-lg mb-6 italic">"Sekolah ini tidak hanya mengajarkan akademik, tapi juga membentuk karakter saya menjadi pribadi yang disiplin dan pantang menyerah. Guru-gurunya sangat suportif dalam membimbing siswa."</p>
                        
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop" class="w-12 h-12 rounded-full object-cover" alt="Alumni">
                            <div>
                                <h4 class="font-bold text-brand-900">Nadia Saphira</h4>
                                <p class="text-sm text-gray-500">Alumni 2020 • Mahasiswa Kedokteran UI</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:grid grid-cols-2 gap-6 relative">
                     <div class="mt-12 space-y-6">
                         <div class="bg-white p-6 rounded-2xl shadow-sm border border-brand-100">
                             <p class="text-gray-600 text-sm mb-4 line-clamp-4">"Fasilitas lab komputernya sangat mendukung minat saya di bidang programming. Berkat bimbingan guru RPL, saya bisa meraih juara."</p>
                             <div class="flex items-center gap-3">
                                 <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold">B</div>
                                 <div>
                                     <h4 class="font-bold text-sm text-brand-900">Budi Santoso</h4>
                                     <p class="text-xs text-gray-500">Alumni RPL 2022</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="space-y-6">
                         <div class="bg-white p-6 rounded-2xl shadow-sm border border-brand-100">
                             <p class="text-gray-600 text-sm mb-4 line-clamp-4">"Pengalaman berorganisasi di OSIS SMAN 1 sangat melatih leadership saya di dunia kerja saat ini."</p>
                             <div class="flex items-center gap-3">
                                 <div class="w-10 h-10 rounded-full bg-accent-100 flex items-center justify-center text-accent-600 font-bold">D</div>
                                 <div>
                                     <h4 class="font-bold text-sm text-brand-900">Diana Putri</h4>
                                     <p class="text-xs text-gray-500">Alumni IPS 2019</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden reveal">
            <div class="grid lg:grid-cols-5">
                
                <!-- Info Kolom Kiri -->
                <div class="lg:col-span-2 bg-brand-900 text-white p-10 md:p-14 relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-brand-800 rounded-full opacity-50 blur-2xl"></div>
                    
                    <div class="relative z-10">
                        <h2 class="font-heading text-3xl font-bold mb-2">Hubungi Kami</h2>
                        <p class="text-gray-300 mb-10">Punya pertanyaan seputar pendaftaran atau informasi sekolah? Jangan ragu untuk menghubungi kami.</p>
                        
                        <div class="space-y-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 border border-white/10 backdrop-blur-md">
                                    <i class="fa-solid fa-location-dot text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold mb-1">Alamat Kampus</h4>
                                    <p class="text-gray-300 text-sm">Jl. Pendidikan No. 123, Kecamatan Ilmu, Kota Pengetahuan, Provinsi Jaya 12345</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 border border-white/10 backdrop-blur-md">
                                    <i class="fa-solid fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold mb-1">Email</h4>
                                    <p class="text-gray-300 text-sm">info@sman1nusantara.sch.id<br>ppdb@sman1nusantara.sch.id</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 border border-white/10 backdrop-blur-md">
                                    <i class="fa-solid fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold mb-1">Telepon</h4>
                                    <p class="text-gray-300 text-sm">(021) 1234-5678<br>WA: 0812-3456-7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Kolom Kanan -->
                <div class="lg:col-span-3 p-10 md:p-14">
                    <h3 class="font-heading text-2xl font-bold text-brand-900 mb-6">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" id="nama" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none transition-all" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none transition-all" placeholder="contoh@email.com">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                            <input type="text" id="subjek" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none transition-all" placeholder="Tujuan pesan">
                        </div>
                        
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Pesan Anda</label>
                            <textarea id="pesan" rows="4" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none transition-all resize-none" placeholder="Tulis pertanyaan atau pesan Anda di sini..."></textarea>
                        </div>
                        
                        <button type="button" class="px-8 py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-lg hover:shadow-brand-500/30 transition-all transform hover:-translate-y-0.5 w-full md:w-auto">
                            Kirim Pesan <i class="fa-regular fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
