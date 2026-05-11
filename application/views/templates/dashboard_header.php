<?php $this->load->view('templates/header'); ?>

<!-- Student Dashboard Skeleton Loader -->
<style>
    #page-preloader { display: none !important; }
    
    #student-skeleton {
        position: fixed;
        inset: 0;
        z-index: 99999;
        background-color: #f8fafc;
        display: flex;
        transition: opacity 0.5s ease-out;
    }
</style>

<div id="student-skeleton">
    <!-- Sidebar Skeleton -->
    <div class="hidden lg:flex w-72 bg-white border-r border-slate-200 flex-col h-full shadow-sm">
        <div class="p-6 border-b border-slate-50 flex items-center gap-3">
            <div class="w-10 h-10 bg-slate-200 rounded-xl animate-pulse"></div>
            <div class="flex-1 space-y-2">
                <div class="h-4 bg-slate-200 rounded animate-pulse w-3/4"></div>
                <div class="h-2 bg-slate-200 rounded animate-pulse w-1/2"></div>
            </div>
        </div>
        <div class="p-4 space-y-4">
            <div class="h-2 bg-slate-200 rounded animate-pulse w-1/4 mb-4"></div>
            <div class="h-12 bg-slate-100 rounded-xl animate-pulse w-full"></div>
            <div class="h-12 bg-slate-100 rounded-xl animate-pulse w-full"></div>
            <div class="h-12 bg-slate-100 rounded-xl animate-pulse w-full"></div>
            
            <div class="h-2 bg-slate-200 rounded animate-pulse w-1/4 mt-8 mb-4"></div>
            <div class="h-12 bg-slate-100 rounded-xl animate-pulse w-full"></div>
            <div class="h-12 bg-slate-100 rounded-xl animate-pulse w-full"></div>
        </div>
    </div>
    
    <!-- Main Content Skeleton -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">
        <!-- Topbar Skeleton -->
        <div class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-8">
            <div class="flex items-center gap-4">
                <div class="h-8 w-8 bg-slate-200 rounded-lg animate-pulse lg:hidden"></div>
                <div class="h-4 bg-slate-200 rounded animate-pulse w-32 hidden sm:block"></div>
            </div>
            <div class="flex gap-4 items-center">
                <div class="h-8 w-8 bg-slate-200 rounded-xl animate-pulse"></div>
                <div class="h-10 w-40 bg-slate-100 rounded-xl animate-pulse hidden sm:block"></div>
            </div>
        </div>
        
        <!-- Content Area Skeleton -->
        <div class="p-4 sm:p-8 flex-1 space-y-6 overflow-y-auto">
            <?php $segment = $this->uri->segment(3); ?>
            
            <?php if(is_null($segment) || $segment == 'dashboard'): ?>
                <!-- Dashboard Welcome & Status Skeleton -->
                <div class="space-y-2 mb-8">
                    <div class="h-8 bg-slate-200 rounded animate-pulse w-64"></div>
                    <div class="h-4 bg-slate-200 rounded animate-pulse w-96"></div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <?php for($i=0; $i<4; $i++): ?>
                    <div class="h-[120px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse p-6 flex flex-col justify-between">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 bg-slate-100 rounded-2xl"></div>
                            <div class="w-16 h-6 bg-slate-100 rounded-full"></div>
                        </div>
                        <div class="space-y-2">
                            <div class="h-3 bg-slate-100 rounded w-1/2"></div>
                            <div class="h-5 bg-slate-200 rounded w-3/4"></div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 h-[400px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                    <div class="space-y-6">
                        <div class="h-[150px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                        <div class="h-[150px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                    </div>
                </div>
            <?php elseif($segment == 'biodata'): ?>
                <div class="flex justify-between items-center mb-6">
                    <div class="space-y-2">
                        <div class="h-8 bg-slate-200 rounded animate-pulse w-48"></div>
                        <div class="h-4 bg-slate-200 rounded animate-pulse w-64"></div>
                    </div>
                    <div class="h-10 w-32 bg-slate-200 rounded-xl animate-pulse"></div>
                </div>
                <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                    <div class="w-full lg:w-1/3 xl:w-1/4 h-[400px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                    <div class="flex-1 h-[600px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                </div>
            <?php elseif($segment == 'berkas'): ?>
                <div class="space-y-2 mb-6">
                    <div class="h-8 bg-slate-200 rounded animate-pulse w-48"></div>
                    <div class="h-4 bg-slate-200 rounded animate-pulse w-96"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php for($i=0; $i<5; $i++): ?>
                    <div class="h-[280px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
                    <?php endfor; ?>
                </div>
            <?php elseif($segment == 'ujian'): ?>
                <div class="space-y-2 mb-6">
                    <div class="h-8 bg-slate-200 rounded animate-pulse w-48"></div>
                    <div class="h-4 bg-slate-200 rounded animate-pulse w-96"></div>
                </div>
                <div class="h-[400px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
            <?php else: ?>
                <div class="h-[500px] bg-white rounded-3xl border border-slate-200 shadow-sm animate-pulse"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        const studentSkeleton = document.getElementById('student-skeleton');
        if (studentSkeleton) {
            setTimeout(() => {
                studentSkeleton.style.opacity = '0';
                setTimeout(() => {
                    studentSkeleton.style.display = 'none';
                }, 500);
            }, 300);
        }
    });
</script>

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
                        <h2 class="font-bold text-slate-900 leading-tight">SPMB Portal</h2>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider"></p>
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

                <a href="<?= base_url('ppdb/calon-siswa/ujian') ?>" class="flex items-center gap-3 px-4 py-3 <?= ($this->uri->segment(3) == 'ujian') ? 'bg-brand-50 text-brand-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium group' ?> rounded-xl transition-all">
                    <div class="w-6 flex items-center justify-center">
                        <i class="fa-solid fa-file-signature text-lg <?= ($this->uri->segment(3) == 'ujian') ? '' : 'text-slate-400 group-hover:text-slate-600' ?>"></i>
                    </div>
                    <span>Ujian Online</span>
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
