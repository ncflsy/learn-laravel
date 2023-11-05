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
    <section class="w-[100%] h-[100vh] pt-[200px] text-center">
        <h1 class="text-center text-3xl font-bold mb-8">Data Mahasiswa</h1>
        <a href="{{url('mahasiswa/create')}}" class="bg-blue-600 px-4 py-2 rounded-xl text-white">Tambah Data</a>
        <div class="flex justify-center mt-4">
            <table>
                <thead>
                    <tr>
                        <td class="w-[200px] bg-green-400 border border-black px-4 py-1 text-center font-semibold">ID</td>
                        <td class="w-[200px] bg-green-400 border border-black px-4 py-1 text-center font-semibold">NAMA</td>
                        <td class="w-[200px] bg-green-400 border border-black px-4 py-1 text-center font-semibold">NIM</td>
                        <td class="w-[200px] bg-green-400 border border-black px-4 py-1 text-center font-semibold">ALAMAT</td>
                        <td class="w-[200px] bg-green-400 border border-black px-4 py-1 text-center font-semibold">AKSI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="w-[200px] px-4 py-2 border-gray-200 border-b">{{$item->id}}</td>
                        <td class="w-[200px] px-4 py-2 border-gray-200 border-b">{{$item->nama}}</td>
                        <td class="w-[200px] px-4 py-2 border-gray-200 border-b">{{$item->nim}}</td>
                        <td class="w-[200px] px-4 py-2 border-gray-200 border-b">{{$item->alamat}}</td>
                        <td class="w-[200px] px-4 py-2 border-gray-200 border-b flex gap-1 justify-center">
                            <a href="{{url('mahasiswa/'.$item->id.'/edit')}}" class="px-4 py-1 bg-blue-800 text-white rounded-xl text-sm">Edit</a>
                            <form action="{{url('mahasiswa/'.$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-1 bg-blue-800 text-white rounded-xl text-sm">Delete</button>
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