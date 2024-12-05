@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Tambah Mahasiswa</h2>

        <form action="{{ route('mahasiswa.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" name="nim" id="nim" value="{{ old('nim') }}" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
                @error('nim')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nama_mahasiswa" class="block text-sm font-medium text-gray-700">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="{{ old('nama_mahasiswa') }}" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
                @error('nama_mahasiswa')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
                @error('email')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan') }}" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
                @error('jurusan')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Dropdown Dosen Wali -->
            <div class="mb-4">
                <label for="dosen_id" class="block text-sm font-medium text-gray-700">Dosen Wali</label>
                <select name="dosen_id" id="dosen_id" class="mt-1 p-2 w-full border border-gray-300 rounded-lg">
                    <option value="">Pilih Dosen Wali</option>
                    @foreach($dosens as $dosen)
                        <option value="{{ $dosen->id }}" {{ old('dosen_id') == $dosen->id ? 'selected' : '' }}>
                            {{ $dosen->nama_dosen }}
                        </option>
                    @endforeach
                </select>
                @error('dosen_id')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Dropdown Mata Kuliah -->
            <div class="mb-4">
                <label for="mata_kuliah_id" class="block text-sm font-medium text-gray-700">Mata Kuliah</label>
                <select name="mata_kuliah_id" id="mata_kuliah_id" class="mt-1 p-2 w-full border border-gray-300 rounded-lg">
                    <option value="">Pilih Mata Kuliah</option>
                    @foreach($mataKuliah as $mk)
                        <option value="{{ $mk->id }}" {{ old('mata_kuliah_id') == $mk->id ? 'selected' : '' }}>
                            {{ $mk->nama_mk }}
                        </option>
                    @endforeach
                </select>
                @error('mata_kuliah_id')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
        </form>
    </div>
@endsection
