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
    <section id="mahasiswa-section">
         <div class="w-[100%] h-[100vh] flex justify-center items-center flex-col">
            <h1 class="text-center text-3xl font-bold mb-8">Data Mahasiswa</h1>
            <div class="flex w-[900px] mb-4"> 
                <a href="{{url('mahasiswa/create')}}" class="px-8 py-1 bg-green-600 text-white rounded-3xl">Tambah</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td class="w-[180px] px-4 py-1 font-bold bg-indigo-700 text-white text-center">ID</td>
                        <td class="w-[180px] px-4 py-1 font-bold bg-indigo-700 text-white text-center">NAMA</td>
                        <td class="w-[180px] px-4 py-1 font-bold bg-indigo-700 text-white text-center">NIM</td>
                        <td class="w-[180px] px-4 py-1 font-bold bg-indigo-700 text-white text-center">ALAMAT</td>
                        <td class="w-[180px] px-4 py-1 font-bold bg-indigo-700 text-white text-center">AKSI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)   
                    <tr>
                        <td class="px-4 py-2 border border-b">{{ $item->id }}</td>
                        <td class="px-4 py-2 border border-b">{{ $item->nama }}</td>
                        <td class="px-4 py-2 border border-b">{{ $item->nim }}</td>
                        <td class="px-4 py-2 border border-b">{{ $item->alamat }}</td>
                        <td class="px-4 py-2 border border-b flex gap-2">
                            <a href="{{url('mahasiswa/'.$item->id.'/edit')}}" class="px-4 py-1 bg-blue-500 rounded-xl text-white">Edit</a>
                            <form action="{{ url('mahasiswa/'.$item->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-1 bg-red-500 rounded-xl text-white">Delete</button>
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