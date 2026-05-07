<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- HERO SECTION PRESTASI -->
<section class="relative pt-36 pb-20 lg:pt-40 lg:pb-24 overflow-hidden bg-brand-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1567054627341-863673c68383?q=80&w=2070&auto=format&fit=crop" alt="Prestasi Background" class="w-full h-full object-cover opacity-20 lg:opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/80 to-brand-900"></div>
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-accent-500/20 rounded-full blur-3xl animate-pulse hidden sm:block"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-brand-600/20 rounded-full blur-3xl animate-pulse delay-700 hidden sm:block"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs sm:text-sm font-bold mb-6 sm:mb-8 tracking-wide uppercase">
            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
            Prestasi Siswa
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Kebanggaan SMA Tiga Raja
        </h1>
        
        <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed font-sans">
            Dedikasi, kerja keras, dan semangat pantang menyerah yang membuahkan hasil membanggakan di berbagai tingkat kompetisi.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <div class="px-6 py-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-white text-center min-w-[120px]">
                <div class="text-2xl font-bold text-accent-500">50+</div>
                <div class="text-xs uppercase tracking-wider font-bold opacity-80">Nasional</div>
            </div>
            <div class="px-6 py-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-white text-center min-w-[120px]">
                <div class="text-2xl font-bold text-accent-500">120+</div>
                <div class="text-xs uppercase tracking-wider font-bold opacity-80">Provinsi</div>
            </div>
            <div class="px-6 py-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-white text-center min-w-[120px]">
                <div class="text-2xl font-bold text-accent-500">200+</div>
                <div class="text-xs uppercase tracking-wider font-bold opacity-80">Kabupaten</div>
            </div>
        </div>
    </div>
</section>

<!-- DAFTAR PRESTASI -->
<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Wall of Fame <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6 tracking-tight">Prestasi Terbaru</h2>
            <p class="text-gray-600 text-lg">Inilah beberapa pencapaian gemilang yang diraih oleh siswa-siswi terbaik kami dalam kurun waktu terakhir.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 reveal mt-16 lg:mt-24">
            <!-- Prestasi 1 -->
            <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="relative overflow-hidden h-64 shrink-0">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Prestasi 1" />
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 bg-brand-600 text-white text-xs font-bold rounded-full uppercase tracking-wider shadow-lg shadow-brand-600/20">Akademik</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-accent-600 text-sm font-bold mb-4 uppercase tracking-widest">
                        <i class="fa-solid fa-medal"></i> Juara 1 Nasional
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-4 leading-snug group-hover:text-brand-600 transition-colors">Olimpiade Sains Nasional Bidang Matematika</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Membanggakan Tanah Papua dengan meraih medali emas di tingkat nasional bersaing dengan ratusan sekolah terbaik lainnya.</p>
                    <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">Tahun 2024</span>
                        <div class="w-10 h-10 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center group-hover:bg-brand-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-award"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prestasi 2 -->
            <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="relative overflow-hidden h-64 shrink-0">
                    <img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?q=80&w=2069&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Prestasi 2" />
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 bg-accent-500 text-white text-xs font-bold rounded-full uppercase tracking-wider shadow-lg shadow-accent-500/20">Olahraga</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-accent-600 text-sm font-bold mb-4 uppercase tracking-widest">
                        <i class="fa-solid fa-medal"></i> Juara 1 Provinsi
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-4 leading-snug group-hover:text-brand-600 transition-colors">Turnamen Basket Pelajar se-Papua</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Tim basket putra SMA Tiga Raja berhasil mempertahankan gelar juara untuk ketiga kalinya secara berturut-turut.</p>
                    <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">Tahun 2024</span>
                        <div class="w-10 h-10 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center group-hover:bg-brand-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-award"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prestasi 3 -->
            <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="relative overflow-hidden h-64 shrink-0">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Prestasi 3" />
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 bg-brand-600 text-white text-xs font-bold rounded-full uppercase tracking-wider shadow-lg shadow-brand-600/20">Kesenian</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-accent-600 text-sm font-bold mb-4 uppercase tracking-widest">
                        <i class="fa-solid fa-medal"></i> Juara Umum
                    </div>
                    <h3 class="font-heading font-bold text-xl text-brand-900 mb-4 leading-snug group-hover:text-brand-600 transition-colors">Festival Seni Pelajar Nasional (FLS2N)</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Menampilkan tarian tradisional kontemporer yang memukau dewan juri dan meraih predikat tarian terbaik.</p>
                    <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">Tahun 2023</span>
                        <div class="w-10 h-10 bg-brand-50 text-brand-600 rounded-full flex items-center justify-center group-hover:bg-brand-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-award"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explicit Spacer to force gap -->
        <div class="h-24 lg:h-40"></div>

        <!-- Pagination/Load More Button -->
        <div class="text-center reveal">
            <button class="px-8 py-4 bg-brand-900 text-white font-bold rounded-2xl hover:bg-brand-800 transition-all shadow-xl shadow-brand-900/10 flex items-center gap-2 mx-auto">
                Lihat Lebih Banyak Prestasi <i class="fa-solid fa-chevron-down"></i>
            </button>
        </div>
    </div>
</section>

<!-- KOMITMEN PRESTASI -->
<section class="py-20 lg:py-28 bg-brand-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-100/50 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
    <div class="container mx-auto px-4 text-center reveal relative z-10">
        <div class="w-24 h-24 bg-white shadow-xl text-brand-600 rounded-3xl flex items-center justify-center text-4xl mx-auto mb-8">
            <i class="fa-solid fa-trophy"></i>
        </div>
        <h2 class="font-heading text-4xl font-bold text-brand-900 mb-6">Mendukung Setiap Bakat</h2>
        <p class="text-gray-600 text-lg mb-10 max-w-3xl mx-auto leading-relaxed">
            Di SMA YPPK Tiga Raja, kami percaya bahwa setiap siswa memiliki potensi unik. Kami menyediakan berbagai fasilitas dan program pembinaan intensif untuk memastikan bakat-bakat tersebut berkembang menjadi prestasi yang nyata.
        </p>
        <div class="flex flex-wrap justify-center gap-12">
            <div class="flex flex-col items-center">
                <div class="text-3xl font-bold text-brand-900 mb-1">Pembinaan</div>
                <div class="text-sm text-brand-600 uppercase font-bold tracking-widest">Intensif</div>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-3xl font-bold text-brand-900 mb-1">Fasilitas</div>
                <div class="text-sm text-brand-600 uppercase font-bold tracking-widest">Lengkap</div>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-3xl font-bold text-brand-900 mb-1">Dukungan</div>
                <div class="text-sm text-brand-600 uppercase font-bold tracking-widest">Penuh</div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
