<?php 
    $data['title_short'] = 'Unggah Berkas';
    $this->load->view('templates/dashboard_header', $data); 
?>

<!-- Header Section -->
<div class="mb-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-2">Unggah Berkas Persyaratan</h1>
    <p class="text-slate-500 font-medium max-w-2xl text-sm sm:text-base">Mohon unggah dokumen dalam format PDF atau Gambar (JPG/PNG) dengan ukuran maksimal 2MB per berkas.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 pb-12">
    <!-- Item: Pas Foto -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col group transition-all hover:border-brand-300">
        <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex items-center justify-between">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-image-portrait text-brand-600"></i>
                Pas Foto 3x4
            </h3>
            <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded-full uppercase">Wajib</span>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <!-- Drag & Drop Area -->
            <label class="drop-zone relative flex-1 border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center p-6 cursor-pointer hover:bg-slate-50/50 hover:border-brand-400 transition-all group/label">
                <input type="file" class="hidden" name="pas_foto">
                <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mb-3 group-hover/label:bg-brand-50 group-hover/label:text-brand-600 transition-all">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <p class="text-sm font-bold text-slate-600 group-hover/label:text-brand-700 transition-all">Pilih Berkas</p>
                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider">Drag and drop di sini</p>
            </label>
            
            <div class="file-info mt-4 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="status-dot w-2 h-2 bg-slate-300 rounded-full"></div>
                    <span class="status-text text-xs font-medium text-slate-500 italic">Belum diunggah</span>
                </div>
                <button type="button" class="text-xs font-bold text-brand-600 hover:text-brand-700">Ketentuan</button>
            </div>
        </div>
    </div>

    <!-- Item: Ijazah -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col group transition-all hover:border-brand-300">
        <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex items-center justify-between">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-scroll text-brand-600"></i>
                Ijazah / SKL
            </h3>
            <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded-full uppercase">Wajib</span>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <label class="drop-zone relative flex-1 border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center p-6 cursor-pointer hover:bg-slate-50/50 hover:border-brand-400 transition-all group/label">
                <input type="file" class="hidden" name="ijazah">
                <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mb-3 group-hover/label:bg-brand-50 group-hover/label:text-brand-600 transition-all">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <p class="text-sm font-bold text-slate-600 group-hover/label:text-brand-700 transition-all">Pilih Berkas</p>
                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider">Drag and drop di sini</p>
            </label>
            
            <div class="file-info mt-4 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="status-dot w-2 h-2 bg-slate-300 rounded-full"></div>
                    <span class="status-text text-xs font-medium text-slate-500 italic">Belum diunggah</span>
                </div>
                <button type="button" class="text-xs font-bold text-brand-600 hover:text-brand-700">Ketentuan</button>
            </div>
        </div>
    </div>

    <!-- Item: Akta Kelahiran -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col group transition-all hover:border-brand-300">
        <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex items-center justify-between">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-baby text-brand-600"></i>
                Akta Kelahiran
            </h3>
            <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded-full uppercase">Wajib</span>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <label class="drop-zone relative flex-1 border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center p-6 cursor-pointer hover:bg-slate-50/50 hover:border-brand-400 transition-all group/label">
                <input type="file" class="hidden" name="akta">
                <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mb-3 group-hover/label:bg-brand-50 group-hover/label:text-brand-600 transition-all">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <p class="text-sm font-bold text-slate-600 group-hover/label:text-brand-700 transition-all">Pilih Berkas</p>
                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider">Drag and drop di sini</p>
            </label>
            
            <div class="file-info mt-4 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="status-dot w-2 h-2 bg-slate-300 rounded-full"></div>
                    <span class="status-text text-xs font-medium text-slate-500 italic">Belum diunggah</span>
                </div>
                <button type="button" class="text-xs font-bold text-brand-600 hover:text-brand-700">Ketentuan</button>
            </div>
        </div>
    </div>

    <!-- Item: Kartu Keluarga -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col group transition-all hover:border-brand-300">
        <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex items-center justify-between">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-users text-brand-600"></i>
                Kartu Keluarga
            </h3>
            <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded-full uppercase">Wajib</span>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <label class="drop-zone relative flex-1 border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center p-6 cursor-pointer hover:bg-slate-50/50 hover:border-brand-400 transition-all group/label">
                <input type="file" class="hidden" name="kk">
                <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mb-3 group-hover/label:bg-brand-50 group-hover/label:text-brand-600 transition-all">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <p class="text-sm font-bold text-slate-600 group-hover/label:text-brand-700 transition-all">Pilih Berkas</p>
                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider">Drag and drop di sini</p>
            </label>
            
            <div class="file-info mt-4 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="status-dot w-2 h-2 bg-slate-300 rounded-full"></div>
                    <span class="status-text text-xs font-medium text-slate-500 italic">Belum diunggah</span>
                </div>
                <button type="button" class="text-xs font-bold text-brand-600 hover:text-brand-700">Ketentuan</button>
            </div>
        </div>
    </div>

    <!-- Item: Rapor Terakhir -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col group transition-all hover:border-brand-300">
        <div class="p-5 border-b border-slate-50 bg-slate-50/30 flex items-center justify-between">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-file-lines text-brand-600"></i>
                Rapor Terakhir
            </h3>
            <span class="text-[10px] font-bold text-slate-400 bg-slate-100 px-2 py-0.5 rounded-full uppercase">Opsional</span>
        </div>
        <div class="p-6 flex-1 flex flex-col">
            <label class="drop-zone relative flex-1 border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center p-6 cursor-pointer hover:bg-slate-50/50 hover:border-brand-400 transition-all group/label">
                <input type="file" class="hidden" name="rapor">
                <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mb-3 group-hover/label:bg-brand-50 group-hover/label:text-brand-600 transition-all">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <p class="text-sm font-bold text-slate-600 group-hover/label:text-brand-700 transition-all">Pilih Berkas</p>
                <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-wider">Drag and drop di sini</p>
            </label>
            
            <div class="file-info mt-4 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="status-dot w-2 h-2 bg-slate-300 rounded-full"></div>
                    <span class="status-text text-xs font-medium text-slate-500 italic">Belum diunggah</span>
                </div>
                <button type="button" class="text-xs font-bold text-brand-600 hover:text-brand-700">Ketentuan</button>
            </div>
        </div>
    </div>

    <!-- Help Card -->
    <div class="bg-brand-600 rounded-3xl p-8 text-white relative overflow-hidden group shadow-xl shadow-brand-600/20">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-600 to-indigo-700"></div>
        <div class="relative z-10 h-full flex flex-col">
            <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center mb-6 backdrop-blur-md">
                <i class="fa-solid fa-circle-question text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Mengalami Kendala?</h3>
            <p class="text-sm text-brand-100 leading-relaxed mb-6">Jika Anda kesulitan mengunggah berkas atau berkas terlalu besar, silakan hubungi tim IT kami atau datang langsung ke sekolah.</p>
            
            <div class="mt-auto">
                <a href="#" class="inline-flex items-center gap-2 bg-white text-brand-600 px-6 py-3 rounded-xl font-bold text-sm hover:bg-brand-50 transition-all shadow-lg">
                    Hubungi Bantuan
                    <i class="fa-solid fa-headset"></i>
                </a>
            </div>
        </div>
        <!-- Decorative Icon -->
        <i class="fa-solid fa-upload absolute -right-8 -bottom-8 text-8xl text-white/5 group-hover:rotate-12 group-hover:scale-110 transition-all duration-700"></i>
    </div>
</div>

<script>
    document.querySelectorAll('.drop-zone').forEach(dropZone => {
        const input = dropZone.querySelector('input[type="file"]');
        const container = dropZone.closest('.flex-col');
        const statusDot = container.querySelector('.status-dot');
        const statusText = container.querySelector('.status-text');
        const labelText = dropZone.querySelector('p.text-sm');
        const iconContainer = dropZone.querySelector('.w-12');

        // Prevent default drag behaviors
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, e => {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        // Highlight drop zone when item is dragged over it
        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.add('border-brand-500', 'bg-brand-50/50');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.remove('border-brand-500', 'bg-brand-50/50');
            }, false);
        });

        // Handle dropped files
        dropZone.addEventListener('drop', e => {
            const dt = e.dataTransfer;
            const files = dt.files;
            if (files.length) {
                input.files = files;
                handleFiles(files[0], dropZone, statusDot, statusText, labelText, iconContainer);
            }
        });

        // Handle file selection via click
        input.addEventListener('change', () => {
            if (input.files.length) {
                handleFiles(input.files[0], dropZone, statusDot, statusText, labelText, iconContainer);
            }
        });
    });

    function handleFiles(file, dropZone, statusDot, statusText, labelText, iconContainer) {
        // Update UI to show success/selected state
        dropZone.classList.remove('border-slate-200');
        dropZone.classList.add('border-emerald-500', 'bg-emerald-50/20');
        
        iconContainer.classList.remove('bg-slate-100', 'text-slate-400');
        iconContainer.classList.add('bg-emerald-500', 'text-white', 'shadow-lg', 'shadow-emerald-500/20', 'overflow-hidden');
        
        // Image Preview Logic
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                iconContainer.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                iconContainer.classList.remove('bg-emerald-500');
                iconContainer.classList.add('p-0', 'border-2', 'border-white');
                
                // Add preview button to status area
                const previewBtn = document.createElement('button');
                previewBtn.type = 'button';
                previewBtn.className = 'text-[10px] font-bold text-emerald-600 bg-emerald-100 px-2 py-1 rounded-md hover:bg-emerald-200 transition-all ml-2';
                previewBtn.innerText = 'LIHAT';
                previewBtn.onclick = (event) => {
                    event.preventDefault();
                    event.stopPropagation();
                    showPreviewModal(e.target.result, file.name);
                };
                if (!statusText.parentNode.querySelector('.preview-btn')) {
                    previewBtn.classList.add('preview-btn');
                    statusText.parentNode.appendChild(previewBtn);
                }
            };
            reader.readAsDataURL(file);
        } else {
            iconContainer.innerHTML = '<i class="fa-solid fa-file-pdf text-xl"></i>';
            // Remove existing preview button if any
            const existingBtn = statusText.parentNode.querySelector('.preview-btn');
            if (existingBtn) existingBtn.remove();
        }

        labelText.innerHTML = file.name;
        labelText.classList.remove('text-slate-600');
        labelText.classList.add('text-emerald-700');

        statusDot.classList.remove('bg-slate-300');
        statusDot.classList.add('bg-emerald-500', 'animate-pulse');

        statusText.innerHTML = 'Siap Diunggah';
        statusText.classList.remove('text-slate-500', 'italic');
        statusText.classList.add('text-emerald-600', 'font-bold');
        
        console.log('File selected:', file.name);
    }

    // Modal Preview Logic
    function showPreviewModal(src, title) {
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-10 bg-slate-900/90 backdrop-blur-sm animate-in fade-in duration-300';
        modal.innerHTML = `
            <div class="relative max-w-4xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl animate-in zoom-in-95 duration-300">
                <div class="p-4 border-b border-slate-100 flex items-center justify-between">
                    <h4 class="font-bold text-slate-900 truncate pr-8">${title}</h4>
                    <button class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center hover:bg-rose-50 hover:text-rose-600 transition-all">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="p-2 bg-slate-50">
                    <img src="${src}" class="w-full h-auto max-h-[70vh] object-contain rounded-xl shadow-inner">
                </div>
                <div class="p-4 flex justify-end gap-2 bg-white">
                    <button class="close-modal px-6 py-2 bg-slate-900 text-white text-sm font-bold rounded-xl hover:bg-slate-800 transition-all">Tutup</button>
                </div>
            </div>
        `;
        
        const closeModal = () => {
            modal.classList.add('fade-out');
            setTimeout(() => modal.remove(), 300);
        };

        modal.querySelector('button').onclick = closeModal;
        modal.querySelector('.close-modal').onclick = closeModal;
        modal.onclick = (e) => { if (e.target === modal) closeModal(); };

        document.body.appendChild(modal);
    }
</script>

<?php $this->load->view('templates/dashboard_footer'); ?>
