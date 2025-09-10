<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD 1 - insert</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="text-center">
        <h1 class="mt-5 text-5xl font-extrabold dark:text-white">Tambah Data Golongan</h1>
    </div>
    <br><br>

    <form class="max-w-sm mx-auto" action="/golongan/store" method="POST">
        @csrf
        <div class="mb-5">
            <label for="namagol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Golongan</label>
            <input type="text" name="namagol" id="namagol"
                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="gaji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji Pokok</label>
            <input type="number" name="gaji" id="gaji"
                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                placeholder="" required min="0"/>
        </div>
        <div class="mb-5">
            <label for="tkeluarga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tunjangan Keluarga</label>
            <input type="number" name="tkeluarga" id="tkeluarga"
                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                placeholder="" required min="0"/>
        </div>
        <div class="mb-5">
            <label for="ttransport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tunjangan Transport</label>
            <input type="number" name="ttransport" id="ttransport"
                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                placeholder="" required min="0"/>
        </div>
        <div class="mb-5">
            <label for="tmakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tunjangan Makan</label>
            <input type="number" name="tmakan" id="tmakan"
                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                placeholder="" required min="0"/>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="tambah data">Tambahkan Data</button>
    </form>

</body>

</html>
