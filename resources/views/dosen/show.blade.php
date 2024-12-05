@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="px-4 sm:px-0">
        <h3 class="text-2xl font-semibold text-gray-900">Detail Dosen</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai dosen.</p>
    </div>
    <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium text-gray-900">Kode Dosen</dt>
                <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $dosen->kode_dosen }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium text-gray-900">Nama Dosen</dt>
                <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $dosen->nama_dosen }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium text-gray-900">NIP</dt>
                <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $dosen->nip }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium text-gray-900">Email</dt>
                <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $dosen->email }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium text-gray-900">No Telepon</dt>
                <dd class="mt-1 text-sm text-gray-700 sm:col-span-2 sm:mt-0">{{ $dosen->no_telepon }}</dd>
            </div>
        </dl>
    </div>
    <div class="mt-6">
        <a href="{{ route('dosen.index') }}" class="inline-block bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">Kembali ke Daftar Dosen</a>
    </div>
</div>
@endsection
