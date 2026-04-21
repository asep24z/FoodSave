<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodSave - Beli Makanan Lebih Mudah & Hemat</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</head>
<body class="font-['Outfit'] antialiased bg-gray-50 text-gray-800 overflow-x-hidden selection:bg-orange-500 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/70 backdrop-blur-md border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-red-500 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-orange-500/30">
                        FS
                    </div>
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-red-600">
                        FoodSave
                    </span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fitur" class="text-gray-600 hover:text-orange-500 transition-colors font-medium">Fitur</a>
                    <a href="#cara-kerja" class="text-gray-600 hover:text-orange-500 transition-colors font-medium">Cara Kerja</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 bg-orange-50 text-orange-600 font-semibold rounded-full hover:bg-orange-100 transition-all">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-orange-500 font-medium transition-colors">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-semibold rounded-full shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 transition-all transform hover:-translate-y-0.5">Daftar Sekarang</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-red-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-40 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-left space-y-8">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-orange-50 border border-orange-100 text-orange-600 font-medium text-sm">
                        <span class="flex h-2 w-2 rounded-full bg-orange-500 mr-2"></span>
                        Aplikasi Beli Makanan Sisa Terbaik
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight text-gray-900">
                        Selamatkan <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-500">Makanan</span>,<br> Hemat Uangmu.
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                        FoodSave membantu kamu membeli makanan yang belum terjual dengan harga miring langsung dari resto terdekat. Praktis, murah, dan mencegah food waste!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button class="px-8 py-4 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full font-semibold text-lg shadow-xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                            Mulai Pesan
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                    <div class="pt-8 flex items-center gap-6">
                        <div class="flex -space-x-4">
                            <img class="w-12 h-12 rounded-full border-4 border-white" src="https://ui-avatars.com/api/?name=Andi+B&background=random" alt="User">
                            <img class="w-12 h-12 rounded-full border-4 border-white" src="https://ui-avatars.com/api/?name=Siti+N&background=random" alt="User">
                            <img class="w-12 h-12 rounded-full border-4 border-white" src="https://ui-avatars.com/api/?name=Budi+P&background=random" alt="User">
                            <div class="w-12 h-12 rounded-full border-4 border-white bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-600 relative z-30">10k+</div>
                        </div>
                        <p class="text-sm text-gray-500 font-medium">Dipercaya oleh<br><span class="text-gray-900 font-bold">10,000+ pengguna</span></p>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <!-- Glassmorphism Card 1 -->
                    <div class="absolute top-10 -left-10 bg-white/70 backdrop-blur-xl border border-white/50 p-6 rounded-2xl shadow-xl shadow-gray-200/50 z-20 animate-[bounce_4s_infinite]">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-2xl">🥗</div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Salad Sehat</p>
                                <p class="text-xs text-green-600 font-semibold">Terselamatkan!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Glassmorphism Card 2 -->
                    <div class="absolute bottom-20 -right-10 bg-white/70 backdrop-blur-xl border border-white/50 p-6 rounded-2xl shadow-xl shadow-gray-200/50 z-20 animate-[bounce_5s_infinite]">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-2xl">🍕</div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Pizza Diskon 50%</p>
                                <p class="text-xs text-orange-500 font-semibold">Tinggal 2 porsi</p>
                            </div>
                        </div>
                    </div>
                    <!-- Main Hero Image -->
                    <div class="relative rounded-[2.5rem] overflow-hidden border-[8px] border-white/80 backdrop-blur-sm shadow-2xl z-10 transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1000&auto=format&fit=crop" alt="Food on a table" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <span class="px-3 py-1 bg-red-500 text-white text-xs font-bold rounded-full mb-3 inline-block">Best Seller</span>
                            <h3 class="text-2xl font-bold text-white mb-1">Paket Kenyang Spesial</h3>
                            <p class="text-gray-300 text-sm">Tersedia di resto favoritmu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-orange-500 font-semibold tracking-wider uppercase text-sm mb-3">Kenapa FoodSave?</h2>
                <h3 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Keuntungan Menggunakan FoodSave</h3>
                <p class="text-gray-600 text-lg">Platform terbaik untuk penuhi hasrat kuliner kamu tanpa membuat kantong kering, sekaligus menjaga lingkungan.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100 hover:shadow-xl hover:shadow-orange-100 hover:border-orange-200 transition-all group">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-8 h-8 text-orange-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Hemat Hingga 70%</h4>
                    <p class="text-gray-600 leading-relaxed">Nikmati makanan dari restoran favoritmu dengan harga jauh lebih murah karena kamu membelinya di jam sebelum tutup.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-8 bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 transform md:-translate-y-4">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Selamatkan Bumi</h4>
                    <p class="text-gray-600 leading-relaxed">Dengan mencegah makanan terbuang sia-sia, kamu turut campur dalam mengurangi jejak karbon global demi keberlangsungan bumi.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100 hover:shadow-xl hover:shadow-orange-100 hover:border-orange-200 transition-all group">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-yellow-500 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-8 h-8 text-yellow-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Pesan & Ambil Mudah</h4>
                    <p class="text-gray-600 leading-relaxed">Pesan hanya dengan beberapa klik di aplikasi, dapatkan bukti pembayaran dan tunjukkan ke kasir resto langsung tanpa ribet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 pt-16 pb-8 text-gray-300 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center text-white font-bold text-lg">FS</div>
                    <span class="text-3xl font-bold text-white">FoodSave</span>
                </div>
                <div class="text-gray-400 text-center md:text-right">
                    <p>&copy; {{ date('Y') }} FoodSave. Menyelamatkan makanan, satu kotak ajaib pada satu waktu.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
