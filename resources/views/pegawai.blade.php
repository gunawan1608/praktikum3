<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD 1 - Read</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="text-center">
        <h1 class="mt-5 text-5xl font-extrabold dark:text-white">Data Pegawai</h1>
    </div>
    <br><br>




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID Pegawai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Umur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Opsi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$p->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$p->nama}}
                        </td>
                        <td class="px-6 py-4">
                            {{$p->jabatan}}
                        </td>
                        <td class="px-6 py-4">
                            {{$p->umur}}
                        </td>
                        <td class="px-6 py-4">
                            {{$p->alamat}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
