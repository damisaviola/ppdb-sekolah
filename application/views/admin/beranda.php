<div class="space-y-8">
    <!-- Hero Section Management -->
    <section class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
            <div>
                <h3 class="font-bold text-gray-900">Hero Section</h3>
                <p class="text-xs text-gray-500">Kelola tampilan utama di bagian paling atas beranda.</p>
            </div>
            <button class="p-2 text-gray-400 hover:text-brand-600 transition-colors">
                <i class="fa-solid fa-circle-question"></i>
            </button>
        </div>
        <div class="p-8">
            <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Headline (Judul Utama)</label>
                        <input type="text" value="SMA YPPK Tiga Raja Timika" class="w-full bg-gray-50 border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium" placeholder="Masukkan judul utama...">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Sub-headline (Deskripsi Singkat)</label>
                        <textarea rows="4" class="w-full bg-gray-50 border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium" placeholder="Masukkan deskripsi singkat...">Mewujudkan generasi berprestasi, berkarakter unggul, dan siap menghadapi tantangan global di Tanah Papua.</textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Teks Tombol Utama</label>
                            <input type="text" value="Daftar Sekarang" class="w-full bg-gray-50 border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Link Tombol Utama</label>
                            <input type="text" value="<?= base_url('ppdb') ?>" class="w-full bg-gray-50 border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium">
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Background Image (Desktop)</label>
                        <div class="relative group h-64 bg-gray-100 rounded-2xl border-2 border-dashed border-gray-200 overflow-hidden flex flex-col items-center justify-center transition-all hover:bg-gray-50 hover:border-brand-300">
                            <!-- Existing Preview -->
                            <img src="<?= base_url('assets/hero-bg.jpg') ?>" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:opacity-30 transition-opacity" alt="Current Hero">
                            
                            <div class="relative z-10 text-center p-6">
                                <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center mx-auto mb-3 text-gray-400 group-hover:text-brand-600 transition-colors">
                                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                                </div>
                                <p class="text-xs font-bold text-gray-500">Klik atau seret gambar ke sini</p>
                                <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-wider font-semibold">JPG, PNG up to 2MB</p>
                            </div>
                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 flex justify-end gap-3 pt-6 border-t border-gray-100">
                    <button type="button" class="px-6 py-2.5 text-sm font-bold text-gray-500 hover:text-gray-900 transition-colors">Reset</button>
                    <button type="submit" class="px-6 py-2.5 bg-brand-600 text-white text-sm font-bold rounded-xl hover:bg-brand-700 transition-all shadow-lg shadow-brand-600/20">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h3 class="font-bold text-gray-900">Visi Sekolah</h3>
            </div>
            <div class="p-6 flex-1">
                <textarea rows="6" class="w-full bg-gray-50 border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all font-medium">Menjadi lembaga pendidikan Katolik yang unggul dalam prestasi, berakar pada budaya, dan berwawasan global berdasarkan nilai-nilai Kristiani.</textarea>
            </div>
            <div class="p-4 bg-gray-50/50 border-t border-gray-100 flex justify-end">
                <button class="px-4 py-2 bg-gray-900 text-white text-xs font-bold rounded-lg hover:bg-gray-800 transition-all">Update Visi</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h3 class="font-bold text-gray-900">Misi Sekolah</h3>
            </div>
            <div class="p-6 flex-1">
                <div class="space-y-4" id="misi-list">
                    <div class="flex gap-2">
                        <input type="text" value="Menyelenggarakan pendidikan yang berkualitas." class="flex-1 bg-gray-50 border-gray-200 rounded-lg px-3 py-2 text-xs font-medium">
                        <button class="p-2 text-rose-500 hover:bg-rose-50 rounded-lg"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" value="Membentuk karakter siswa yang disiplin dan jujur." class="flex-1 bg-gray-50 border-gray-200 rounded-lg px-3 py-2 text-xs font-medium">
                        <button class="p-2 text-rose-500 hover:bg-rose-50 rounded-lg"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
                <button class="w-full mt-4 py-2 border-2 border-dashed border-gray-200 rounded-xl text-gray-400 text-xs font-bold hover:border-brand-300 hover:text-brand-600 transition-all">
                    <i class="fa-solid fa-plus mr-2"></i> Tambah Misi
                </button>
            </div>
            <div class="p-4 bg-gray-50/50 border-t border-gray-100 flex justify-end">
                <button class="px-4 py-2 bg-gray-900 text-white text-xs font-bold rounded-lg hover:bg-gray-800 transition-all">Update Misi</button>
            </div>
        </div>
    </section>
</div>
