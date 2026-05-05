        </div>
    </main>
</div>

<!-- JavaScript for Sidebar, Dropdowns and Interactions -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        const mainContent = document.querySelector('main');
        const toggleBtn = document.getElementById('sidebar-toggle');
        const profileTrigger = document.getElementById('profile-trigger'); 
        
        let isMobileSidebarOpen = false;
        let isDesktopCollapsed = false;

        // Create Dropdown Menu Element
        const dropdownMenu = document.createElement('div');
        dropdownMenu.className = 'absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 hidden';
        dropdownMenu.style.top = '100%';
        dropdownMenu.innerHTML = `
            <a href="<?= base_url('ppdb/calon-siswa/biodata') ?>" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-brand-600 transition-all font-medium">
                <i class="fa-solid fa-user-circle"></i> Profile Saya
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-brand-600 transition-all font-medium">
                <i class="fa-solid fa-gear"></i> Pengaturan
            </a>
            <div class="border-t border-slate-50 my-1"></div>
            <button type="button" id="logout-trigger-dropdown" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-rose-600 hover:bg-rose-50 transition-all font-medium">
                <i class="fa-solid fa-right-from-bracket"></i> Keluar
            </button>
        `;
        profileTrigger.style.position = 'relative';
        profileTrigger.appendChild(dropdownMenu);

        function toggleMobileSidebar(open) {
            isMobileSidebarOpen = open;
            if (isMobileSidebarOpen) {
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.remove('hidden');
                setTimeout(() => backdrop.classList.replace('opacity-0', 'opacity-100'), 10);
            } else {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.replace('opacity-100', 'opacity-0');
                setTimeout(() => backdrop.classList.add('hidden'), 300);
            }
        }

        // Sidebar Toggle Logic
        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (window.innerWidth < 1024) {
                toggleMobileSidebar(!isMobileSidebarOpen);
            } else {
                // Desktop Collapse
                isDesktopCollapsed = !isDesktopCollapsed;
                if (isDesktopCollapsed) {
                    sidebar.classList.add('lg:w-20');
                    sidebar.classList.remove('lg:w-72');
                    mainContent.classList.replace('lg:ml-72', 'lg:ml-20');
                    
                    // Hide text in sidebar
                    sidebar.querySelectorAll('span, p, .bg-slate-900').forEach(el => el.classList.add('hidden'));
                    sidebar.querySelector('.font-bold.text-slate-900').parentElement.classList.add('hidden');
                } else {
                    sidebar.classList.remove('lg:w-20');
                    sidebar.classList.add('lg:w-72');
                    mainContent.classList.replace('lg:ml-20', 'lg:ml-72');
                    
                    // Show text in sidebar
                    sidebar.querySelectorAll('span, p, .bg-slate-900').forEach(el => el.classList.remove('hidden'));
                    sidebar.querySelector('.font-bold.text-slate-900').parentElement.classList.remove('hidden');
                }
            }
        });

        // Click on backdrop to close
        backdrop.addEventListener('click', () => {
            toggleMobileSidebar(false);
        });

        // Profile Dropdown Toggle
        profileTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });

        // Close everything on click outside
        document.addEventListener('click', (e) => {
            // Close mobile sidebar
            if (isMobileSidebarOpen && !sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                toggleMobileSidebar(false);
            }
            
            // Close dropdown
            if (!profileTrigger.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Subtle scale effect on nav items
        const navItems = document.querySelectorAll('nav a');
        navItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                if (!item.classList.contains('bg-brand-50')) {
                    item.style.transform = 'translateX(4px)';
                }
            });
            item.addEventListener('mouseleave', () => {
                item.style.transform = 'translateX(0)';
            });
        });
    });
</script>

<!-- Logout Confirmation Modal -->
<div id="logout-modal" class="fixed inset-0 z-[100] hidden items-end sm:items-center justify-center p-0 sm:p-4 transition-all duration-300">
    <!-- Modal Backdrop -->
    <div id="logout-backdrop" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
    
    <!-- Modal Content -->
    <div id="logout-content" class="relative w-full sm:max-w-md bg-white rounded-t-[2.5rem] sm:rounded-3xl shadow-2xl transform translate-y-full sm:translate-y-4 sm:scale-95 opacity-0 transition-all duration-300 ease-out overflow-hidden">
        <!-- Mobile Handle -->
        <div class="w-12 h-1.5 bg-slate-200 rounded-full mx-auto mt-4 mb-2 sm:hidden"></div>
        
        <div class="p-8 pt-6 sm:pt-8 text-center">
            <div class="w-16 h-16 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-6 shadow-sm border border-rose-100">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            
            <h3 class="text-xl font-bold text-slate-900 mb-2">Konfirmasi Keluar</h3>
            <p class="text-slate-500 mb-8 leading-relaxed">Apakah Anda yakin ingin keluar dari portal PPDB? Sesi Anda akan diakhiri.</p>
            
            <div class="flex flex-col sm:flex-row gap-3">
                <button id="logout-cancel" class="flex-1 px-6 py-3.5 bg-slate-100 text-slate-600 font-bold rounded-2xl hover:bg-slate-200 transition-all order-2 sm:order-1">Batal</button>
                <a href="<?= base_url('ppdb/login') ?>" class="flex-1 px-6 py-3.5 bg-rose-600 text-white font-bold rounded-2xl shadow-lg shadow-rose-600/20 hover:bg-rose-700 transition-all order-1 sm:order-2">Ya, Keluar</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('logout-modal');
        const backdrop = document.getElementById('logout-backdrop');
        const content = document.getElementById('logout-content');
        const cancelBtn = document.getElementById('logout-cancel');
        const triggers = [
            document.getElementById('logout-trigger'),
            document.getElementById('logout-trigger-dropdown')
        ];

        function showModal() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            // Trigger animations
            setTimeout(() => {
                backdrop.classList.replace('opacity-0', 'opacity-100');
                content.classList.remove('translate-y-full', 'sm:translate-y-4', 'sm:scale-95', 'opacity-0');
                content.classList.add('translate-y-0', 'sm:translate-y-0', 'sm:scale-100', 'opacity-100');
            }, 10);
        }

        function hideModal() {
            backdrop.classList.replace('opacity-100', 'opacity-0');
            content.classList.add('translate-y-full', 'sm:translate-y-4', 'sm:scale-95', 'opacity-0');
            content.classList.remove('translate-y-0', 'sm:translate-y-0', 'sm:scale-100', 'opacity-100');
            
            setTimeout(() => {
                modal.classList.replace('flex', 'hidden');
            }, 300);
        }

        triggers.forEach(trigger => {
            if (trigger) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    showModal();
                });
            }
        });

        cancelBtn.addEventListener('click', hideModal);
        backdrop.addEventListener('click', hideModal);

        // Escape key to close
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                hideModal();
            }
        });
    });
</script>

</body>
</html>
