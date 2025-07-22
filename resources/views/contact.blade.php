<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - {{ $title }}</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <style>
        nav{
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
    <nav class="p-5 h-16 fixed w-full flex items-center">
        <div class="container mx-auto">
            <ul class="flex space-x-4 flex items-center justify-evenly gap-5">
                <li><a href="home" class="text-white">Home</a></li>
                <li><a href="siswa" class="text-white">Siswa</a></li>
                <li><a href="about" class="text-white">About</a></li>
                <li><a href="contact" class="text-white">Contact</a></li>
            </ul>
        </div>
    </nav> 

    <div class="banner h-50 bg-teal-50 flex items-center justify-center w-full">
        <h1 class="text-5xl font-medium">{{ $judul }}</h1>
    </div>

    <div class="info p-5 flex items-center justify-center w-full">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-4">{{ $description }}</h2>
            <p class="text-lg">Email: {{ $contactInfo['email'] }}</p>
            <p class="text-lg">Phone: {{ $contactInfo['phone'] }}</p>
        </div>
    </div>
</body>
</html>