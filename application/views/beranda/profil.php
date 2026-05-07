<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- HERO SECTION PROFIL -->
<section class="relative pt-36 pb-20 lg:pt-40 lg:pb-24 overflow-hidden bg-brand-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1523050853063-bd80e295ce22?q=80&w=2070&auto=format&fit=crop" alt="Profil Background" class="w-full h-full object-cover opacity-20 lg:opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/80 to-brand-900"></div>
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-accent-500/20 rounded-full blur-3xl animate-pulse hidden sm:block"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-brand-600/20 rounded-full blur-3xl animate-pulse delay-700 hidden sm:block"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs sm:text-sm font-bold mb-6 sm:mb-8 tracking-wide uppercase">
            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
            Profil Sekolah
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Mengenal Lebih Dekat SMA YPPK Tiga Raja
        </h1>
        
        <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed font-sans">
            Visi, Misi, dan Sejarah perjalanan kami dalam mendidik generasi bangsa di Tanah Papua.
        </p>

        <a href="<?= base_url() ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 font-bold rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
</section>

<!-- VISI & MISI SECTION -->
<section id="visi-misi" class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            
            <!-- Left Text -->
            <div class="lg:w-1/2 reveal">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Visi & Misi
                </div>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">
                    Mencetak Pemimpin Masa Depan Sejak 1990
                </h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    SMA YPPK Tiga Raja Timika adalah lembaga pendidikan menengah atas yang berdedikasi untuk mengembangkan potensi maksimal setiap siswa melalui pendekatan holistik yang menyeimbangkan kecerdasan intelektual, emosional, dan spiritual.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-50 text-brand-600 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-2">Visi</h3>
                        <p class="text-gray-600 text-sm">Menjadi sekolah rujukan nasional yang unggul dalam prestasi, berkarakter, dan berwawasan lingkungan global.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
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

<!-- SEJARAH SECTION -->
<section id="sejarah" class="py-20 lg:py-32 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Sejarah Singkat <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
                </div>
                <h2 class="font-heading text-4xl font-bold text-brand-900">Perjalanan Kami</h2>
            </div>

            <div class="relative space-y-12">
                <!-- Timeline Line -->
                <div class="absolute left-0 md:left-1/2 top-0 bottom-0 w-0.5 bg-brand-100 -translate-x-1/2 hidden md:block"></div>

                <!-- Event 1 -->
                <div class="relative flex flex-col md:flex-row items-center gap-8 reveal">
                    <div class="md:w-1/2 md:text-right">
                        <div class="inline-block px-4 py-1 bg-brand-600 text-white font-bold rounded-lg text-sm mb-4">1990</div>
                        <h3 class="text-2xl font-bold text-brand-900 mb-3">Pendirian Sekolah</h3>
                        <p class="text-gray-600 leading-relaxed">Berawal dari semangat untuk memberikan pendidikan Katolik yang berkualitas di Timika, SMA YPPK Tiga Raja resmi didirikan oleh Yayasan Pendidikan dan Persekolahan Katolik.</p>
                    </div>
                    <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-white border-4 border-brand-600 rounded-full -translate-x-1/2 z-10 hidden md:block"></div>
                    <div class="md:w-1/2"></div>
                </div>

                <!-- Event 2 -->
                <div class="relative flex flex-col md:flex-row items-center gap-8 reveal">
                    <div class="md:w-1/2"></div>
                    <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-white border-4 border-brand-600 rounded-full -translate-x-1/2 z-10 hidden md:block"></div>
                    <div class="md:w-1/2">
                        <div class="inline-block px-4 py-1 bg-accent-500 text-white font-bold rounded-lg text-sm mb-4">2005</div>
                        <h3 class="text-2xl font-bold text-brand-900 mb-3">Akreditasi Pertama</h3>
                        <p class="text-gray-600 leading-relaxed">Berhasil meraih predikat akreditasi 'A' untuk pertama kalinya, membuktikan standar kualitas pendidikan yang kami berikan telah memenuhi kriteria nasional.</p>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="relative flex flex-col md:flex-row items-center gap-8 reveal">
                    <div class="md:w-1/2 md:text-right">
                        <div class="inline-block px-4 py-1 bg-brand-600 text-white font-bold rounded-lg text-sm mb-4">2018</div>
                        <h3 class="text-2xl font-bold text-brand-900 mb-3">Digitalisasi Pendidikan</h3>
                        <p class="text-gray-600 leading-relaxed">Mulai mengimplementasikan sistem pembelajaran berbasis digital dan e-learning untuk mempersiapkan siswa menghadapi era industri 4.0.</p>
                    </div>
                    <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-white border-4 border-brand-600 rounded-full -translate-x-1/2 z-10 hidden md:block"></div>
                    <div class="md:w-1/2"></div>
                </div>

                <!-- Event 4 -->
                <div class="relative flex flex-col md:flex-row items-center gap-8 reveal">
                    <div class="md:w-1/2"></div>
                    <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-white border-4 border-brand-600 rounded-full -translate-x-1/2 z-10 hidden md:block"></div>
                    <div class="md:w-1/2">
                        <div class="inline-block px-4 py-1 bg-accent-500 text-white font-bold rounded-lg text-sm mb-4">2026</div>
                        <h3 class="text-2xl font-bold text-brand-900 mb-3">Menuju Masa Depan</h3>
                        <p class="text-gray-600 leading-relaxed">Terus bertransformasi menjadi institusi pendidikan modern yang tetap berpegang teguh pada nilai-nilai karakter dan kearifan lokal Papua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
