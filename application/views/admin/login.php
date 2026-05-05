<?php $this->load->view('templates/header'); ?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 selection:bg-brand-500 selection:text-white relative overflow-hidden">
    <!-- Abstract Background Decorations -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-brand-50 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-50 rounded-full blur-3xl opacity-50"></div>

    <!-- Main Content -->
    <div class="max-w-md w-full relative z-10 reveal">
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-xl border border-gray-100 mx-auto mb-6 p-3 group hover:scale-110 transition-transform duration-500">
                <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Logo SMA" class="w-full h-full object-contain rounded-xl">
            </div>
            <h1 class="font-heading text-3xl font-black text-gray-900 mb-2 tracking-tight">Admin Portal</h1>
            <p class="text-gray-500 text-sm font-medium">Masuk ke sistem manajemen sekolah</p>
        </div>

        <!-- Login Card (Filament Inspired) -->
        <div class="bg-white rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-gray-200/50 p-8 sm:p-12 backdrop-blur-xl">
            <form action="<?= base_url('admin') ?>" method="POST" class="space-y-6">
                <!-- Username -->
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700 ml-1">Username</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-600 transition-colors">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <input type="text" name="username" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 focus:bg-white transition-all font-medium"
                            placeholder="admin_id">
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center ml-1">
                        <label class="text-sm font-bold text-gray-700">Password</label>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-600 transition-colors">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <input type="password" name="password" required
                            class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 focus:bg-white transition-all font-medium"
                            placeholder="••••••••">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between px-1">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500 transition-all">
                        <span class="text-xs font-bold text-gray-500 group-hover:text-gray-700 transition-colors">Ingat saya</span>
                    </label>
                    <a href="#" class="text-xs font-bold text-brand-600 hover:text-brand-700 transition-colors">Lupa akses?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full py-4 bg-gray-900 hover:bg-black text-white font-bold rounded-2xl shadow-xl shadow-gray-900/10 transform active:scale-[0.98] transition-all flex items-center justify-center gap-2 group overflow-hidden relative">
                    <span class="relative z-10 flex items-center gap-2">
                        Masuk ke Dashboard
                        <i class="fa-solid fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <a href="<?= base_url() ?>" class="text-xs font-bold text-gray-400 hover:text-brand-600 transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-house"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="text-center mt-10 space-y-2">
            <p class="text-gray-400 text-[10px] uppercase tracking-[0.2em] font-black">
                Secure Administrative Access
            </p>
            <div class="flex items-center justify-center gap-4 text-gray-300">
                <i class="fa-solid fa-lock"></i>
                <i class="fa-solid fa-shield-halved"></i>
                <i class="fa-solid fa-user-secret"></i>
            </div>
        </div>
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
