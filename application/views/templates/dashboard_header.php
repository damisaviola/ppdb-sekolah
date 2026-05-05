<?php $this->load->view('templates/header'); ?>

    <!-- Sidebar Backdrop (Mobile) -->
    <div id="sidebar-backdrop" class="fixed inset-0 bg-slate-900/60 z-[48] hidden lg:hidden transition-opacity duration-300 opacity-0"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-slate-200 transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out">
        <div class="h-full flex flex-col">
            <!-- Sidebar Header -->
            <div class="p-6 border-b border-slate-50">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-brand-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-600/20">
                        <i class="fa-solid fa-graduation-cap text-xl"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-900 leading-tight">PPDB Portal</h2>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider">SMA YPPK Tiga Raja</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex-1 overflow-y-auto p-4 space-y-1">
                <p class="px-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Main Menu</p>
                
                <a href="<?= base_url('ppdb/calon-siswa/dashboard') ?>" class="flex items-center gap-3 px-4 py-3 <?= ($this->uri->segment(3) == 'dashboard') ? 'bg-brand-50 text-brand-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium group' ?> rounded-xl transition-all">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-house text-lg <?= ($this->uri->segment(3) == 'dashboard') ? '' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
                
                <a href="<?= base_url('ppdb/calon-siswa/biodata') ?>" class="flex items-center gap-3 px-4 py-3 <?= ($this->uri->segment(3) == 'biodata') ? 'bg-brand-50 text-brand-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium group' ?> rounded-xl transition-all">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-user-pen text-lg <?= ($this->uri->segment(3) == 'biodata') ? '' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Biodata Diri</span>
                </a>

                <a href="<?= base_url('ppdb/calon-siswa/berkas') ?>" class="flex items-center gap-3 px-4 py-3 <?= ($this->uri->segment(3) == 'berkas') ? 'bg-brand-50 text-brand-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium group' ?> rounded-xl transition-all">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-file-arrow-up text-lg <?= ($this->uri->segment(3) == 'berkas') ? '' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Unggah Berkas</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium transition-all group">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-credit-card text-lg text-slate-400 group-hover:text-slate-600"></i>
                    </div>
                    <span>Pembayaran</span>
                </a>

                <p class="px-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-6 mb-2">Informasi</p>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium transition-all group">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-bullhorn text-lg text-slate-400 group-hover:text-slate-600"></i>
                    </div>
                    <span>Pengumuman</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium transition-all group">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-circle-question text-lg text-slate-400 group-hover:text-slate-600"></i>
                    </div>
                    <span>Bantuan</span>
                </a>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-slate-50">
                <div class="bg-slate-900 rounded-2xl p-4 text-white relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-white/10 rounded-full blur-2xl group-hover:bg-white/20 transition-all"></div>
                    <p class="text-xs text-slate-400 mb-1 relative z-10">Status Pendaftaran</p>
                    <p class="font-bold text-sm mb-3 relative z-10 text-amber-400">Menunggu Verifikasi</p>
                    <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden relative z-10">
                        <div class="bg-amber-400 h-full w-[40%]" title="40% Completed"></div>
                    </div>
                </div>
                
                <button type="button" id="logout-trigger" class="w-full flex items-center gap-3 px-4 py-3 mt-2 text-rose-600 hover:bg-rose-50 rounded-xl font-semibold transition-all">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-right-from-bracket text-lg"></i>
                    </div>
                    <span>Logout</span>
                </button>
            </div>
        </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 lg:ml-72 min-h-screen flex flex-col">
        <!-- Top Bar -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-8 sticky top-0 z-40">
            <div class="flex items-center gap-4">
                <button id="sidebar-toggle" class="lg:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-all">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
                <div class="hidden sm:flex items-center gap-2 text-sm font-medium text-slate-500">
                    <span class="hover:text-slate-900 transition-colors text-brand-600 font-bold">Portal</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-slate-900"><?= $title_short ?? 'Dashboard' ?></span>
                </div>
            </div>

            <div class="flex items-center gap-3 sm:gap-6">
                <!-- Notifications -->
                <button class="relative p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-xl transition-all group">
                    <i class="fa-solid fa-bell text-xl"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-rose-500 border-2 border-white rounded-full"></span>
                </button>

                <!-- User Profile -->
                <div class="flex items-center gap-3 pl-3 sm:pl-6 border-l border-slate-100 cursor-pointer group" id="profile-trigger">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-900 leading-tight group-hover:text-brand-600 transition-colors">Budi Santoso</p>
                        <p class="text-xs text-slate-500 font-medium">NISN: 0012345678</p>
                    </div>
                    <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center text-brand-600 border border-brand-200 shadow-sm font-bold overflow-hidden ring-offset-2 ring-brand-500 group-hover:ring-2 transition-all">
                        <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=E0E7FF&color=4F46E5" alt="Avatar">
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Wrapper -->
        <div class="p-4 sm:p-8 flex-1">
