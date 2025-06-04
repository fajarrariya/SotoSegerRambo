<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Soto Boyolali Pak Rambo - Soto Khas Boyolali di Jakarta Selatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(135deg, #115246 0%, #0a3a31 100%);
        }

        .section-divider {
            background: linear-gradient(90deg, transparent, #115246, transparent);
            height: 2px;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body class="font-sans">
    <!-- Navbar -->
    @include('section.navbar')

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center pt-16">
        @include('section.hero')
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-green-50">
        @include('section.about')
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-white">
        @include('section.menu')
    </section>

    <!-- Blog Section -->
    <section id="berita" class="py-20 bg-green-50">
        @include('section.berita')
    </section>


    <!-- Location Section -->
    <section id="location" class="py-20 bg-white">
        @include('section.lokasi')
    </section>


    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-green-50">
        @include('section.kontak')
    </section>

    <!-- Footer -->
    @include('section.footer')

    <script>
        // Side dishes carousel functionality
        const container = document.getElementById('side-dishes-container');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        let scrollAmount = 0;
        const scrollStep = 280; // Width of one card plus gap

        prevBtn.addEventListener('click', () => {
            scrollAmount = Math.max(0, scrollAmount - scrollStep);
            container.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            const maxScroll = container.scrollWidth - container.clientWidth;
            scrollAmount = Math.min(maxScroll, scrollAmount + scrollStep);
            container.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        // Update button visibility based on scroll position
        container.addEventListener('scroll', () => {
            scrollAmount = container.scrollLeft;
            const maxScroll = container.scrollWidth - container.clientWidth;

            prevBtn.style.opacity = scrollAmount <= 0 ? '0.5' : '1';
            nextBtn.style.opacity = scrollAmount >= maxScroll ? '0.5' : '1';
        });

        // Initialize button states
        prevBtn.style.opacity = '0.5';

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 64; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
                // Close mobile menu if open
                mobileMenu.classList.add('hidden');
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
    </script>
</body>

</html>
