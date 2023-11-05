<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-[100%] pt-[200px] text-center">
        <h1 class="text-center text-3xl font-bold mb-8">Data Mahasiswa</h1>
        <div class="border mt-10 flex flex-col justify-center">
            <form action="{{ url('mahasiswa') }}" method="POST">
                @csrf
                <div class="p-4 flex justify-center">
                    <label for="nama" class="text-xl">NAMA : </label>
                    <input type="text" name="nama" id="nama" placeholder="masukan nama" class="px-4 py-2 border border-gray-400 rounded-2xl ml-8" required>
                </div>
                <div class="p-">
                    <label for="nim" class="text-xl">NIM : </label>
                    <input type="text" name="nim" id="nim" placeholder="masukan nim" class="px-4 py-2 border border-gray-400 rounded-2xl ml-10" required>
                </div>
                <div class="p-4">
                    <label for="alamat" class="text-xl">ALAMAT : </label>
                    <input type="text" name="alamat" id="alamat" placeholder="masukan alamat" class="px-4 py-2 border border-gray-400 rounded-2xl" required>
                </div>
                <button type="submit" class="px-4 py-2 bg-green-500 rounded-2xl">Tambah Data</button>
            </form>
        </div>
    </section>
</body>
</html>