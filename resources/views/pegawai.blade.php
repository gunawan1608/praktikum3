<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD 1 - Read</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 min-h-screen">
    <nav class="bg-white border-b border-slate-200 shadow-sm sticky top-0 z-50">
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
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="pegawai"
                            class="block py-2.5 px-4 text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl shadow-sm font-semibold">Pegawai</a>
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

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-2">Data Pegawai</h1>
                    <p class="text-slate-600">Kelola informasi lengkap data karyawan perusahaan</p>
                </div>
                <a href="pegawai/tambah" class="inline-flex items-center">
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        Tambah Data Pegawai
                    </button>
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm font-medium">Total Pegawai</p>
                        <p class="text-3xl font-bold">{{ $pegawai ? $pegawai->count() : 0 }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-400 bg-opacity-20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zM4 18v-4h3v4h2v-7.5c0-.83.67-1.5 1.5-1.5S12 9.67 12 10.5V11h2.5c.83 0 1.5.67 1.5 1.5V18h2v-6.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V18h2v-6.5c0-1.38-1.12-2.5-2.5-2.5H18c-1.38 0-2.5 1.12-2.5 2.5V18H4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm font-medium">Departemen</p>
                        <p class="text-3xl font-bold">{{ $pegawai ? $pegawai->pluck('jabatan')->unique()->count() : 0 }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-400 bg-opacity-20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm font-medium">Rata-rata Usia</p>
                        <p class="text-3xl font-bold">{{ $pegawai && $pegawai->count() > 0 ? round($pegawai->avg('umur'), 0) : 0 }} Th</p>
                    </div>
                    <div class="w-12 h-12 bg-green-400 bg-opacity-20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-slate-50 to-slate-100">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                ID Pegawai
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Jabatan
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Umur
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($pegawai as $p)
                            <tr class="hover:bg-slate-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white text-xs font-bold">{{ substr($p->id, -2) }}</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900">{{ $p->id }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 flex items-center justify-center shadow-lg">
                                                <span class="text-white font-bold text-lg">{{ substr($p->nama, 0, 1) }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-slate-900">{{ $p->nama }}</div>
                                            <div class="text-sm text-slate-500">Karyawan ID: {{ $p->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $jabatan = strtolower($p->jabatan);
                                        if(str_contains($jabatan, 'manager') || str_contains($jabatan, 'direktur')) {
                                            $jabatanClass = 'bg-purple-100 text-purple-800 border-purple-200';
                                        } elseif(str_contains($jabatan, 'staff') || str_contains($jabatan, 'karyawan')) {
                                            $jabatanClass = 'bg-blue-100 text-blue-800 border-blue-200';
                                        } elseif(str_contains($jabatan, 'supervisor') || str_contains($jabatan, 'koordinator')) {
                                            $jabatanClass = 'bg-green-100 text-green-800 border-green-200';
                                        } else {
                                            $jabatanClass = 'bg-slate-100 text-slate-800 border-slate-200';
                                        }
                                    @endphp
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-xl text-sm font-medium border {{ $jabatanClass }}">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10 2 10 2 10 2 10 2 10 2s0 0 0 0c-1.66 0-3 1.34-3 3 0 .35.07.69.18 1H5c-1.1 0-2 .9-2 2v1c0 .55.45 1 1 1h1v10c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V10h1c.55 0 1-.45 1-1V8c0-1.1-.9-2-2-2z"/>
                                        </svg>
                                        {{ $p->jabatan }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        if($p->umur < 30) {
                                            $umurClass = 'bg-green-100 text-green-800';
                                        } elseif($p->umur < 45) {
                                            $umurClass = 'bg-blue-100 text-blue-800';
                                        } else {
                                            $umurClass = 'bg-orange-100 text-orange-800';
                                        }
                                    @endphp
                                    <div class="flex items-center">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-xl text-sm font-medium {{ $umurClass }}">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m-6 0h6M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2h-2"></path>
                                            </svg>
                                            {{ $p->umur }} tahun
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-slate-900 max-w-xs">
                                        <div class="flex items-start">
                                            <svg class="w-4 h-4 text-slate-400 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span class="text-slate-600 leading-relaxed">{{ $p->alamat }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex items-center space-x-2">
                                        <a href="/pegawai/edit/{{ $p->id }}"
                                            class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 transition-all duration-150 transform hover:scale-105">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a href="/pegawai/hapus/{{ $p->id }}"
                                            class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-red-700 bg-red-100 rounded-lg hover:bg-red-200 transition-all duration-150 transform hover:scale-105">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Empty state if no data -->
            @if($pegawai->isEmpty())
            <div class="text-center py-12">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-slate-100 to-slate-200 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-slate-900 mb-2">Belum ada data pegawai</h3>
                <p class="text-slate-500 mb-6">Mulai tambahkan data pegawai untuk mengelola informasi karyawan</p>
                <a href="pegawai/tambah">
                    <button class="inline-flex items-center px-6 py-3 text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 rounded-xl font-medium shadow-lg transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Pegawai Pertama
                    </button>
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="text-center">
                <span class="text-sm text-slate-500">© 2025 <a href="https://flowbite.com/" class="text-blue-600 hover:text-blue-800 font-medium">P4</a>. All Rights Reserved.</span>
            </div>
        </div>
    </footer>
</body>
@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil! 🎉',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            position: 'center',
            toast: false,
            backdrop: `
                rgba(0,0,0,0.4)
                left top
                no-repeat
            `,
            customClass: {
                popup: 'animated bounceIn',
                title: 'swal-title',
                content: 'swal-content'
            },
            showClass: {
                popup: 'animate__animated animate__fadeInUp animate__faster'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutDown animate__faster'
            },
            didOpen: (popup) => {
                // Tambahkan efek pulse pada icon
                const icon = popup.querySelector('.swal2-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1)';
                    icon.style.transition = 'all 0.3s ease';

                    setTimeout(() => {
                        icon.style.transform = 'scale(1)';
                    }, 300);
                }

                // Tambahkan efek typing pada text
                const content = popup.querySelector('.swal2-html-container');
                if (content) {
                    content.style.opacity = '0';
                    content.style.transform = 'translateY(10px)';
                    content.style.transition = 'all 0.5s ease';

                    setTimeout(() => {
                        content.style.opacity = '1';
                        content.style.transform = 'translateY(0)';
                    }, 200);
                }
            },
            willClose: () => {
                // Efek fade out yang smooth
                const popup = Swal.getPopup();
                popup.style.transform = 'scale(0.9)';
                popup.style.opacity = '0';
                popup.style.transition = 'all 0.3s ease';
            }
        });

        // Tambahkan style dinamis
        const style = document.createElement('style');
        style.innerHTML = `
            .swal2-popup {
                border-radius: 20px !important;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15) !important;
                backdrop-filter: blur(10px) !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
            }

            .swal2-icon.swal2-success {
                border-color: #10b981 !important;
                color: #10b981 !important;
            }

            .swal2-icon.swal2-success [class^='swal2-success-line'] {
                background-color: #10b981 !important;
            }

            .swal2-icon.swal2-success .swal2-success-ring {
                border-color: #10b981 !important;
            }

            .swal2-title {
                font-size: 24px !important;
                font-weight: 600 !important;
                color: #1f2937 !important;
                margin-bottom: 10px !important;
            }

            .swal2-html-container {
                font-size: 16px !important;
                color: #6b7280 !important;
                line-height: 1.5 !important;
            }

            .swal2-timer-progress-bar {
                background: linear-gradient(90deg, #10b981, #059669) !important;
                height: 4px !important;
            }

            .swal2-popup.swal2-toast {
                border-radius: 12px !important;
            }
        `;
        document.head.appendChild(style);
    </script>
@endif
</html>
