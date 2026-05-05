<?php 
    $data['title_short'] = 'Lengkapi Biodata';
    $this->load->view('templates/dashboard_header', $data); 
?>

<!-- Header Section -->
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
    <div>
        <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-2">Biodata Calon Siswa</h1>
        <p class="text-slate-500 font-medium max-w-2xl text-sm sm:text-base">Lengkapi data diri Anda dengan benar sesuai dengan dokumen resmi (Ijazah/Akta Kelahiran).</p>
    </div>
    <div class="flex items-center gap-2">
        <button type="button" class="px-6 py-2.5 bg-slate-100 text-slate-600 text-sm font-bold rounded-xl hover:bg-slate-200 transition-all">Batal</button>
        <button type="submit" form="form-biodata" class="px-6 py-2.5 bg-brand-600 text-white text-sm font-bold rounded-xl shadow-lg shadow-brand-600/20 hover:bg-brand-700 transition-all flex items-center gap-2">
            <i class="fa-solid fa-cloud-arrow-up"></i>
            Simpan Perubahan
        </button>
    </div>
</div>

<form id="form-biodata" action="#" method="POST" class="space-y-8 pb-8">
    <!-- Section 1: Data Pribadi -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-50 bg-slate-50/30">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-user text-brand-600"></i>
                Identitas Diri
            </h3>
        </div>
        <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Full Name -->
            <div class="md:col-span-2 lg:col-span-1">
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap <span class="text-rose-500">*</span></label>
                <input type="text" value="Budi Santoso" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium text-slate-900">
            </div>

            <!-- NISN -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">NISN <span class="text-rose-500">*</span></label>
                <input type="text" value="0012345678" readonly class="w-full px-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed font-medium">
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Jenis Kelamin <span class="text-rose-500">*</span></label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="cursor-pointer">
                        <input type="radio" name="gender" value="L" class="peer hidden" checked>
                        <div class="px-4 py-3 text-center rounded-xl border border-slate-200 bg-slate-50 text-slate-500 font-medium peer-checked:bg-brand-50 peer-checked:border-brand-500 peer-checked:text-brand-600 transition-all">Laki-laki</div>
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio" name="gender" value="P" class="peer hidden">
                        <div class="px-4 py-3 text-center rounded-xl border border-slate-200 bg-slate-50 text-slate-500 font-medium peer-checked:bg-brand-50 peer-checked:border-brand-500 peer-checked:text-brand-600 transition-all">Perempuan</div>
                    </label>
                </div>
            </div>

            <!-- Birthplace -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tempat Lahir <span class="text-rose-500">*</span></label>
                <input type="text" placeholder="Contoh: Timika" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
            </div>

            <!-- Birthdate -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal Lahir <span class="text-rose-500">*</span></label>
                <input type="date" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
            </div>

            <!-- Religion -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Agama <span class="text-rose-500">*</span></label>
                <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium appearance-none">
                    <option value="">Pilih Agama</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen Protestan</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section 2: Informasi Sekolah Asal -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-50 bg-slate-50/30">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-school text-brand-600"></i>
                Sekolah Asal
            </h3>
        </div>
        <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- School Name -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Sekolah SMP <span class="text-rose-500">*</span></label>
                <input type="text" placeholder="Contoh: SMP Negeri 1 Timika" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
            </div>

            <!-- Graduation Year -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tahun Lulus <span class="text-rose-500">*</span></label>
                <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
                    <option value="2026">2026</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section 3: Kontak & Alamat -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-50 bg-slate-50/30">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-map-location-dot text-brand-600"></i>
                Alamat & Kontak
            </h3>
        </div>
        <div class="p-6 sm:p-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- WhatsApp -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nomor WhatsApp Aktif <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                            <span class="text-sm font-bold">+62</span>
                        </div>
                        <input type="tel" placeholder="81234567890" class="w-full pl-14 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
                    </div>
                </div>
                <!-- Email -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Alternatif</label>
                    <input type="email" placeholder="email@contoh.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Lengkap <span class="text-rose-500">*</span></label>
                <textarea rows="3" placeholder="Jl. Raya Tiga Raja No. XX, Timika" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all font-medium"></textarea>
            </div>
        </div>
    </div>


</form>

<?php $this->load->view('templates/dashboard_footer'); ?>
