<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Makanan</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section id="makanan" class="w-[100%]flex justify-center items-center border border-black">
        <div class="daftar flex justify-center flex-col px-[300px]">
            <h1 class="text-3xl text-center">Daftar Makanan</h1>
            <div id="formAction" class="flex justify-between">
                <form action="{{ url('makanan') }}" method="GET" id="formSelect">
                    @csrf
                    <label for="filter">Filter Menu : </label>
                    <select name="kategori" id="kategori" class="border px-4 py-1 rounded-md bg-indigo-500 text-white" onchange="submitForm()">
                        <option value="" {{ isset($kategori) && $kategori === 'semua' ? 'selected':' ' }}>semua</option>
                        <option value="makanan" {{ isset($kategori) && $kategori === 'makanan' ? 'selected' : '' }}>makanan</option>
                        <option value="minuman" {{ isset($kategori) && $kategori === 'minuman' ? 'selected' : '' }}>minuman</option>
                    </select>
                </form>
                <div class="flex gap-4">
                    <a href="{{url('makanan/create')}}" class="px-4 py-1 bg-green-600 text-white rounded-lg">Tambah</a>
                    <form action="{{ url('makanan') }}" method="GET" id="formSearch">
                        @csrf
                        <input type="text" name="search" placeholder="Cari menu.." class="border px-4 py-1 rounded-lg" value="{{ isset($search) ? $search :'' }}">
                        <button type="submit" class="bg-indigo-500 text-white px-4 py-1 rounded-lg"> Cari </button>
                    </form>
                </div>
               
            </div>
            <div id="kumpulan-card" class="flex gap-10 flex-wrap justify-center mx-auto mt-10">
                @foreach ($data as $item)
                <div class="card border w-[200px] text-center px-4 py-2 rounded-lg">
                    <h3 class="mb-[15px] font-semibold text-xl {{ $item->kategori === 'makanan' ? 'text-red-600': 'text-green-600' }}">{{ $item->nama }}</h3>
                    <div class="flex gap-[15px] items-center ">
                        @svg('bi-star-fill') 4,1
                    </div>
                    <p class="text-justify">{{ $item->keterangan }}</p>
                    <p class="mt-[20px] text-lg">Rp {{ $item->harga }}</p>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
</body>
</html>
<script>
    function submitForm(){
        document.getElementById('formSelect').submit();
    }
</script>