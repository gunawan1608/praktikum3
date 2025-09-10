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
                            class="block py-2.5 px-4 text-slate-700 rounded-xl hover:bg-slate-100 md:hover:bg-slate-100 md:border-0 md:hover:text-blue-600 transition-all duration-200">Pegawai</a>
                    </li>
                    <li>
                        <a href="golongan"
                            class="block py-2.5 px-4 text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl shadow-sm font-semibold">Golongan</a>
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
                    <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-2">Data Golongan</h1>
                    <p class="text-slate-600">Kelola kategori golongan dan struktur gaji pegawai</p>
                </div>
                <a href="golongan/tambah" class="inline-flex items-center">
                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        Tambah Data Golongan
                    </button>
                </a>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-slate-50 to-slate-100">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                ID Golongan
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Golongan Nama
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Gaji Pokok
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Tunjangan Keluarga
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Tunjangan Transport
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Tunjangan Makan
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($golongan as $g)
                            <tr class="hover:bg-slate-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white text-xs font-bold">{{ substr($g->id, -2) }}</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900">{{ $g->id }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                                                <span class="text-white font-semibold text-sm">{{ substr($g->Golongan_nama, 0, 1) }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-slate-900">{{ $g->Golongan_nama }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-semibold bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-sm">
                                        Rp {{ number_format($g->Gaji_pokok, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-800">
                                        Rp {{ number_format($g->Tunjangan_keluarga, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-purple-100 text-purple-800">
                                        Rp {{ number_format($g->Tunjangan_transport, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-orange-100 text-orange-800">
                                        Rp {{ number_format($g->Tunjangan_makan, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex items-center space-x-2">
                                        <a href="/golongan/edit/{{ $g->id }}"
                                            class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 transition-colors duration-150">
                                            Edit
                                        </a>
                                        <a href="/golongan/hapus/{{ $g->id }}"
                                            class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-red-700 bg-red-100 rounded-lg hover:bg-red-200 transition-colors duration-150">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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