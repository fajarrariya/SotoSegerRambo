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
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <i class="fas fa-bowl-hot text-2xl text-green-500 mr-3"></i>
                    <span class="text-xl font-bold text-gray-800">Soto Boyolali Pak Rambo</span>
                </div>
                <div class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#" class="text-gray-600 hover:text-green-500 transition duration-300"></a>
                        </li>
                        <li><a href="#home"
                                class="text-gray-600 hover:text-green-500 transition duration-300">Home</a></li>
                        <li><a href="#menu"
                                class="text-gray-600 hover:text-green-500 transition duration-300">Menu</a></li>
                        <li><a href="#location"
                                class="text-gray-600 hover:text-green-500 transition duration-300">Lokasi</a></li>
                        <li><a href="#contact"
                                class="text-gray-600 hover:text-green-500 transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-green-500">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-gray-600 hover:text-green-500">Home</a>
                <a href="#about" class="block px-3 py-2 text-gray-600 hover:text-green-500">Tentang</a>
                <a href="#menu" class="block px-3 py-2 text-gray-600 hover:text-green-500">Menu</a>
                <a href="#location" class="block px-3 py-2 text-gray-600 hover:text-green-500">Lokasi</a>
                <a href="#contact" class="block px-3 py-2 text-gray-600 hover:text-green-500">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Text Content -->
                <div class="text-white space-y-6 drop-shadow-lg">
                    <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight tracking-wide">
                        SOTO BOYOLALI<br>
                        <span class="text-green-300 drop-shadow-md">PAK RAMBO</span>
                    </h1>
                    <p
                        class="text-xl lg:text-2xl opacity-95 leading-relaxed max-w-2xl bg-black bg-opacity-20 p-4 rounded-lg">
                        Nikmati kelezatan <span class="font-semibold text-green-200">soto khas Boyolali</span> yang
                        autentik dengan cita rasa legendaris yang <span class="italic">tak pernah berubah</span>.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="#menu"
                            class="bg-white text-green-700 px-8 py-4 rounded-full font-bold text-lg hover:bg-green-100 transition duration-300 shadow-2xl flex items-center justify-center">
                            <i class="fas fa-utensils mr-3"></i>Lihat Menu
                        </a>
                        <a href="#location"
                            class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-green-700 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-map-marker-alt mr-3"></i>Lokasi Kami
                        </a>
                    </div>
                </div>

                <!-- Soto Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative float-animation">
                        <!-- Bayangan -->
                        <div
                            class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-64 h-8 bg-black bg-opacity-20 rounded-full blur-md">
                        </div>

                        <!-- Gambar Lokal Soto -->
                        <img src="{{ asset('images/soto.png') }}" alt="Soto Boyolali"
                            class="w-100 h-100 object-contain rounded-full relative z-10" />

                        <!-- Efek Uap -->
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                            <div class="w-2 h-12 bg-white bg-opacity-40 rounded-full animate-pulse"></div>
                        </div>
                        <div class="absolute -top-6 left-1/2 transform -translate-x-8">
                            <div class="w-1 h-8 bg-white bg-opacity-30 rounded-full animate-pulse"
                                style="animation-delay: 0.5s;"></div>
                        </div>
                        <div class="absolute -top-6 left-1/2 transform translate-x-6">
                            <div class="w-1 h-10 bg-white bg-opacity-30 rounded-full animate-pulse"
                                style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h3>
                <div class="section-divider w-24 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Soto Wong Boyolali Pak Asli Nur Rambo adalah warung soto legendaris yang telah menyajikan
                    kelezatan soto khas Boyolali dengan cita rasa autentik dan konsisten.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-green-500 text-2xl"></i>
                    </div>
                    <h5 class="text-xl font-semibold text-gray-800 mb-4">Kualitas Terjamin</h5>
                    <p class="text-gray-600">
                        Rating 4.5/5 dari ribuan pengunjung yang puas dengan kelezatan dan kualitas soto kami
                        yang selalu konsisten.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-green-500 text-2xl"></i>
                    </div>
                    <h5 class="text-xl font-semibold text-gray-800 mb-4">Buka Setiap Hari</h5>
                    <p class="text-gray-600">
                        Melayani Anda setiap hari dari pukul 07.00 - 16.00 WIB dengan pelayanan yang
                        ramah dan sigap.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-green-500 text-2xl"></i>
                    </div>
                    <h5 class="text-xl font-semibold text-gray-800 mb-4">Lokasi Strategis</h5>
                    <p class="text-gray-600">
                        Berlokasi di Jagakarsa, Jakarta Selatan, dekat dengan Stasiun Tanjung Barat
                        dan mudah dijangkau.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Menu Spesial Kami</h3>
                <div class="section-divider w-24 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Pilihan menu soto yang lezat dengan berbagai lauk pendamping yang menggugah selera.
                </p>
            </div>

            <!-- Main Menu -->
            <div class="mb-16">
                <h4 class="text-2xl font-bold text-center text-gray-800 mb-8">Soto Spesial</h4>
                <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    <div
                        class="bg-gradient-to-r from-green-50 to-yellow-50 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                        <div class="mb-4">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-yellow-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                <div class="text-center">
                                    <div class="text-6xl mb-2">🍲</div>
                                    <p class="text-gray-600 text-sm">Soto Ayam Kampung</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-start mb-3">
                                <h5 class="text-xl font-semibold text-gray-800">Soto Ayam Kampung</h5>
                                <span class="text-lg font-bold text-green-500">Rp 12.000 - 18.000</span>
                            </div>
                            <p class="text-gray-600">
                                Soto ayam kampung berkuah bening segar lengkap dengan bihun, tauge,
                                suwiran ayam, bawang goreng, dan seledri.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-green-50 to-yellow-50 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                        <div class="mb-4">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-red-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                <div class="text-center">
                                    <div class="text-6xl mb-2">🥩</div>
                                    <div class="text-4xl">🍲</div>
                                    <p class="text-gray-600 text-sm mt-2">Soto Daging Sapi</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-start mb-3">
                                <h5 class="text-xl font-semibold text-gray-800">Soto Daging Sapi</h5>
                                <span class="text-lg font-bold text-green-500">Rp 18.000 - 22.000</span>
                            </div>
                            <p class="text-gray-600">
                                Soto daging sapi dengan potongan daging has dalam yang empuk,
                                berkuah gurih dan kaya rempah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Dishes -->
            <div>
                <h4 class="text-2xl font-bold text-center text-gray-800 mb-8">Lauk Pendamping</h4>
                <div class="relative">
                    <!-- Navigation Buttons -->
                    <button id="prev-btn"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-10">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="next-btn"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-10">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Scrollable Container -->
                    <div id="side-dishes-container" class="overflow-x-auto scrollbar-hide mx-12">
                        <div class="flex space-x-6 pb-4" style="width: max-content;">
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-red-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🍢</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sate Daging Sapi</span>
                                    <span class="text-green-500 font-semibold">Rp 8.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-gray-100 to-red-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🫁</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sate Paru</span>
                                    <span class="text-green-500 font-semibold">Rp 6.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-yellow-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🥚</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sate Telur Puyuh</span>
                                    <span class="text-green-500 font-semibold">Rp 5.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-gray-100 to-yellow-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🦴</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sate Kikil</span>
                                    <span class="text-green-500 font-semibold">Rp 7.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-red-100 to-brown-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🫀</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sate Ati Ampela</span>
                                    <span class="text-green-500 font-semibold">Rp 6.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-yellow-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🥔</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Perkedel Kentang</span>
                                    <span class="text-green-500 font-semibold">Rp 3.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-yellow-100 to-brown-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🟫</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Tempe Goreng</span>
                                    <span class="text-green-500 font-semibold">Rp 3.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-white to-yellow-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🧈</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Tahu Goreng</span>
                                    <span class="text-green-500 font-semibold">Rp 3.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-yellow-100 to-green-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🥟</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Risol Bihun</span>
                                    <span class="text-green-500 font-semibold">Rp 4.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-red-100 to-pink-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🌭</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Sosis Solo</span>
                                    <span class="text-green-500 font-semibold">Rp 5.000</span>
                                </div>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 min-w-64">
                                <div
                                    class="w-full h-32 bg-gradient-to-br from-green-100 to-yellow-100 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-4xl">🍘</div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-800">Kerupuk</span>
                                    <span class="text-green-500 font-semibold">Rp 2.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Scroll Indicator -->
                <div class="text-center mt-4 text-gray-500 text-sm md:hidden">
                    <i class="fas fa-hand-point-right mr-1"></i>Geser untuk melihat lebih banyak
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Lokasi & Jam Buka</h3>
                <div class="section-divider w-24 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Kunjungi warung kami di lokasi yang strategis dan mudah dijangkau.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-map-marker-alt text-green-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Alamat</h4>
                                <p class="text-gray-600">
                                    Jl. Lenteng Agung Raya No. 43<br>
                                    Jagakarsa, Jakarta Selatan<br>
                                    Dekat dengan Stasiun Tanjung Barat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-clock text-green-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Jam Buka</h4>
                                <p class="text-gray-600">
                                    Setiap Hari<br>
                                    07.00 - 16.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-car text-green-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Parkir</h4>
                                <p class="text-gray-600">
                                    Area parkir memadai<br>
                                    (Bisa ramai di jam sibuk)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Embed Google Maps -->
                <div class="rounded-lg overflow-hidden shadow-lg h-96">
                    <div class="rounded-lg overflow-hidden shadow-lg h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.040705312623!2d106.8374929!3d-6.3052701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc22820f0c7%3A0x3cd2ea329894474b!2sSOTO%20WONG%20BOYOLALI%20PAK%20ASLI%20NUR%20RAMBO!5e0!3m2!1sid!2sid!4v1717420457812!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h3>
                <div class="section-divider w-24 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ada pertanyaan atau ingin memberikan masukan? Jangan ragu untuk menghubungi kami.
                </p>
            </div>
            <div class="max-w-2xl mx-auto">
                <form class="bg-gray-50 p-8 rounded-lg shadow-lg space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" placeholder="Nama Lengkap" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <input type="text" placeholder="Subjek"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    <div>
                        <textarea placeholder="Pesan Anda" rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-green-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-600 transition duration-300 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-bowl-hot text-2xl text-green-500"></i>
                        <span class="text-xl font-bold">Soto Boyolali Pak Rambo</span>
                    </div>
                    <p class="text-gray-400">
                        Warung soto legendaris dengan cita rasa autentik khas Boyolali
                        di jantung Jakarta Selatan.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Jl. Lenteng Agung Raya No. 43</p>
                        <p><i class="fas fa-clock mr-2"></i>07.00 - 16.00 WIB</p>
                        <p><i class="fas fa-star mr-2"></i>Rating 4.5/5</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Menu Favorit</h4>
                    <div class="space-y-2 text-gray-400">
                        <p>Soto Ayam Kampung</p>
                        <p>Soto Daging Sapi</p>
                        <p>Sate Daging Sapi</p>
                        <p>Berbagai Lauk Pendamping</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Soto Boyolali Pak Rambo. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

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
