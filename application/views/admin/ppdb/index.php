<div class="space-y-8">
    <!-- Filters & Search -->
    <div class="bg-white p-4 rounded-2xl border border-gray-200 shadow-sm flex flex-col sm:flex-row items-center gap-4">
        <div class="relative flex-1 w-full">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" placeholder="Cari pendaftar (Nama, NISN, ID)..." class="w-full bg-gray-50 border-gray-200 rounded-xl pl-11 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium">
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto">
            <select class="flex-1 sm:w-40 bg-gray-50 border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium focus:ring-brand-500 focus:border-brand-500">
                <option>Semua Status</option>
                <option>Menunggu</option>
                <option>Terverifikasi</option>
                <option>Ditolak</option>
            </select>
            <button class="p-2.5 bg-gray-50 border border-gray-200 text-gray-600 rounded-xl hover:bg-gray-100 transition-all">
                <i class="fa-solid fa-filter"></i>
            </button>
        </div>
    </div>

    <!-- Applicants Table -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">ID Pendaftar</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Nama Lengkap</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">NISN</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Tanggal Daftar</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach($applicants as $row): ?>
                    <tr class="hover:bg-gray-50/80 transition-colors group">
                        <td class="px-6 py-4 text-sm font-bold text-brand-600">
                            #PPDB-<?= str_pad($row['id'], 4, '0', STR_PAD_LEFT) ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center text-xs font-bold text-gray-600 border border-gray-200">
                                    <?= substr($row['nama'], 0, 1) ?>
                                </div>
                                <span class="text-sm font-bold text-gray-900"><?= $row['nama'] ?></span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-500">
                            <?= $row['nisn'] ?>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-500">
                            <?= date('d M Y', strtotime($row['tanggal'])) ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php if($row['status'] == 'Terverifikasi'): ?>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                    Terverifikasi
                                </span>
                            <?php elseif($row['status'] == 'Ditolak'): ?>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-rose-50 text-rose-600 border border-rose-100">
                                    <span class="w-1.5 h-1.5 bg-rose-500 rounded-full"></span>
                                    Ditolak
                                </span>
                            <?php else: ?>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-50 text-amber-600 border border-amber-100">
                                    <span class="w-1.5 h-1.5 bg-amber-500 rounded-full animate-pulse"></span>
                                    Menunggu
                                </span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <button class="p-1.5 text-gray-400 hover:text-brand-600 hover:bg-brand-50 rounded-lg transition-all" title="Detail">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="p-1.5 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all" title="Verifikasi">
                                    <i class="fa-solid fa-check-double"></i>
                                </button>
                                <button class="p-1.5 text-gray-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all" title="Hapus">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-6 border-t border-gray-100 bg-gray-50/30 flex items-center justify-between">
            <p class="text-xs text-gray-500 font-medium">Menampilkan 1 sampai 10 dari 128 pendaftar</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-white transition-all"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-brand-600 text-white text-xs font-bold shadow-sm shadow-brand-600/20">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-white text-xs font-bold transition-all">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-white text-xs font-bold transition-all">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-white transition-all"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
            </div>
        </div>
    </div>
</div>
