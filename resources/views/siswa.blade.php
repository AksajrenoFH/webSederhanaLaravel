<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - {{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        nav {
            backdrop-filter: blur(8px);
            background-color: rgba(67, 178, 172, 0.80);
        }

        li a {
            position: relative;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            font-size: calc(12px * 1.618);
        }

        li a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: white;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: all 0.3s ease-in-out;
            visibility: hidden;
        }

        li a:hover::before {
            transform: scaleX(1);
            visibility: visible;
        }

        li a:hover {
            color: white;
        }
    </style>
</head>
<body class="bg-teal-100">

    <nav class="p-5 h-16 fixed w-full flex items-center z-10">
        <div class="container mx-auto">
            <ul class="flex space-x-4 items-center justify-evenly gap-5">
                <li><a href="home">Home</a></li>
                <li><a href="siswa">Siswa</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="banner h-48 bg-teal-50 flex items-center justify-center w-full pt-16">
        <h1 class="text-5xl font-medium">{{ $judul }}</h1>
    </div>

    <div class="container mx-auto mt-10 p-5">
        <h2 class="text-3xl font-medium mb-5 text-center">{{ $judulTabel }}</h2>
        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="w-full text-md text-left text-gray-700">
                <thead class="text-xs text-white uppercase bg-teal-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Kelas</th>
                        <th scope="col" class="px-6 py-3">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $s)
                    <tr class="bg-white border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-6 py-3">{{ $no++ }}</td>
                        <td class="px-6 py-3">{{ $s['id'] }}</td>
                        <td class="px-6 py-3">{{ $s['nama'] }}</td>
                        <td class="px-6 py-3">{{ $s['kelas'] }}</td>
                        <td class="px-6 py-3">{{ $s['alamat'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
