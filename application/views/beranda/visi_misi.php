<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- HERO SECTION: VISI & MISI -->
<section class="relative pt-36 pb-20 lg:pt-40 lg:pb-24 overflow-hidden bg-brand-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Visi Misi Background" class="w-full h-full object-cover opacity-20 lg:opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/80 to-brand-900"></div>
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-accent-500/20 rounded-full blur-3xl animate-pulse hidden sm:block"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-brand-600/20 rounded-full blur-3xl animate-pulse delay-700 hidden sm:block"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs sm:text-sm font-bold mb-6 sm:mb-8 tracking-wide uppercase">
            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
            Visi & Misi
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Visi & Misi Sekolah
        </h1>
        
        <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed font-sans">
            Landasan filosofis dan langkah strategis kami dalam mewujudkan pendidikan berkualitas di Tanah Papua.
        </p>

        <a href="<?= base_url('home/profil') ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 font-bold rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Profil
        </a>
    </div>
</section>

<!-- VISI SECTION -->
<section class="py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-6 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Visi Sekolah <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            
            <div class="relative p-10 md:p-16 bg-brand-50 rounded-[3rem] border border-brand-100 overflow-hidden shadow-sm">
                <!-- Decorative Icon -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-100/50 rounded-full blur-3xl"></div>
                
                <i class="fa-solid fa-quote-left text-brand-200 text-6xl mb-8 opacity-50"></i>
                <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-900 leading-tight italic relative z-10">
                    "Menjadi sekolah rujukan nasional yang unggul dalam prestasi, berkarakter, dan berwawasan lingkungan global."
                </h2>
                <p class="mt-8 text-brand-600 font-bold tracking-widest uppercase text-sm">— SMA YPPK TIGA RAJA TIMIKA</p>
            </div>
        </div>
    </div>
</section>

<!-- MISI SECTION -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Misi Sekolah <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">Langkah Strategis</h2>
            <p class="text-gray-600 text-lg">Misi ini menjadi panduan operasional dalam mencapai visi besar sekolah kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Misi 1 -->
            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 reveal">
                <div class="flex items-start gap-6">
                    <div class="w-14 h-14 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-3">Pendidikan Bermutu</h3>
                        <p class="text-gray-600 leading-relaxed">Menyelenggarakan proses pembelajaran yang efektif, inovatif, dan berpusat pada pengembangan potensi siswa secara maksimal.</p>
                    </div>
                </div>
            </div>

            <!-- Misi 2 -->
            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 reveal delay-100">
                <div class="flex items-start gap-6">
                    <div class="w-14 h-14 bg-amber-50 text-accent-500 rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-accent-500 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-3">Pembentukan Karakter</h3>
                        <p class="text-gray-600 leading-relaxed">Menanamkan nilai-nilai religius, disiplin, jujur, dan tanggung jawab melalui pembiasaan dan keteladanan harian.</p>
                    </div>
                </div>
            </div>

            <!-- Misi 3 -->
            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 reveal delay-200">
                <div class="flex items-start gap-6">
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-3">Wawasan Lingkungan</h3>
                        <p class="text-gray-600 leading-relaxed">Mewujudkan lingkungan sekolah yang bersih, sehat, dan asri untuk menunjang kegiatan pembelajaran yang optimal.</p>
                    </div>
                </div>
            </div>

            <!-- Misi 4 -->
            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 reveal delay-300">
                <div class="flex items-start gap-6">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-xl text-brand-900 mb-3">Budaya Bangsa</h3>
                        <p class="text-gray-600 leading-relaxed">Melestarikan nilai-nilai budaya lokal Papua serta kearifan nasional dalam setiap aspek pendidikan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TARGET SECTION -->
<section class="py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2 reveal">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Komitmen Kami
                </div>
                <h2 class="font-heading text-4xl font-bold text-brand-900 mb-6">Mewujudkan Impian Bersama</h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Melalui visi dan misi ini, kami berkomitmen untuk menyediakan lingkungan yang mendukung tumbuh kembang siswa secara holistik agar siap menghadapi tantangan masa depan.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="w-10 h-10 bg-white shadow-sm text-brand-600 rounded-xl flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Lulusan yang siap bersaing di tingkat nasional</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="w-10 h-10 bg-white shadow-sm text-brand-600 rounded-xl flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Penerapan teknologi dalam setiap mata pelajaran</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="w-10 h-10 bg-white shadow-sm text-brand-600 rounded-xl flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Pengembangan kepemimpinan berkarakter</span>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/2 reveal">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-brand-100 to-blue-50 rounded-[2rem] transform rotate-3 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1544531585-9847b68c8c86?q=80&w=2070&auto=format&fit=crop" alt="Misi Sekolah" class="rounded-[2.5rem] shadow-2xl w-full h-[450px] object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
