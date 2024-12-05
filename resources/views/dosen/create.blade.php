@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Tambah Dosen</h1>

    <form action="{{ route('dosen.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="kode_dosen" class="block text-sm font-medium text-gray-700">Kode Dosen</label>
            <input type="text" id="kode_dosen" name="kode_dosen" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="nama_dosen" class="block text-sm font-medium text-gray-700">Nama Dosen</label>
            <input type="text" id="nama_dosen" name="nama_dosen" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
            <input type="text" id="nip" name="nip" value="{{ old('nip') }}" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
            @error('nip')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>        

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="no_telepon" class="block text-sm font-medium text-gray-700">No Telepon</label>
            <input type="text" id="no_telepon" name="no_telepon" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan Dosen</button>
        </div>
    </form>
</div>
@endsection
