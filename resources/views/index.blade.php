<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel P4 - Employee Management System</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-200/50 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://www.pngmart.com/files/23/Berserk-Logo-PNG-HD.png" class="h-9" alt="Logo" />
                <span class="self-center text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Laravel - P4</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-500 rounded-xl md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-slate-100 rounded-2xl bg-slate-50 md:flex-row md:space-x-2 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="/"
                            class="block py-2.5 px-4 text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl shadow-sm font-semibold"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="pegawai"
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200">Pegawai</a>
                    </li>
                    <li>
                        <a href="golongan"
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200">Golongan</a>
                    </li>
                    <li>
                        <a href="gaji"
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200">Gaji</a>
                    </li>
                    <li>
                        <a href="lembur"
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200">Lembur</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-0 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Main heading -->
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-slate-900 mb-6 leading-tight">
                    <span class="block">Employee</span>
                    <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">
                        Management
                    </span>
                    <span class="block">System</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl sm:text-2xl text-slate-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Kelola data pegawai, golongan, gaji, dan lembur dengan sistem yang modern dan terintegrasi
                </p>

                <!-- CTA buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <a href="pegawai"
                        class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 group">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Sekarang
                    </a>
                    <a href="#features"
                        class="inline-flex items-center px-8 py-4 text-lg font-semibold text-slate-700 bg-white hover:bg-slate-50 rounded-2xl shadow-lg hover:shadow-xl border border-slate-200 transition-all duration-300 transform hover:-translate-y-1">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-slate-900 mb-4">Fitur Unggulan</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Sistem manajemen yang lengkap untuk kebutuhan administrasi perusahaan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pegawai Card -->
                <a href="pegawai" class="group">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Data Pegawai</h3>
                        <p class="text-slate-600 mb-4">Kelola informasi lengkap pegawai termasuk data personal dan jabatan</p>
                        <div class="flex items-center text-blue-600 font-medium group-hover:text-blue-700">
                            Kelola Data
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Golongan Card -->
                <a href="golongan" class="group">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Golongan</h3>
                        <p class="text-slate-600 mb-4">Atur klasifikasi golongan dengan struktur gaji dan tunjangan</p>
                        <div class="flex items-center text-purple-600 font-medium group-hover:text-purple-700">
                            Kelola Data
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Gaji Card -->
                <a href="gaji" class="group">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Gaji</h3>
                        <p class="text-slate-600 mb-4">Hitung dan kelola penggajian dengan sistem yang akurat</p>
                        <div class="flex items-center text-green-600 font-medium group-hover:text-green-700">
                            Kelola Data
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Lembur Card -->
                <a href="lembur" class="group">
                    <div class="bg-gradient-to-br from-orange-50 to-red-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Lembur</h3>
                        <p class="text-slate-600 mb-4">Catat dan hitung jam lembur karyawan secara detail</p>
                        <div class="flex items-center text-orange-600 font-medium group-hover:text-orange-700">
                            Kelola Data
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center items-center mb-4">
                    <img src="https://www.pngmart.com/files/23/Berserk-Logo-PNG-HD.png" class="h-8 mr-3" alt="Logo" />
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Laravel - P4</span>
                </div>
                <p class="text-slate-400 mb-6">Sistem manajemen pegawai yang modern dan terintegrasi</p>
                <div class="border-t border-slate-700 pt-6">
                    <span class="text-sm text-slate-400">© 2025 <a href="https://flowbite.com/" class="text-blue-400 hover:text-blue-300 font-medium transition-colors duration-200">P4</a>. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>