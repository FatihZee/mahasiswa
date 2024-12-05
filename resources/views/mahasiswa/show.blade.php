@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div>
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-semibold text-gray-900">Detail Mahasiswa</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi detail tentang mahasiswa dan dosen wali.</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium text-gray-900">NIM</dt>
                        <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $mahasiswa->nim }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium text-gray-900">Nama Mahasiswa</dt>
                        <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $mahasiswa->nama_mahasiswa }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium text-gray-900">Email</dt>
                        <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $mahasiswa->email }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium text-gray-900">Jurusan</dt>
                        <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $mahasiswa->jurusan }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium text-gray-900">Dosen Wali</dt>
                        <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $mahasiswa->dosen->nama_dosen ?? 'Tidak ada dosen' }}
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="mt-4">
                <a href="{{ route('mahasiswa.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">Kembali ke Daftar Mahasiswa</a>
            </div>
        </div>
    </div>
@endsection
