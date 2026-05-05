<?php $this->load->view('templates/header'); ?>

<!-- Admin Dashboard Layout -->
<div class="min-h-screen bg-gray-50 flex overflow-hidden">
    <!-- Sidebar (White Theme) -->
    <aside id="admin-sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white text-slate-600 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out border-r border-slate-200 shadow-xl">
        <div class="h-full flex flex-col">
            <!-- Sidebar Header -->
            <div class="p-6 flex items-center gap-3 border-b border-slate-50">
                <div class="w-10 h-10 bg-brand-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-600/20">
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <div>
                    <h2 class="font-bold text-slate-900 leading-tight">Admin SMA</h2>
                    <p class="text-[10px] text-slate-500 font-medium uppercase tracking-widest">Management System</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-1 custom-scrollbar">
                <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-3">Resources</p>
                
                <a href="<?= base_url('admin') ?>" class="flex items-center gap-3 px-3 py-2.5 <?= (is_null($this->uri->segment(2))) ? 'bg-brand-50 text-brand-600 font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors' ?> rounded-xl font-medium group">
                    <div class="w-8 flex items-center justify-center">
                        <i class="fa-solid fa-chart-line text-lg <?= (is_null($this->uri->segment(2))) ? 'text-brand-600' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Dashboard</span>
                </a>

                <a href="<?= base_url('admin/beranda') ?>" class="flex items-center gap-3 px-3 py-2.5 <?= ($this->uri->segment(2) == 'beranda') ? 'bg-brand-50 text-brand-600 font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors' ?> rounded-xl font-medium group">
                    <div class="w-8 flex items-center justify-center">
                        <i class="fa-solid fa-house-chimney-window text-lg <?= ($this->uri->segment(2) == 'beranda') ? 'text-brand-600' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Kelola Beranda</span>
                </a>

                <a href="<?= base_url('admin/ppdb') ?>" class="flex items-center gap-3 px-3 py-2.5 <?= ($this->uri->segment(2) == 'ppdb') ? 'bg-brand-50 text-brand-600 font-bold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors' ?> rounded-xl font-medium group">
                    <div class="w-8 flex items-center justify-center">
                        <i class="fa-solid fa-users-rectangle text-lg <?= ($this->uri->segment(2) == 'ppdb') ? 'text-brand-600' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Kelola PPDB</span>
                    <span class="ml-auto bg-brand-600 text-white text-[10px] px-1.5 py-0.5 rounded-full font-bold shadow-sm">12</span>
                </a>

                <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mt-8 mb-3">Settings</p>
                
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium transition-colors group">
                    <div class="w-8 flex items-center justify-center">
                        <i class="fa-solid fa-gear text-lg text-slate-400 group-hover:text-slate-600"></i>
                    </div>
                    <span>Konfigurasi</span>
                </a>
            </nav>

            <!-- User Info -->
            <div class="p-4 border-t border-slate-100">
                <div class="flex items-center gap-3 px-2 py-3 rounded-xl bg-slate-50">
                    <div class="w-9 h-9 rounded-lg bg-brand-100 flex items-center justify-center text-brand-600 border border-brand-200 overflow-hidden font-bold">
                        <img src="https://ui-avatars.com/api/?name=Admin+School&background=DBEAFE&color=2563EB" alt="Admin">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-slate-900 truncate">Administrator</p>
                        <p class="text-[10px] text-slate-500 truncate font-medium">admin@school.ac.id</p>
                    </div>
                    <button class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0 lg:ml-64 relative">
        <!-- Top Header -->
        <header class="h-16 bg-white/80 backdrop-blur-md border-b border-gray-200 sticky top-0 z-40 flex items-center justify-between px-4 sm:px-8">
            <div class="flex items-center gap-4">
                <button id="sidebar-toggle-admin" class="lg:hidden p-2 text-slate-600 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
                
                <nav class="flex items-center gap-2 text-sm font-medium">
                    <span class="text-gray-400">Admin</span>
                    <i class="fa-solid fa-chevron-right text-[10px] text-gray-300"></i>
                    <span class="text-gray-900 font-bold"><?= $title_short ?></span>
                </nav>
            </div>

            <div class="flex items-center gap-3">
                <!-- Quick Action -->
                <button class="hidden sm:flex items-center gap-2 px-3 py-1.5 bg-gray-900 text-white text-xs font-bold rounded-lg hover:bg-gray-800 transition-all">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                    Action
                </button>
                
                <div class="h-6 w-px bg-gray-200 mx-2 hidden sm:block"></div>
                
                <!-- Time/Status -->
                <div class="hidden md:flex items-center gap-4 text-xs font-medium text-gray-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                        System Online
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-4 sm:p-8">
            <div class="max-w-7xl mx-auto space-y-8">
                <!-- Page Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight font-heading"><?= $title ?></h1>
                        <p class="text-gray-500 text-sm mt-1">Kelola data dan konten sistem informasi sekolah.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="px-4 py-2 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-lg hover:bg-gray-50 transition-all shadow-sm">
                            Export
                        </button>
                        <button class="px-4 py-2 bg-brand-600 text-white text-sm font-bold rounded-lg hover:bg-brand-700 transition-all shadow-md shadow-brand-600/20">
                            Refresh Data
                        </button>
                    </div>
                </div>
