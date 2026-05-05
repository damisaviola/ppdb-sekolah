<!-- Stats Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Total Pendaftar -->
    <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-user-group text-xl"></i>
            </div>
            <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full uppercase tracking-wider">+12%</span>
        </div>
        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Total Pendaftar</h3>
        <p class="text-3xl font-black text-gray-900 mt-1"><?= $stats['total_pendaftar'] ?></p>
        <div class="mt-4 flex items-center gap-2 text-[10px] text-gray-400 font-medium">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Update 5 menit yang lalu</span>
        </div>
    </div>

    <!-- Pendaftar Baru -->
    <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-user-plus text-xl"></i>
            </div>
            <div class="flex items-center gap-1 text-[10px] font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full uppercase tracking-wider">
                <span class="w-1.5 h-1.5 bg-amber-500 rounded-full animate-ping"></span>
                <span>Baru</span>
            </div>
        </div>
        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Pendaftar Baru</h3>
        <p class="text-3xl font-black text-gray-900 mt-1"><?= $stats['pendaftar_baru'] ?></p>
        <div class="mt-4 flex items-center gap-2 text-[10px] text-gray-400 font-medium">
            <i class="fa-solid fa-calendar-day"></i>
            <span>Dalam 24 jam terakhir</span>
        </div>
    </div>

    <!-- Terverifikasi -->
    <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-user-check text-xl"></i>
            </div>
            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full uppercase tracking-wider">66%</span>
        </div>
        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Terverifikasi</h3>
        <p class="text-3xl font-black text-gray-900 mt-1"><?= $stats['pendaftar_terverifikasi'] ?></p>
        <div class="mt-4 w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
            <div class="bg-emerald-500 h-full w-[66%]"></div>
        </div>
    </div>

    <!-- Ditolak -->
    <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow group">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-user-xmark text-xl"></i>
            </div>
        </div>
        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Ditolak</h3>
        <p class="text-3xl font-black text-gray-900 mt-1"><?= $stats['pendaftar_ditolak'] ?></p>
        <div class="mt-4 flex items-center gap-2 text-[10px] text-gray-400 font-medium">
            <i class="fa-solid fa-circle-exclamation text-rose-400"></i>
            <span>Perlu tindakan ulang</span>
        </div>
    </div>
</div>

<!-- Bottom Section: Latest Activity & Info -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Chart/Main Info Area (Filament usually has some big card here) -->
    <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col">
        <div class="p-6 border-b border-gray-100 flex items-center justify-between">
            <div>
                <h3 class="font-bold text-gray-900">Grafik Pendaftaran</h3>
                <p class="text-xs text-gray-500">Jumlah pendaftar per minggu ini.</p>
            </div>
            <select class="text-xs font-bold bg-gray-50 border-gray-200 rounded-lg py-1 px-3 focus:ring-brand-500 focus:border-brand-500">
                <option>Minggu Ini</option>
                <option>Bulan Ini</option>
            </select>
        </div>
        <div class="p-8 flex-1 flex items-center justify-center bg-gray-50/50 min-h-[300px]">
            <!-- Placeholder for Chart -->
            <div class="text-center">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                    <i class="fa-solid fa-chart-area text-2xl"></i>
                </div>
                <p class="text-sm font-medium text-gray-400 uppercase tracking-widest">Visualisasi Data</p>
                <p class="text-xs text-gray-400 mt-1">Gunakan Chart.js untuk menampilkan grafik di sini.</p>
            </div>
        </div>
    </div>

    <!-- Sidebar Info / Latest PPDB -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm flex flex-col">
        <div class="p-6 border-b border-gray-100 flex items-center justify-between">
            <h3 class="font-bold text-gray-900">Pendaftar Terbaru</h3>
            <a href="<?= base_url('admin/ppdb') ?>" class="text-xs font-bold text-brand-600 hover:underline">Lihat Semua</a>
        </div>
        <div class="p-4 space-y-4">
            <?php for($i=0; $i<5; $i++): ?>
            <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-xl transition-colors cursor-pointer group">
                <div class="w-10 h-10 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 font-bold border border-brand-100 group-hover:bg-brand-600 group-hover:text-white transition-all">
                    <?= substr(["Budi", "Siti", "Agus", "Dewi", "Eko"][$i], 0, 1) ?>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold text-gray-900 truncate"><?= ["Budi Santoso", "Siti Aminah", "Agus Wijaya", "Dewi Lestari", "Eko Prasetyo"][$i] ?></p>
                    <p class="text-[10px] text-gray-500">00<?= rand(10000000, 99999999) ?> • <?= rand(1, 10) ?> jam yang lalu</p>
                </div>
                <div class="w-2 h-2 bg-amber-400 rounded-full"></div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
