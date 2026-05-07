<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- HERO SECTION SEJARAH -->
<section class="relative pt-36 pb-20 lg:pt-40 lg:pb-24 overflow-hidden bg-brand-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=2070&auto=format&fit=crop" alt="Sejarah Background" class="w-full h-full object-cover opacity-20 lg:opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/80 to-brand-900"></div>
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-accent-500/20 rounded-full blur-3xl animate-pulse hidden sm:block"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-brand-600/20 rounded-full blur-3xl animate-pulse delay-700 hidden sm:block"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs sm:text-sm font-bold mb-6 sm:mb-8 tracking-wide uppercase">
            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
            Sejarah Sekolah
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Perjalanan Sejak 1990
        </h1>
        
        <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed font-sans">
            Menelusuri jejak langkah kami dalam mencerdaskan kehidupan bangsa di Tanah Papua melalui pendidikan Katolik yang berkualitas.
        </p>

        <a href="<?= base_url('home/profil') ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 font-bold rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Profil
        </a>
    </div>
</section>

<!-- NARASI SEJARAH UTAMA -->
<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center justify-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-sm">
                    <span class="w-8 h-1 bg-brand-600 rounded-full"></span> Akar Perjuangan <span class="w-8 h-1 bg-brand-600 rounded-full"></span>
                </div>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-8 leading-tight">Warisan Pendidikan Katolik di Timika</h2>
                
                <div class="relative group">
                    <div class="absolute -inset-4 bg-brand-50 rounded-[2.5rem] -z-10 border border-brand-100"></div>
                    <img src="https://cdn-sekolah.annibuku.com/60302893/6.jpg" alt="Gedung Sekolah" class="rounded-[2rem] shadow-xl w-full h-[350px] md:h-[450px] object-cover mb-12" />
                </div>
            </div>

            <!-- Descriptive Paragraphs -->
            <div class="text-gray-700 text-lg md:text-xl leading-relaxed font-sans reveal text-justify">
                <p class="mb-12">
                    SMA YPPK Tiga Raja Timika lahir dari visi luhur Gereja Katolik untuk menyediakan akses pendidikan menengah atas yang berkualitas bagi anak-anak di wilayah Mimika. Didirikan pada tahun 1990 di bawah naungan Yayasan Pendidikan dan Persekolahan Katolik (YPPK), sekolah ini menjadi bukti nyata pengabdian gereja dalam mencerdaskan kehidupan bangsa di Tanah Papua. Dimulai dengan fasilitas yang sangat sederhana namun penuh dengan semangat pengabdian, sekolah ini hadir sebagai jawaban atas kerinduan masyarakat akan pendidikan menengah yang berbasis pada nilai-nilai Kristiani yang kuat.
                </p>

                <p class="mb-12">
                    Seiring berjalannya waktu, sekolah ini terus mengalami perkembangan yang signifikan baik dari segi kualitas pendidikan maupun sarana prasarana. Pada tahun 2005, kerja keras seluruh komunitas sekolah membuahkan hasil dengan diraihnya predikat Akreditasi A untuk pertama kalinya. Pencapaian ini tidak hanya menjadi simbol keunggulan akademik, tetapi juga mengukuhkan posisi SMA YPPK Tiga Raja sebagai institusi rujukan yang dikenal karena kedisiplinan dan pembentukan karakter siswanya yang unggul di wilayah Papua Barat.
                </p>

                <p>
                    Memasuki era transformasi digital sejak tahun 2018, sekolah terus berinovasi dengan mengintegrasikan sistem pembelajaran berbasis teknologi untuk memastikan setiap lulusan memiliki literasi digital yang mumpuni. Hari ini, SMA YPPK Tiga Raja terus berdiri tegak sebagai lentera pendidikan yang tak kunjung padam, berkomitmen menciptakan lingkungan belajar yang inovatif dan inklusif. Kami percaya bahwa setiap anak di Papua berhak mendapatkan masa depan yang gemilang melalui pendidikan yang berkualitas, penuh kasih, dan berorientasi pada masa depan.
                </p>
            </div>

            <!-- Focus Statement -->
            <div class="mt-16 p-8 md:p-12 bg-brand-900 text-white rounded-[3rem] shadow-2xl relative overflow-hidden reveal">
                <div class="absolute top-0 right-0 w-64 h-64 bg-accent-500/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <div class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center text-4xl shrink-0">
                        <i class="fa-solid fa-medal text-accent-500"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2 font-heading tracking-wide">Komitmen Tak Terhenti</h3>
                        <p class="text-white/80 text-lg">Lebih dari tiga dekade mengabdi, kami tetap setia pada akar perjuangan untuk mencetak generasi pemimpin yang berintegritas dan berwawasan luas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER CTA -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 text-center reveal">
        <h2 class="font-heading text-4xl font-bold text-brand-900 mb-8">Terus Membangun Bersama</h2>
        <p class="text-gray-600 text-lg mb-10 max-w-2xl mx-auto">Kami mengundang Anda untuk mengenal lebih jauh tentang visi dan misi kami untuk masa depan pendidikan di Papua.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="<?= base_url('home/visi_misi') ?>" class="px-8 py-4 bg-brand-600 text-white font-bold rounded-2xl hover:bg-brand-700 transition-all shadow-lg shadow-brand-600/20">
                Lihat Visi & Misi
            </a>
            <a href="<?= base_url('home/profil') ?>" class="px-8 py-4 bg-white text-brand-900 border border-gray-200 font-bold rounded-2xl hover:bg-gray-100 transition-all">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
