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