<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= isset($title) ? $title : 'SMA YPPK Tiga Raja Timika - Cerdas & Berkarakter' ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Website Resmi SMA YPPK Tiga Raja Timika. Mewujudkan generasi berprestasi, berkarakter unggul, dan siap menghadapi tantangan global di Tanah Papua.">
    <meta name="keywords" content="sekolah, sma, yppk, tiga raja, timika, papua, pendidikan, pendaftaran siswa baru">
    <meta name="author" content="SMA YPPK Tiga Raja Timika">
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS (Build) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>
        /* Custom Styles for things Tailwind is too verbose for */
        html, body {
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            font-family: 'Poppins', sans-serif;
        }

        .font-heading {
            font-family: 'Poppins', sans-serif !important;
        }

        .font-sans {
            font-family: 'Poppins', sans-serif !important;
        }

        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 64, 175, 0.8) 100%);
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;  
            overflow: hidden;
        }

        /* Smooth reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="font-sans text-gray-600 antialiased bg-gray-50 selection:bg-brand-500 selection:text-white">

    <!-- Preloader Skeleton -->
    <div id="page-preloader" class="fixed inset-0 z-[9999] bg-white flex flex-col items-center justify-center transition-all duration-700 ease-in-out">
        <div class="relative w-24 h-24 mb-8">
            <!-- Animated Spinner Rings -->
            <div class="absolute inset-0 rounded-full border-4 border-brand-100 border-t-brand-600 animate-spin"></div>
            <div class="absolute inset-2 rounded-full border-4 border-accent-100 border-b-accent-500 animate-spin" style="animation-direction: reverse; animation-duration: 1.5s;"></div>
            
            <!-- Logo inside spinner -->
            <div class="absolute inset-4 bg-white rounded-full flex items-center justify-center shadow-sm overflow-hidden border border-gray-100">
                <img src="<?= base_url('assets/logo-sma.jpg') ?>" alt="Loading..." class="w-full h-full object-contain scale-[1.15]">
            </div>
        </div>
        
        <!-- Skeleton Loading Bars -->
        <div class="w-56 flex flex-col items-center gap-3">
            <div class="h-3 w-full bg-gray-200/80 rounded-full animate-pulse"></div>
            <div class="h-2 w-4/5 bg-gray-200/80 rounded-full animate-pulse" style="animation-delay: 150ms;"></div>
            <div class="h-2 w-3/5 bg-gray-200/80 rounded-full animate-pulse" style="animation-delay: 300ms;"></div>
        </div>
        
        <p class="mt-8 text-xs text-brand-500 font-semibold tracking-[0.2em] uppercase animate-pulse">Memuat Halaman...</p>
    </div>

    <!-- Preloader Logic -->
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('page-preloader');
            if (preloader) {
                // Add a small delay for a smoother experience
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 700); // Matches the transition-duration
                }, 300); // Reduced delay for faster perceived loading
            }
        });
    </script>
