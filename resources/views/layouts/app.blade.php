<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Manajemen Data</title>
    
    <!-- Menggunakan Vite untuk mengelola CSS -->
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100">

    <!-- Wrapper Konten Utama -->
    <div class="max-w-7xl mx-auto p-6">
        <!-- Navbar -->
        <div class="bg-white shadow-md p-6 rounded-lg mb-6">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <h1 class="text-4xl font-bold text-gray-900 tracking-wide uppercase">
                    Universitas EAD
                </h1>
                <!-- Memberikan jarak dengan `mt-4 sm:mt-0` agar tetap rapi pada berbagai ukuran layar -->
                <nav class="mt-4 sm:mt-0">
                    <ul class="flex space-x-3 items-center">
                        <li>
                            <a href="{{ route('dosen.index') }}" class="text-white hover:text-blue-300 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:scale-105 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-400 hover:to-blue-500">
                                Dosen
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mahasiswa.index') }}" class="text-white hover:text-blue-300 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:scale-105 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-400 hover:to-green-500">
                                Mahasiswa
                            </a>
                        </li>
                        <!-- Menambahkan Link Mata Kuliah -->
                        <li>
                            <a href="{{ route('mata_kuliah.index') }}" class="text-white hover:text-blue-300 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:scale-105 bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-400 hover:to-purple-500">
                                Mata Kuliah
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Konten Dinamis -->
        @yield('content')
    </div>

    <!-- Menggunakan Vite untuk mengelola JS -->
    @vite('resources/js/app.js') 
</body>
</html>
