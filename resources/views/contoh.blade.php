<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soto Boyolali Pak Rambo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        }
        
        .soto-image {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDMwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjE1MCIgcj0iMTQ1IiBmaWxsPSJ3aGl0ZSIgc3Ryb2tlPSIjZTVlN2ViIiBzdHJva2Utd2lkdGg9IjEwIi8+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjE1MCIgcj0iMTIwIiBmaWxsPSIjZjNmNGY2Ii8+CjwhLS0gQnJvdGggLS0+CjxlbGxpcHNlIGN4PSIxNTAiIGN5PSIxNzAiIHJ4PSIxMDAiIHJ5PSI4MCIgZmlsbD0iI2ZmZjJlMCIvPgo8IS0tIE1lYXQgcGllY2VzIC0tPgo8Y2lyY2xlIGN4PSIxMjAiIGN5PSIxNDAiIHI9IjE1IiBmaWxsPSIjOTMzMzEzIi8+CjxjaXJjbGUgY3g9IjE4MCIgY3k9IjE2MCIgcj0iMTIiIGZpbGw9IiM5MzMzMTMiLz4KPGVsbGlwc2UgY3g9IjE2MCIgY3k9IjE0MCIgcng9IjIwIiByeT0iMTAiIGZpbGw9IiM5MzMzMTMiLz4KPGVsbGlwc2UgY3g9IjE0MCIgY3k9IjE3MCIgcng9IjE4IiByeT0iOCIgZmlsbD0iIzkzMzMxMyIvPgo8IS0tIE5vb2RsZXMgLS0+CjxwYXRoIGQ9Ik0xMDAgMTkwUTEyMCAxODAgMTQwIDE5MFExNjAgMjAwIDE4MCAzOTBRMjAwIDE4MCAyMjAgMTkwIiBzdHJva2U9IiNmZmVjYjMiIHN0cm9rZS13aWR0aD0iMyIgZmlsbD0ibm9uZSIvPgo8cGF0aCBkPSJNMTEwIDIwMFExMzAgMTkwIDE1MCAyMDBRMTcwIDIxMCAxOTAgMjAwUTIxMCAxOTAgMjMwIDIwMCIgc3Ryb2tlPSIjZmZlY2IzIiBzdHJva2Utd2lkdGg9IjMiIGZpbGw9Im5vbmUiLz4KPCEtLSBWZWdldGFibGVzIC0tPgo8Y2lyY2xlIGN4PSIxMzAiIGN5PSIxNjAiIHI9IjYiIGZpbGw9IiNmOTI1MjUiLz4KPGVsbGlwc2UgY3g9IjE3MCIgY3k9IjE4MCIgcng9IjgiIHJ5PSI1IiBmaWxsPSIjMjJjNTVlIi8+CjxjaXJjbGUgY3g9IjE0NSIgY3k9IjE5NSIgcj0iNCIgZmlsbD0iI2Y5MjUyNSIvPgo8L3N2Zz4=');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <section id="home" class="hero-gradient min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-white space-y-6">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        SOTO BOYOLALI<br>
                        <span class="text-yellow-200">PAK RAMBO</span>
                    </h1>
                    <p class="text-xl lg:text-2xl opacity-90 leading-relaxed max-w-lg">
                        Nikmati kelezatan soto khas Boyolali yang autentik dengan cita rasa legendaris yang tak pernah berubah.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="#menu" class="bg-white text-orange-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-50 transition duration-300 shadow-xl flex items-center justify-center">
                            <i class="fas fa-utensils mr-3"></i>Lihat Menu
                        </a>
                        <a href="#location" class="border-3 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-orange-600 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-map-marker-alt mr-3"></i>Lokasi Kami
                        </a>
                    </div>
                </div>
                
                <!-- Soto Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative float-animation">
                        <!-- Bowl Shadow -->
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-64 h-8 bg-black bg-opacity-20 rounded-full blur-md"></div>
                        
                        <!-- Main Bowl -->
                        <div class="w-80 h-80 bg-white rounded-full shadow-2xl relative overflow-hidden border-8 border-white">
                            <!-- Broth -->
                            <div class="absolute inset-4 bg-gradient-to-b from-yellow-100 to-yellow-200 rounded-full">
                                <!-- Noodles -->
                                <div class="absolute inset-6 flex flex-col justify-center space-y-1">
                                    <div class="h-1 bg-yellow-300 rounded-full w-32 ml-8 opacity-70"></div>
                                    <div class="h-1 bg-yellow-300 rounded-full w-28 ml-12 opacity-70"></div>
                                    <div class="h-1 bg-yellow-300 rounded-full w-36 ml-6 opacity-70"></div>
                                    <div class="h-1 bg-yellow-300 rounded-full w-30 ml-10 opacity-70"></div>
                                </div>
                                
                                <!-- Meat pieces -->
                                <div class="absolute top-12 left-16 w-8 h-6 bg-amber-800 rounded-lg shadow-sm"></div>
                                <div class="absolute top-20 right-16 w-6 h-6 bg-amber-900 rounded-full shadow-sm"></div>
                                <div class="absolute bottom-20 left-20 w-10 h-5 bg-amber-800 rounded-lg shadow-sm"></div>
                                
                                <!-- Vegetables -->
                                <div class="absolute top-16 right-20 w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="absolute bottom-16 right-24 w-4 h-2 bg-green-500 rounded-full"></div>
                                <div class="absolute bottom-24 left-24 w-2 h-2 bg-red-400 rounded-full"></div>
                                
                                <!-- Bean sprouts -->
                                <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2">
                                    <div class="flex space-x-1">
                                        <div class="w-1 h-6 bg-green-200 rounded-full"></div>
                                        <div class="w-1 h-5 bg-green-200 rounded-full"></div>
                                        <div class="w-1 h-7 bg-green-200 rounded-full"></div>
                                        <div class="w-1 h-4 bg-green-200 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Steam Effect -->
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                            <div class="w-2 h-12 bg-white bg-opacity-40 rounded-full animate-pulse"></div>
                        </div>
                        <div class="absolute -top-6 left-1/2 transform -translate-x-8">
                            <div class="w-1 h-8 bg-white bg-opacity-30 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                        </div>
                        <div class="absolute -top-6 left-1/2 transform translate-x-6">
                            <div class="w-1 h-10 bg-white bg-opacity-30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>