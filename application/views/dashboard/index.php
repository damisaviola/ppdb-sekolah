<?php 
    $data['title_short'] = 'Dashboard';
    $this->load->view('templates/dashboard_header', $data); 
?>

<!-- Welcome Section -->
<div class="mb-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-2">Halo, Budi Santoso! 👋</h1>
    <p class="text-slate-500 font-medium">Selamat datang di dashboard pendaftaran SMA YPPK Tiga Raja Timika.</p>
</div>

<!-- Stats Grid (Filament Widgets) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-clipboard-check"></i>
            </div>
            <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full uppercase tracking-wider">Aktif</span>
        </div>
        <p class="text-sm font-medium text-slate-500 mb-1">Status Pendaftaran</p>
        <h3 class="text-xl font-bold text-slate-900">Belum Lengkap</h3>
    </div>

    <a href="<?= base_url('ppdb/calon-siswa/berkas') ?>" class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-file-circle-exclamation"></i>
            </div>
            <span class="text-[10px] font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full uppercase tracking-wider">Penting</span>
        </div>
        <p class="text-sm font-medium text-slate-500 mb-1">Berkas Terunggah</p>
        <h3 class="text-xl font-bold text-slate-900">2 / 5 Berkas</h3>
    </a>

    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-receipt"></i>
            </div>
            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full uppercase tracking-wider">Lunas</span>
        </div>
        <p class="text-sm font-medium text-slate-500 mb-1">Status Pembayaran</p>
        <h3 class="text-xl font-bold text-slate-900">Terverifikasi</h3>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-calendar-day"></i>
            </div>
            <span class="text-[10px] font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-full uppercase tracking-wider">Info</span>
        </div>
        <p class="text-sm font-medium text-slate-500 mb-1">Sisa Waktu</p>
        <h3 class="text-xl font-bold text-slate-900">12 Hari Lagi</h3>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Status Section -->
    <div class="lg:col-span-2 space-y-8">
        <!-- Progress Card -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-50 flex items-center justify-between bg-slate-50/50">
                <h3 class="font-bold text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-list-check text-brand-600"></i>
                    Langkah Pendaftaran
                </h3>
                <span class="text-sm font-bold text-brand-600 bg-white px-3 py-1 rounded-xl shadow-sm border border-brand-100">Tahap 2 dari 4</span>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <!-- Step 1 (Completed) -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 border-4 border-white shadow-sm">
                            <i class="fa-solid fa-check text-sm"></i>
                        </div>
                        <div class="flex-1 pt-1">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="font-bold text-slate-900">Registrasi Akun</h4>
                                <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full uppercase">Selesai</span>
                            </div>
                            <p class="text-xs text-slate-500">Akun pendaftaran Anda telah berhasil dibuat dan aktif.</p>
                        </div>
                    </div>

                    <!-- Step 2 (Active) -->
                    <div class="flex items-start gap-4 relative">
                        <!-- Connecting Line -->
                        <div class="absolute left-5 -top-10 w-0.5 h-10 bg-slate-100 -z-0"></div>
                        <div class="absolute left-5 -bottom-10 w-0.5 h-10 bg-slate-100 -z-0"></div>

                        <div class="w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center shrink-0 border-4 border-brand-100 shadow-md animate-pulse">
                            <span class="text-sm font-bold">2</span>
                        </div>
                        <div class="flex-1 pt-1">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="font-bold text-slate-900">Lengkapi Biodata & Berkas</h4>
                                <span class="text-[10px] font-bold text-brand-600 bg-brand-50 px-2 py-0.5 rounded-full uppercase tracking-wider">Sedang Berlangsung</span>
                            </div>
                            <p class="text-xs text-slate-500 mb-4">Silakan lengkapi biodata diri dan unggah berkas persyaratan yang diperlukan.</p>
                            <a href="<?= base_url('ppdb/calon-siswa/biodata') ?>" class="inline-flex px-5 py-2.5 bg-brand-600 text-white text-xs font-bold rounded-xl shadow-lg shadow-brand-600/20 hover:bg-brand-700 transition-all items-center gap-2">
                                Lengkapi Sekarang
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shrink-0 border-4 border-white shadow-sm">
                            <span class="text-sm font-bold">3</span>
                        </div>
                        <div class="flex-1 pt-1">
                            <h4 class="font-bold text-slate-400">Verifikasi Panitia</h4>
                            <p class="text-xs text-slate-400">Data Anda akan diperiksa secara manual oleh panitia PPDB.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shrink-0 border-4 border-white shadow-sm">
                            <span class="text-sm font-bold">4</span>
                        </div>
                        <div class="flex-1 pt-1">
                            <h4 class="font-bold text-slate-400">Hasil Seleksi</h4>
                            <p class="text-xs text-slate-400">Pengumuman kelulusan dan tahap daftar ulang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Content -->
    <div class="space-y-6">
        <!-- Notification Banner -->
        <div class="bg-amber-50 border border-amber-100 rounded-3xl p-6 relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-amber-400/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 bg-amber-400 text-white rounded-xl flex items-center justify-center shrink-0 shadow-lg shadow-amber-400/20">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <div>
                    <h4 class="font-bold text-amber-900 mb-1">Lengkapi Berkas!</h4>
                    <p class="text-xs text-amber-700 leading-relaxed mb-3">
                        Anda belum mengunggah <b>Scan Ijazah</b> dan <b>Pas Foto 3x4</b>. Mohon segera lengkapi untuk lanjut ke tahap verifikasi.
                    </p>
                    <a href="<?= base_url('ppdb/calon-siswa/berkas') ?>" class="inline-flex items-center gap-2 text-[10px] font-bold text-amber-700 bg-white px-3 py-1.5 rounded-lg border border-amber-200 hover:bg-amber-100 transition-all">
                        Unggah Sekarang
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- School Info Card -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
            <h4 class="font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-circle-info text-blue-500"></i>
                Informasi Kontak
            </h4>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-slate-50 text-slate-600 rounded-lg flex items-center justify-center">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="text-xs font-medium text-slate-600">0812-3456-7890 (Admin)</div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-slate-50 text-slate-600 rounded-lg flex items-center justify-center">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="text-xs font-medium text-slate-600">ppdb@smayppktigaraja.sch.id</div>
                </div>
            </div>
        </div>

        <!-- Helpful Links -->
        <div class="bg-brand-600 rounded-3xl p-6 text-white shadow-xl shadow-brand-600/20 relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-600 to-indigo-700"></div>
            <div class="relative z-10">
                <h4 class="font-bold mb-2">Butuh Bantuan?</h4>
                <p class="text-xs text-brand-100 mb-4 leading-relaxed">Lihat panduan pendaftaran atau tanyakan langsung pada panitia.</p>
                <a href="#" class="inline-flex items-center gap-2 text-xs font-bold bg-white text-brand-600 px-4 py-2 rounded-xl hover:bg-brand-50 transition-all">
                    Lihat Panduan
                    <i class="fa-solid fa-book"></i>
                </a>
            </div>
            <i class="fa-solid fa-question absolute -right-2 -bottom-2 text-6xl text-white/10 group-hover:rotate-12 transition-transform duration-500"></i>
        </div>
    </div>
</div>

<?php $this->load->view('templates/dashboard_footer'); ?>
