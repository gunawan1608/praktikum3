<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD 1 - Update</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="text-center">
        <h1 class="mt-5 text-5xl font-extrabold dark:text-white">Update Data Lembur</h1>
    </div>
    <br><br>

    @foreach ($lembur as $l)
        <form class="max-w-sm mx-auto" action="/lembur/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $l->id }}">
            <div class="mb-5">
                <label for="id_pegawai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Pegawai</label>
                <input type="number" name="id_pegawai" id="id_pegawai"
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                    placeholder="" required value="{{ $l->Pegawai_id }}"/>
            </div>
            <div class="mb-5">
                <label for="bulan_lembur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan Lembur</label>
                <input type="date" name="bulan_lembur" id="bulan_lembur"
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                    placeholder="" required value="{{ $l->Bulan_lembur }}"/>
            </div>
            <div class="mb-5">
                <label for="jlembur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Lembur</label>
                <input type="number" name="jlembur" id="jlembur"
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                    placeholder="" required value="{{ $l->Jumlah_lembur }}"/>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="tambah data">Tambahkan Data</button>
        </form>
    @endforeach
</body>
</html>