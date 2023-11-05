<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-full h-[100vh] flex justify-center text-center items-center">
        <div class="w-[1000px] border h-[500px]">
            <form action='{{ url('mahasiswa/'.$data->id) }}' method="post">
                @csrf
                @method('PUT')
                <div class="mt-[50px]">
                    <label for="" class="text-lg">Nama : </label>
                    <input type="text" name="nama" placeholder="masukan nama anda" class="px-4 py-2 border rounded-lg" required value="{{$data->nama}}">
                </div>
                <div class="mt-[50px]">
                    <label for="" class="text-lg">NIM : </label>
                    <input type="text" name="nim" placeholder="masukan nim anda" class="px-4 py-2 border rounded-lg" required value="{{$data->nim}}">
                </div>
                <div class="mt-[50px]">
                    <label for="" class="text-lg">Alamat : </label>
                    <input type="text" name="alamat" placeholder="masukan alamat anda" class="px-4 py-2 border rounded-lg" required value="{{$data->alamat}}">
                </div>
               <button type="submit" class="px-4 py-2 rounded-lg bg-blue-400">Tambah</button>
            </form>
        </div>
    </section>
</body>
</html>