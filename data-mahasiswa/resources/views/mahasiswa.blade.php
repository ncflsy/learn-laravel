<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <section class="mahasiswa pt-[100px]">
        <h1 class="text-3xl pb-[20px]  text-center">Data Mahasiswa</h1>
        
        <div class="flex flex-col justify-center">
            <button class="mb-2">
                <a href="mahasiswa/create" class=" bg-blue-800 px-4 py-2 rounded-lg text-white">
                    Tambah Data
                </a>
            </button>
            <table class="max-w-[1000px] mx-auto">
                <thead>
                    <tr>
                        <td class="border bg-green-500 border-black w-[200px] px-4 py-1">ID</td>
                        <td class="border bg-green-500 border-black w-[200px] px-4 py-1">Nama</td>
                        <td class="border bg-green-500 border-black w-[200px] px-4 py-1">NIM</td>
                        <td class="border bg-green-500 border-black w-[200px] px-4 py-1">Alamat</td>
                        <td class="border bg-green-500 border-black w-[200px] px-4 py-1">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)    
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $item->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $item->nama }}</td>
                            <td class="px-4 py-2 border-b">{{ $item->nim }}</td>
                            <td class="px-4 py-2 border-b">{{ $item->alamat }}</td>
                            <td class="px-4 py-2 border-b flex gap-2">
                                <a href="{{url('mahasiswa/'.$item->id).'/edit'}}" class="bg-blue-500 px-4 py-1 rounded">Edit</a>
                                <form action="{{url('mahasiswa/'.$item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="bg-blue-500 px-4 py-1 rounded">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>