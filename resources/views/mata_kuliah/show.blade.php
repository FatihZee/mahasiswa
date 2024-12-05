@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Detail Mata Kuliah</h2>

        <div class="bg-white p-6 border border-gray-300 rounded-lg shadow-md">
            <div class="mb-4">
                <strong class="text-gray-700">Kode Mata Kuliah:</strong>
                <p class="text-gray-600">{{ $mataKuliah->kode_mk }}</p>
            </div>

            <div class="mb-4">
                <strong class="text-gray-700">Nama Mata Kuliah:</strong>
                <p class="text-gray-600">{{ $mataKuliah->nama_mk }}</p>
            </div>

            <div class="mb-4">
                <strong class="text-gray-700">Dosen Pengajar:</strong>
                <p class="text-gray-600">{{ $mataKuliah->dosen->nama_dosen ?? 'Tidak ada dosen' }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ route('mata_kuliah.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Kembali ke Daftar Mata Kuliah</a>
            </div>
        </div>
    </div>
@endsection
