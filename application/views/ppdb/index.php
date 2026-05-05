<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar_ppdb'); ?>

<!-- HERO SECTION PPDB -->
<section class="relative min-h-[70vh] lg:min-h-[80vh] flex items-center pt-36 pb-20 lg:pt-40 lg:pb-32 overflow-hidden bg-brand-900">
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
            <span class="relative flex h-2 w-2 sm:h-3 sm:w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 sm:h-3 sm:w-3 bg-white"></span>
            </span>
            Penerimaan Siswa Baru 2026/2027
        </div>
        
        <h1 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1] max-w-4xl mx-auto">
            Mulailah Perjalanan <br class="hidden md:block"> 
            Masa Depanmu Di Sini
        </h1>
        
        <p class="text-base sm:text-lg lg:text-xl text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed px-4 sm:px-0 font-sans">
            Bergabunglah dengan komunitas pembelajar yang dinamis di SMA YPPK Tiga Raja Timika. Kami mencetak generasi yang cerdas, berkarakter, dan siap menghadapi tantangan global.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
            <a href="#alur" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 bg-brand-600 hover:bg-brand-500 text-white font-bold rounded-xl shadow-xl transition-all transform hover:-translate-y-1 text-center">
                Alur Pendaftaran <i class="fa-solid fa-chevron-down ml-2"></i>
            </a>
            <a href="https://forms.gle/placeholder" target="_blank" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 font-bold rounded-xl shadow-lg transition-all transform hover:-translate-y-1 text-center">
                Daftar Online Sekarang <i class="fa-solid fa-paper-plane ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- STATS BRIEF -->
<section class="py-8 bg-white border-b border-gray-100 relative z-20 -mt-10 sm:-mt-16 mx-4 md:mx-0 rounded-2xl md:rounded-none shadow-lg md:shadow-none">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-5xl mx-auto bg-white md:rounded-2xl md:shadow-2xl md:border border-gray-50 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-0 divide-y md:divide-y-0 md:divide-x divide-gray-100 md:py-8">
            <div class="px-2 sm:px-6 text-center pt-4 md:pt-0 border-t-0">
                <p class="text-2xl sm:text-3xl font-heading font-bold text-brand-900 mb-1">Akreditasi</p>
                <p class="text-accent-600 font-bold text-sm sm:text-base md:text-xl uppercase tracking-widest">Grade A</p>
            </div>
            <div class="px-2 sm:px-6 text-center pt-4 md:pt-0 border-t-0">
                <p class="text-2xl sm:text-3xl font-heading font-bold text-brand-900 mb-1">Beasiswa</p>
                <p class="text-gray-500 font-medium text-sm sm:text-base italic">Tersedia</p>
            </div>
            <div class="px-2 sm:px-6 text-center pt-6 md:pt-0">
                <p class="text-2xl sm:text-3xl font-heading font-bold text-brand-900 mb-1">Kuota</p>
                <p class="text-gray-500 font-medium text-sm sm:text-base">Terbatas</p>
            </div>
            <div class="px-2 sm:px-6 text-center pt-6 md:pt-0 border-l-0 md:border-l">
                <p class="text-2xl sm:text-3xl font-heading font-bold text-brand-900 mb-1">Lulusan</p>
                <p class="text-gray-500 font-medium text-sm sm:text-base">PTN & Luar Negeri</p>
            </div>
        </div>
    </div>
</section>

<!-- ALUR PENDAFTARAN -->
<section id="alur" class="py-16 lg:py-24 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 reveal">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-900 mb-4 sm:mb-6">Alur Pendaftaran</h2>
            <p class="text-gray-600 text-base sm:text-lg px-2">Proses pendaftaran yang mudah dan transparan untuk memudahkan calon siswa dan orang tua.</p>
        </div>

        <div class="relative max-w-6xl mx-auto">
            <!-- Connector Line (Desktop) -->
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-0.5 bg-brand-200 -translate-y-1/2 z-0"></div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 relative z-10">
                <!-- Step 1 -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-brand-100 group-hover:bg-brand-600 text-brand-600 group-hover:text-white rounded-2xl flex items-center justify-center text-xl sm:text-2xl font-bold mb-4 sm:mb-6 transition-colors duration-300">1</div>
                    <h3 class="font-heading font-bold text-lg sm:text-xl text-brand-900 mb-2 sm:mb-3">Pengisian Formulir</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Calon siswa mengisi formulir pendaftaran online melalui website resmi atau datang langsung ke sekolah.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal delay-100 group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-brand-100 group-hover:bg-brand-600 text-brand-600 group-hover:text-white rounded-2xl flex items-center justify-center text-xl sm:text-2xl font-bold mb-4 sm:mb-6 transition-colors duration-300">2</div>
                    <h3 class="font-heading font-bold text-lg sm:text-xl text-brand-900 mb-2 sm:mb-3">Verifikasi Berkas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Menyerahkan dokumen persyaratan seperti Ijazah/SKL, Kartu Keluarga, dan pas foto untuk divalidasi panitia.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal delay-200 group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-brand-100 group-hover:bg-brand-600 text-brand-600 group-hover:text-white rounded-2xl flex items-center justify-center text-xl sm:text-2xl font-bold mb-4 sm:mb-6 transition-colors duration-300">3</div>
                    <h3 class="font-heading font-bold text-lg sm:text-xl text-brand-900 mb-2 sm:mb-3">Tes Seleksi</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Mengikuti tes potensi akademik, wawancara, dan tes minat bakat sesuai jadwal yang ditentukan.</p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal delay-300 group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-brand-100 group-hover:bg-brand-600 text-brand-600 group-hover:text-white rounded-2xl flex items-center justify-center text-xl sm:text-2xl font-bold mb-4 sm:mb-6 transition-colors duration-300">4</div>
                    <h3 class="font-heading font-bold text-lg sm:text-xl text-brand-900 mb-2 sm:mb-3">Daftar Ulang</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Setelah dinyatakan lulus, calon siswa melakukan pembayaran biaya pendidikan dan melengkapi administrasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PERSYARATAN -->
<section id="persyaratan" class="py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-start max-w-7xl mx-auto">
            <div class="lg:w-1/3 reveal">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold mb-4 tracking-wider uppercase text-xs sm:text-sm">
                    <span class="w-6 sm:w-8 h-1 bg-brand-600 rounded-full"></span> Dokumen & Ketentuan
                </div>
                <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-900 mb-4 sm:mb-6">Persyaratan Pendaftaran</h2>
                <p class="text-gray-600 mb-6 sm:mb-8 text-sm sm:text-base leading-relaxed">
                    Pastikan Anda menyiapkan seluruh dokumen yang diperlukan untuk memperlancar proses pendaftaran. Semua dokumen harus dalam bentuk asli dan fotokopi yang telah dilegalisir.
                </p>
                <div class="bg-brand-50 p-5 sm:p-6 rounded-2xl border border-brand-100">
                    <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-brand-600 text-white rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-circle-info text-sm sm:text-base"></i>
                        </div>
                        <h4 class="font-bold text-brand-900 text-base sm:text-lg">Penting</h4>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-600 italic">"Pendaftaran dapat ditutup sewaktu-waktu jika kuota sudah terpenuhi. Segera lakukan pendaftaran Anda sebelum tenggat waktu."</p>
                </div>
            </div>

            <div class="lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 reveal lg:delay-100 w-full">
                <!-- Card 1 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Fotokopi Ijazah/SKL</h4>
                        <p class="text-xs sm:text-sm text-gray-500">2 Lembar yang telah dilegalisir oleh sekolah asal.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-id-card"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Akta Kelahiran</h4>
                        <p class="text-xs sm:text-sm text-gray-500">2 Lembar fotokopi sesuai dengan identitas kependudukan.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-users"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Kartu Keluarga (KK)</h4>
                        <p class="text-xs sm:text-sm text-gray-500">2 Lembar fotokopi yang masih berlaku.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-image"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Pas Foto 3x4 & 4x6</h4>
                        <p class="text-xs sm:text-sm text-gray-500">Masing-masing 4 lembar dengan latar belakang merah.</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-vial"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Surat Keterangan Sehat</h4>
                        <p class="text-xs sm:text-sm text-gray-500">Dari Puskesmas atau rumah sakit pemerintah.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="p-5 sm:p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-2xl border border-gray-100 flex gap-4 items-start hover:-translate-y-1 transition-transform">
                    <div class="text-brand-500 text-2xl shrink-0 mt-0.5"><i class="fa-solid fa-medal"></i></div>
                    <div>
                        <h4 class="font-bold text-brand-900 mb-1 text-base sm:text-lg">Piagam Prestasi</h4>
                        <p class="text-xs sm:text-sm text-gray-500">(Opsional) Sertifikat minimal tingkat kabupaten/kota.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JALUR SELEKSI -->
<section id="jalur" class="py-16 lg:py-24 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 reveal">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-900 mb-4 sm:mb-6">Jalur Pendaftaran</h2>
            <p class="text-gray-600 text-base sm:text-lg">Kami menyediakan berbagai jalur masuk yang dapat disesuaikan dengan potensi dan prestasi calon siswa.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 max-w-6xl mx-auto">
            <!-- Jalur Raport -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal group">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-file-signature"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-brand-900 mb-4">Seleksi Raport</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">Seleksi berdasarkan nilai rata-rata raport SMP semester 1 sampai 5. Tanpa tes tertulis bagi siswa dengan nilai konsisten.</p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Rata-rata Nilai > 80</li>
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Scan Raport Semester 1-5</li>
                </ul>
            </div>

            <!-- Jalur Prestasi -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal delay-100 group border-t-4 border-t-accent-500">
                <div class="w-16 h-16 bg-amber-50 text-accent-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-accent-500 group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-brand-900 mb-4">Seleksi Prestasi</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">Jalur khusus bagi siswa berprestasi di bidang Akademik maupun Non-Akademik (Olahraga, Seni, Organisasi).</p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Sertifikat Min. Kab/Kota</li>
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Bebas Biaya Pendaftaran</li>
                </ul>
            </div>

            <!-- Jalur CBT -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 reveal delay-200 group">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-brand-900 mb-4">Seleksi Tes CBT</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">Seleksi melalui tes berbasis komputer (Computer Based Test) yang diselenggarakan langsung di kampus sekolah.</p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Tes Potensi Akademik</li>
                    <li class="flex items-center gap-2 text-xs text-gray-500"><i class="fa-solid fa-check text-green-500"></i> Hasil Langsung Keluar</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- JADWAL -->
<section id="jadwal" class="py-16 lg:py-24 bg-brand-900 text-white overflow-hidden relative">
    <!-- Decorative Glow -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-600/30 rounded-full blur-[100px] hidden sm:block"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-accent-600/20 rounded-full blur-[80px] hidden sm:block"></div>
    
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 reveal">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold mb-4 sm:mb-6">Jadwal PPDB 2026/2027</h2>
            <p class="text-gray-400 text-sm sm:text-base lg:text-lg">Catat tanggal-tanggal penting berikut agar tidak terlewatkan setiap tahapannya.</p>
        </div>

        <div class="max-w-4xl mx-auto reveal">
            <div class="space-y-4 sm:space-y-6">
                <!-- Gelombang 1 -->
                <div class="group bg-white/5 backdrop-blur-md rounded-2xl p-5 sm:p-6 lg:p-8 border border-white/10 hover:bg-white/10 transition-colors">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 sm:gap-4">
                        <div>
                            <span class="inline-block px-3 py-1 bg-accent-500 text-brand-900 text-[10px] sm:text-xs font-bold rounded-lg mb-2 sm:mb-3 uppercase tracking-wider">Gelombang I</span>
                            <h4 class="text-xl sm:text-2xl font-heading font-bold text-white">Pendaftaran & Pengembalian Berkas</h4>
                        </div>
                        <div class="text-left md:text-right mt-2 md:mt-0">
                            <p class="text-accent-400 font-bold text-lg sm:text-xl md:text-2xl mb-1">01 Feb - 31 Mar 2026</p>
                            <p class="text-gray-400 text-xs sm:text-sm flex items-center md:justify-end gap-1"><i class="fa-regular fa-clock"></i> Pukul 08.00 - 14.00 WIT</p>
                        </div>
                    </div>
                </div>

                <!-- Tes Gelombang 1 -->
                <div class="group bg-white/5 backdrop-blur-md rounded-2xl p-5 sm:p-6 lg:p-8 border border-white/10 hover:bg-white/10 transition-colors">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 sm:gap-4">
                        <div>
                            <span class="inline-block px-3 py-1 bg-white/10 text-gray-300 text-[10px] sm:text-xs font-bold rounded-lg mb-2 sm:mb-3 uppercase tracking-wider border border-white/5">Gelombang I</span>
                            <h4 class="text-xl sm:text-2xl font-heading font-bold text-white">Tes Seleksi & Wawancara</h4>
                        </div>
                        <div class="text-left md:text-right mt-2 md:mt-0">
                            <p class="text-white font-bold text-lg sm:text-xl md:text-2xl mb-1">05 April 2026</p>
                            <p class="text-gray-400 text-xs sm:text-sm flex items-center md:justify-end gap-1"><i class="fa-solid fa-location-dot"></i> Kampus SMA YPPK Tiga Raja</p>
                        </div>
                    </div>
                </div>

                <!-- Pengumuman -->
                <div class="group bg-white/5 backdrop-blur-md rounded-2xl p-5 sm:p-6 lg:p-8 border border-brand-500/30 hover:bg-brand-800/50 transition-colors relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-green-500/10 rounded-full blur-2xl"></div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 sm:gap-4 relative z-10">
                        <div>
                            <span class="inline-block px-3 py-1 bg-green-500/20 text-green-400 border border-green-500/30 text-[10px] sm:text-xs font-bold rounded-lg mb-2 sm:mb-3 uppercase tracking-wider">Pengumuman</span>
                            <h4 class="text-xl sm:text-2xl font-heading font-bold text-white">Hasil Seleksi Gelombang I</h4>
                        </div>
                        <div class="text-left md:text-right mt-2 md:mt-0">
                            <p class="text-green-400 font-bold text-lg sm:text-xl md:text-2xl mb-1">10 April 2026</p>
                            <p class="text-gray-300 text-xs sm:text-sm flex items-center md:justify-end gap-1"><i class="fa-solid fa-globe"></i> Website & Papan Pengumuman</p>
                        </div>
                    </div>
                </div>

                <!-- Gelombang 2 -->
                <div class="group bg-transparent rounded-2xl p-5 sm:p-6 lg:p-8 border border-white/10 border-dashed opacity-75 hover:opacity-100 transition-opacity">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 sm:gap-4">
                        <div>
                            <span class="inline-block px-3 py-1 bg-transparent border border-gray-500 text-gray-400 text-[10px] sm:text-xs font-bold rounded-lg mb-2 sm:mb-3 uppercase tracking-wider">Gelombang II</span>
                            <h4 class="text-lg sm:text-xl font-heading font-bold text-gray-300">Pendaftaran Gelombang II</h4>
                        </div>
                        <div class="text-left md:text-right mt-2 md:mt-0">
                            <p class="text-gray-300 font-bold text-base sm:text-lg md:text-xl mb-1">15 Apr - 15 Jun 2026</p>
                            <p class="text-gray-500 text-xs sm:text-sm">*Hanya jika kuota masih tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq" class="py-16 lg:py-24 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 reveal">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-brand-900 mb-4 sm:mb-6">Pertanyaan Sering Diajukan (FAQ)</h2>
            <p class="text-gray-600 text-sm sm:text-base lg:text-lg px-2">Temukan jawaban cepat atas pertanyaan-pertanyaan yang sering diajukan mengenai pendaftaran.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-3 sm:space-y-4 reveal">
            <!-- FAQ 1 -->
            <div class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                <button class="faq-button w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-gray-50 transition-colors font-bold text-brand-900 focus:outline-none group">
                    <span class="text-sm sm:text-base pr-4">Apakah pendaftaran bisa dilakukan secara online?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="px-5 sm:px-6 pb-6 pt-0 text-gray-600 text-xs sm:text-sm leading-relaxed border-t border-gray-100">
                        <div class="pt-4">Ya, pendaftaran bisa dilakukan secara online melalui link yang tersedia di halaman ini atau datang langsung ke sekretariat pendaftaran di kampus sekolah kami.</div>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                <button class="faq-button w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-gray-50 transition-colors font-bold text-brand-900 focus:outline-none group">
                    <span class="text-sm sm:text-base pr-4">Berapa biaya pendaftaran siswa baru?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="px-5 sm:px-6 pb-6 pt-0 text-gray-600 text-xs sm:text-sm leading-relaxed border-t border-gray-100">
                        <div class="pt-4">Biaya formulir pendaftaran adalah Rp 250.000, sudah termasuk biaya tes seleksi, map berkas pendaftaran, dan snack saat tes berlangsung.</div>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                <button class="faq-button w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-gray-50 transition-colors font-bold text-brand-900 focus:outline-none group">
                    <span class="text-sm sm:text-base pr-4">Apakah tersedia jalur beasiswa?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="px-5 sm:px-6 pb-6 pt-0 text-gray-600 text-xs sm:text-sm leading-relaxed border-t border-gray-100">
                        <div class="pt-4">Tentu. Kami menyediakan jalur beasiswa Prestasi (Akademik/Non-Akademik dengan bukti sertifikat minimal tingkat kabupaten) dan jalur beasiswa Kurang Mampu (dengan melampirkan KIP/PKH asli).</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 max-w-6xl">
        <div class="bg-gradient-to-br from-brand-700 via-brand-800 to-brand-900 rounded-3xl sm:rounded-[3rem] p-8 sm:p-12 lg:p-20 text-center text-white shadow-2xl relative overflow-hidden reveal">
            <!-- Decorative circle -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 sm:w-80 sm:h-80 bg-white/10 rounded-full blur-3xl hidden sm:block"></div>
            <div class="absolute -top-20 -left-20 w-40 h-40 bg-accent-500/20 rounded-full blur-2xl hidden sm:block"></div>
            
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold mb-6 sm:mb-8 relative z-10 leading-tight">Siap Menjadi Bagian <br class="hidden sm:block">Dari Kami?</h2>
            <p class="text-sm sm:text-base lg:text-lg text-brand-100/90 mb-10 sm:mb-12 max-w-2xl mx-auto relative z-10 px-2">
                Jangan lewatkan kesempatan untuk mendapatkan pendidikan berkualitas dan berkarakter. Kuota terbatas untuk setiap gelombang pendaftaran.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 relative z-10 w-full sm:w-auto">
                <a href="https://forms.gle/placeholder" target="_blank" class="w-full sm:w-auto px-8 sm:px-10 py-4 sm:py-5 bg-accent-500 hover:bg-accent-600 text-brand-900 font-black rounded-xl sm:rounded-2xl shadow-xl transition-all transform hover:scale-105 text-sm sm:text-base">
                    DAFTAR SEKARANG <i class="fa-solid fa-rocket ml-2"></i>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="w-full sm:w-auto px-8 sm:px-10 py-4 sm:py-5 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold rounded-xl sm:rounded-2xl border border-white/20 transition-all flex items-center justify-center gap-2 sm:gap-3 text-sm sm:text-base">
                    <i class="fa-brands fa-whatsapp text-xl sm:text-2xl"></i> Hubungi Panitia
                </a>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>

<script>
    // Reveal animation observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // FAQ Accordion Toggle
    document.addEventListener('DOMContentLoaded', function() {
        const faqButtons = document.querySelectorAll('.faq-button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const item = button.parentElement;
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');
                const isOpen = !content.classList.contains('max-h-0');

                // Close all other FAQs
                document.querySelectorAll('.faq-content').forEach(otherContent => {
                    if (otherContent !== content) {
                        otherContent.style.maxHeight = '0px';
                        otherContent.classList.add('max-h-0');
                        otherContent.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                        otherContent.parentElement.classList.remove('ring-2', 'ring-brand-500/20', 'border-brand-500');
                    }
                });

                // Toggle current FAQ
                if (isOpen) {
                    content.style.maxHeight = '0px';
                    icon.classList.remove('rotate-180');
                    item.classList.remove('ring-2', 'ring-brand-500/20', 'border-brand-500');
                    // Add class back after animation for safety
                    setTimeout(() => content.classList.add('max-h-0'), 500);
                } else {
                    content.classList.remove('max-h-0');
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.classList.add('rotate-180');
                    item.classList.add('ring-2', 'ring-brand-500/20', 'border-brand-500');
                }
            });
        });
    });
</script>
