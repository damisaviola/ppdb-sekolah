<!-- Footer -->
<footer class="bg-brand-900 text-gray-300 pt-20 pb-10 border-t border-brand-800">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <!-- School Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg overflow-hidden border-2 border-white/20 shrink-0">
                        <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Logo SMA YPPK" class="w-full h-full object-contain scale-[1.15]">
                    </div>
                    <div>
                        <h2 class="font-heading font-bold text-xl text-white tracking-tight">SMA YPPK TIGA RAJA</h2>
                    </div>
                </div>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Mencetak generasi unggul yang berkarakter, inovatif, dan siap menghadapi tantangan global melalui pendidikan berkualitas yang mengedepankan nilai-nilai moral.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-brand-800 flex items-center justify-center text-white hover:bg-brand-600 transition-colors">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-brand-800 flex items-center justify-center text-white hover:bg-brand-600 transition-colors">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-brand-800 flex items-center justify-center text-white hover:bg-brand-600 transition-colors">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-brand-800 flex items-center justify-center text-white hover:bg-brand-600 transition-colors">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-heading font-bold text-lg mb-6 flex items-center gap-2">
                    <span class="w-4 h-1 bg-brand-500 rounded-full"></span> Tautan Cepat
                </h3>
                <ul class="space-y-3">
                    <li><a href="<?= base_url('#profil') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Profil Sekolah</a></li>
                    <li><a href="<?= base_url('#program') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Program & Jurusan</a></li>
                    <li><a href="<?= base_url('#fasilitas') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Fasilitas</a></li>
                    <li><a href="<?= base_url('#berita') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Berita & Pengumuman</a></li>
                    <li><a href="<?= base_url('#galeri') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Galeri Kegiatan</a></li>
                    <li><a href="<?= base_url('#kontak') ?>" class="hover:text-white hover:translate-x-1 inline-block transition-transform duration-300"><i class="fa-solid fa-chevron-right text-xs mr-2 text-brand-500"></i> Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Program Info -->
            <div>
                <h3 class="text-white font-heading font-bold text-lg mb-6 flex items-center gap-2">
                    <span class="w-4 h-1 bg-brand-500 rounded-full"></span> Program Unggulan
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded bg-brand-800/50 flex items-center justify-center text-brand-400">
                            <i class="fa-solid fa-flask text-sm"></i>
                        </div>
                        <span>MIPA (Sains)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded bg-brand-800/50 flex items-center justify-center text-brand-400">
                            <i class="fa-solid fa-globe text-sm"></i>
                        </div>
                        <span>IPS (Sosial)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded bg-brand-800/50 flex items-center justify-center text-brand-400">
                            <i class="fa-solid fa-language text-sm"></i>
                        </div>
                        <span>BAHASA (Linguistik)</span>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-white font-heading font-bold text-lg mb-6 flex items-center gap-2">
                    <span class="w-4 h-1 bg-brand-500 rounded-full"></span> Kontak Info
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 rounded bg-brand-800 flex flex-shrink-0 items-center justify-center text-white">
                            <i class="fa-solid fa-location-dot text-sm"></i>
                        </div>
                        <span class="leading-relaxed">Jl. Pendidikan, Mimika Baru, Kota Timika, Kabupaten Mimika, Papua Tengah 99910</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <div class="w-8 h-8 rounded bg-brand-800 flex flex-shrink-0 items-center justify-center text-white">
                            <i class="fa-solid fa-phone text-sm"></i>
                        </div>
                        <span>(0901) 123-4567</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <div class="w-8 h-8 rounded bg-brand-800 flex flex-shrink-0 items-center justify-center text-white">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <span>info@smayppktigaraja.sch.id</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="pt-8 border-t border-brand-800/50 text-center text-sm text-gray-400 flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; <?= date('Y') ?> SMA YPPK Tiga Raja Timika. Hak Cipta Dilindungi.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

<!-- Reveal Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll(".reveal");

        function reveal() {
            const windowHeight = window.innerHeight;
            const elementVisible = 100;

            reveals.forEach((reveal) => {
                const elementTop = reveal.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", reveal);
        reveal(); // Trigger on load
    });

    // Removed preloader logic from here, now moved to header.php for global coverage
</script>

</body>
</html>
