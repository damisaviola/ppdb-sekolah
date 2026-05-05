<?php $this->load->view('templates/header'); ?>

<div class="min-h-[70vh] flex items-start sm:items-center justify-center p-4 sm:p-6 pt-20 sm:pt-24 pb-12">
    <div class="max-w-2xl w-full text-center">
        <!-- Animated Illustration -->
        <div class="relative mb-8 sm:mb-12">
            <div class="text-[8rem] sm:text-[12rem] lg:text-[15rem] font-black text-slate-100 leading-none select-none">404</div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-24 h-24 sm:w-40 sm:h-40 lg:w-48 lg:h-48 bg-brand-600 rounded-2xl sm:rounded-3xl rotate-12 flex items-center justify-center shadow-2xl shadow-brand-600/30 animate-pulse">
                    <i class="fa-solid fa-compass-slash text-4xl sm:text-6xl lg:text-8xl text-white"></i>
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4 font-heading">Wah, Halamannya Hilang!</h1>
        <p class="text-slate-500 text-lg mb-10 max-w-md mx-auto">
            Maaf, halaman yang Anda cari tidak ditemukan atau telah dipindahkan. Mari kembali ke jalan yang benar.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= base_url() ?>" class="w-full sm:w-auto px-8 py-4 bg-brand-600 text-white font-bold rounded-2xl shadow-lg shadow-brand-600/20 hover:bg-brand-700 hover:scale-105 transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-house"></i>
                Kembali ke Beranda
            </a>
            <button onclick="history.back()" class="w-full sm:w-auto px-8 py-4 bg-white text-slate-600 font-bold rounded-2xl border border-slate-200 hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-arrow-left"></i>
                Halaman Sebelumnya
            </button>
        </div>

        <!-- Social/Contact Links -->
        <div class="mt-16 pt-8 border-t border-slate-100 flex flex-col items-center gap-4">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Butuh bantuan?</p>
            <div class="flex gap-6">
                <a href="#" class="text-slate-400 hover:text-brand-600 transition-colors">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                </a>
                <a href="#" class="text-slate-400 hover:text-brand-600 transition-colors">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-slate-400 hover:text-brand-600 transition-colors">
                    <i class="fa-regular fa-envelope text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
