<?php $this->load->view('templates/header'); ?>

<div class="min-h-screen flex items-center justify-center bg-slate-50 py-12 px-4 sm:px-6 lg:px-8 selection:bg-brand-500 selection:text-white relative">
    
    <!-- Back Button -->
    <a href="<?= base_url() ?>" class="absolute top-6 left-6 flex items-center gap-2 text-gray-500 hover:text-brand-600 transition-colors font-medium">
        <i class="fa-solid fa-arrow-left text-sm"></i>
        <span>Kembali</span>
    </a>

    <!-- Main Content -->
    <div class="max-w-2xl w-full reveal">
        <!-- Logo & Header -->
        <div class="text-center mb-10">
            <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-md border border-gray-100 mx-auto mb-6 p-2">
                <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Logo SMA" class="w-full h-full object-contain rounded-xl">
            </div>
            <h1 class="font-heading text-3xl font-bold text-gray-900 mb-2">Buat Akun PPDB</h1>
            <p class="text-gray-500 text-sm">Lengkapi data pendaftaran Anda di bawah ini</p>
        </div>

        <!-- Register Card -->
        <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 p-8 sm:p-10">
            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Full Name -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap Sesuai Ijazah</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-id-card"></i>
                        </div>
                        <input type="text" name="nama" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 focus:bg-white transition-all"
                            placeholder="Masukkan nama lengkap">
                    </div>
                </div>

                <!-- NISN -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">NISN</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-fingerprint"></i>
                        </div>
                        <input type="text" name="nisn" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 focus:bg-white transition-all"
                            placeholder="10 digit NISN">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Aktif</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" name="email" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 focus:bg-white transition-all"
                            placeholder="contoh@email.com">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 focus:bg-white transition-all"
                            placeholder="Buat password">
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="confirm_password" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 focus:bg-white transition-all"
                            placeholder="Ulangi password">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2 pt-2">
                    <button type="submit" 
                        class="w-full mt-2 py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-lg shadow-brand-600/30 transform active:scale-[0.98] transition-all flex items-center justify-center gap-2 group">
                        Daftar Sekarang
                        <i class="fa-solid fa-user-plus group-hover:scale-110 transition-transform"></i>
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500 font-medium">Sudah punya akun?</span>
                </div>
            </div>

            <!-- Login Link -->
            <a href="<?= base_url('ppdb/login') ?>" class="w-full py-3.5 bg-white border-2 border-gray-200 text-gray-700 font-bold rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all flex items-center justify-center">
                Masuk ke Akun
            </a>
        </div>

        <!-- Footer Info -->
        <p class="text-center mt-10 text-gray-400 text-[11px] uppercase tracking-wider font-medium">
            &copy; 2026 SMA YPPK Tiga Raja Timika
        </p>
    </div>

    <!-- Script for Reveal Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelectorAll('.reveal').forEach(el => el.classList.add('active'));
            }, 100);
        });
    </script>
</div>
</body>
</html>
