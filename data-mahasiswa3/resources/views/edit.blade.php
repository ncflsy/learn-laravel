<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section id="mahasiswa-section">
         <div class="w-[100%] h-[100vh] flex justify-center items-center flex-col">
            <h1 class="text-center text-3xl font-bold mb-8">Edit Data Mahasiswa</h1>
            <form action="{{url('mahasiswa/'.$data->id)}}" method="post" class="flex flex-col">
                @csrf
                @method('PUT')
                <div class="m-3">
                    <label for="nama" class="text-xl"> Nama :</label>
                    <input type="text" name="nama" id="nama" placeholder="masukan nama" class="px-4 py-1 border bg-slate-100 rounded-xl" value="{{ $data->nama }}">
                </div>
                <div class="m-3">
                    <label for="nama" class="text-xl"> NIM :</label>
                    <input type="text" name="nim" id="nim" placeholder="masukan nama" class="px-4 py-1 border bg-slate-100 rounded-xl" value="{{ $data->nim }}">
                </div>
                <div class="m-3">
                    <label for="nama" class="text-xl"> Alamat :</label>
                    <input type="text" name="alamat" id="alamat"  placeholder="masukan nama" class="px-4 py-1 border bg-slate-100 rounded-xl" value="{{ $data->alamat }}">
                </div>
                <button type="submit" class="px-4 py-2 bg-green-800 rounded-xl text-white">Edit</button>
            </form>
        </div>
    </section>
</body>
</html>