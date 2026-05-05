            </div>
        </main>
    </div>
</div>

<!-- Mobile Sidebar Backdrop -->
<div id="sidebar-backdrop-admin" class="fixed inset-0 bg-slate-900/60 z-[48] hidden lg:hidden transition-opacity duration-300 opacity-0 backdrop-blur-sm"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('admin-sidebar');
        const backdrop = document.getElementById('sidebar-backdrop-admin');
        const toggle = document.getElementById('sidebar-toggle-admin');

        function toggleSidebar() {
            const isOpen = !sidebar.classList.contains('-translate-x-full');
            if (isOpen) {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('opacity-0');
                setTimeout(() => backdrop.classList.add('hidden'), 300);
            } else {
                backdrop.classList.remove('hidden');
                setTimeout(() => backdrop.classList.remove('opacity-0'), 10);
                sidebar.classList.remove('-translate-x-full');
            }
        }

        toggle?.addEventListener('click', toggleSidebar);
        backdrop?.addEventListener('click', toggleSidebar);
    });
</script>

</body>
</html>
