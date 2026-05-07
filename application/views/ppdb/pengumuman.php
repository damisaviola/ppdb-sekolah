<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar_ppdb'); ?>

<!-- HERO SECTION PENGUMUMAN -->
<section class="relative pt-36 pb-20 lg:pt-40 lg:pb-24 overflow-hidden bg-brand-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://scontent.fjog3-1.fna.fbcdn.net/v/t1.6435-9/62305084_2339358842983176_6351193278485889024_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeGjWXXBMDu3LOdePhYZs1ctwm8tFNGXiQvCby0U0ZeJCwk0jhFlBUwLPGSb_MvTXB3WTasGStBO61uFp_Rd9v99&_nc_ohc=pzKL00kZzY8Q7kNvwH0SQvW&_nc_oc=Adq9OQnVyVy0xq7hlRBMrXB3V2SoukBYtpAeuKznkfk4_3Mx1m20MchIBydcMeKhL3jE-0JDIu0yzElPMMddhU16&_nc_zt=23&_nc_ht=scontent.fjog3-1.fna&_nc_gid=1dLz2aruGQD5rR27lminng&_nc_ss=7b2a8&oh=00_Af4eToO5f8vwOgm6wwstiGImymEDdlKLKlQb5Dnw5EPjJQ&oe=6A1F7622" alt="PPDB Background" class="w-full h-full object-cover opacity-20 lg:opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/80 to-brand-900"></div>
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-accent-500/20 rounded-full blur-3xl animate-pulse hidden sm:block"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-brand-600/20 rounded-full blur-3xl animate-pulse delay-700 hidden sm:block"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-xs sm:text-sm font-bold mb-6 sm:mb-8 tracking-wide uppercase">
            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
            Info Terbaru
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Pengumuman PPDB
        </h1>
        
        <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed font-sans">
            Informasi terbaru mengenai hasil seleksi, jadwal tes, dan berita penting lainnya seputar penerimaan siswa baru SMA YPPK Tiga Raja Timika.
        </p>

        <a href="<?= base_url('ppdb') ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 font-bold rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda PPDB
        </a>
    </div>
</section>


<!-- ANNOUNCEMENT LIST -->
<section class="py-20 lg:py-32 bg-gray-50 min-h-[50vh]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto space-y-6">

            <!-- Featured Announcement -->
            <div class="bg-white rounded-2xl sm:rounded-3xl p-6 md:p-8 lg:p-10 shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-500 overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brand-50 rounded-bl-[100px] group-hover:scale-110 transition-transform"></div>
                <div class="relative z-10">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <span class="px-3 py-1 bg-rose-50 text-rose-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-rose-100 flex items-center gap-1.5">
                            <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span></span>
                            Penting
                        </span>
                        <span class="text-gray-400 text-xs sm:text-sm flex items-center gap-1.5"><i class="fa-regular fa-calendar"></i> 05 April 2026</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-brand-900 mb-3 sm:mb-4 group-hover:text-brand-600 transition-colors leading-tight">Hasil Seleksi Administrasi & Jadwal Tes Akademik Gelombang I</h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 sm:mb-8 leading-relaxed line-clamp-3">Berdasarkan hasil verifikasi berkas yang telah dilakukan oleh Panitia PPDB SMA YPPK Tiga Raja Timika, berikut adalah daftar calon siswa yang dinyatakan LULUS seleksi administrasi dan berhak mengikuti Tes Potensi Akademik (TPA). Silakan unduh lampiran untuk melihat daftar lengkap nama peserta.</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#" class="px-5 py-2.5 bg-brand-600 text-white font-bold rounded-xl hover:bg-brand-700 transition-all flex items-center gap-2 text-sm">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#" class="px-5 py-2.5 bg-white text-brand-600 border border-brand-200 font-bold rounded-xl hover:bg-brand-50 transition-all flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-file-pdf text-rose-500"></i> Unduh PDF
                        </a>
                    </div>
                </div>
            </div>

            <!-- Regular Announcements -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <!-- Item 1 -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-blue-100">Informasi</span>
                        <span class="text-gray-400 text-xs flex items-center gap-1"><i class="fa-regular fa-calendar"></i> 28 Maret 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-brand-900 mb-2 group-hover:text-brand-600 transition-colors leading-snug">Panduan Penggunaan Portal Dashboard Calon Siswa</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">Untuk memudahkan proses pendaftaran, panitia telah merilis panduan resmi penggunaan portal dashboard calon siswa baru.</p>
                    <a href="#" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 hover:gap-2.5 transition-all">
                        Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Item 2 -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-0.5 bg-amber-50 text-amber-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-amber-100">Peringatan</span>
                        <span class="text-gray-400 text-xs flex items-center gap-1"><i class="fa-regular fa-calendar"></i> 15 Maret 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-brand-900 mb-2 group-hover:text-brand-600 transition-colors leading-snug">Waspada Penipuan Mengatasnamakan Panitia PPDB</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">Diberitahukan kepada seluruh calon siswa dan orang tua untuk berhati-hati terhadap segala bentuk penipuan yang meminta biaya tambahan.</p>
                    <a href="#" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 hover:gap-2.5 transition-all">
                        Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Item 3 -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-emerald-100">Event</span>
                        <span class="text-gray-400 text-xs flex items-center gap-1"><i class="fa-regular fa-calendar"></i> 10 Maret 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-brand-900 mb-2 group-hover:text-brand-600 transition-colors leading-snug">Open House & Sosialisasi Jalur Prestasi 2026</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">Hadiri open house SMA YPPK Tiga Raja Timika untuk mengenal lebih jauh fasilitas, program unggulan, dan berkonsultasi mengenai jalur prestasi.</p>
                    <a href="#" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 hover:gap-2.5 transition-all">
                        Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Item 4 -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-blue-100">Informasi</span>
                        <span class="text-gray-400 text-xs flex items-center gap-1"><i class="fa-regular fa-calendar"></i> 01 Februari 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-brand-900 mb-2 group-hover:text-brand-600 transition-colors leading-snug">Pendaftaran PPDB Gelombang I Resmi Dibuka</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">Mulai hari ini, calon siswa sudah dapat melakukan pendaftaran secara online melalui sistem PPDB terpadu kami.</p>
                    <a href="#" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 hover:gap-2.5 transition-all">
                        Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pt-8 flex justify-center">
                <nav class="flex items-center gap-2">
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-400 hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 transition-all shadow-sm"><i class="fa-solid fa-chevron-left text-xs"></i></a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand-600 text-white font-bold shadow-lg shadow-brand-600/20">1</a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-600 font-bold hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 transition-all shadow-sm">2</a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-400 hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 transition-all shadow-sm"><i class="fa-solid fa-chevron-right text-xs"></i></a>
                </nav>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/footer'); ?>
