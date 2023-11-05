<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-[100%] h-[100vh]">
        <div class="flex justify-center mt-[100px]">
            <table>
                <thead>
                    <tr>
                        <td class="w-[180px] px-4 py-1 bg-green-700 text-white border border-gray-300 text-center">ID</td>
                        <td class="w-[180px] px-4 py-1 bg-green-700 text-white border border-gray-300 text-center">NAMA</td>
                        <td class="w-[180px] px-4 py-1 bg-green-700 text-white border border-gray-300 text-center">PRODI</td>
                        <td class="w-[180px] px-4 py-1 bg-green-700 text-white border border-gray-300 text-center">ALAMAT</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w-[180px] px-2 text-gray-600  py-1 border border-gray-300 ">ID</td>
                        <td class="w-[180px] px-2 text-gray-600  py-1 border border-gray-300 ">NAMA</td>
                        <td class="w-[180px] px-2 text-gray-600  py-1 border border-gray-300 ">PRODI</td>
                        <td class="w-[180px] px-2 text-gray-600  py-1 border border-gray-300 ">ALAMAT</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>