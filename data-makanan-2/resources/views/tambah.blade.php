<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-[100%] h-[100vh] flex flex-col justify-center items-center">
        <div>
            <h1 class="text-center text-3xl font-semibold mb-4">Form Input Data Makanan</h1>
            <form action="{{ url('makanan') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col">
                    <label for="nama" class="ps-2">Nama Makanan: </label>
                    <input type="text" name="nama" id="nama" class="px-4 py-1 border rounded-xl" placeholder="masukan nama makanan">
                </div>
                <div class="flex flex-col">
                    <label for="kategori" class="ps-2">Kategori Makanan: </label>
                    <input type="text" name="kategori" id="kategori" class="px-4 py-1 border rounded-xl" placeholder="masukan kategori makanan">
                </div>
                <div class="flex flex-col">
                    <label for="keterangan" class="ps-2">Keterangan Makanan: </label>
                    <input type="text" name="keterangan" id="keterangan" class="px-4 py-1 border rounded-xl" placeholder="masukan nama makanan">
                </div>
                <div class="flex flex-col">
                    <label for="harga" class="ps-2">Harga Makanan: </label>
                    <input type="text" name="harga" id="harga" class="px-4 py-1 border rounded-xl" placeholder="masukan harga makanan">
                </div>
                <button class="px-4 py-2 bg-green-800 text-white rounded-2xl">Tambah</button>
            </form>
        </div>
    </section>
</body>
</html>