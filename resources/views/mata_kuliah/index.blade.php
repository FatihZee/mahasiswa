@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Daftar Mata Kuliah</h2>

        <a href="{{ route('mata_kuliah.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md mb-4 inline-block">Tambah Mata Kuliah</a>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b">Kode MK</th>
                    <th class="px-4 py-2 border-b">Nama Mata Kuliah</th>
                    <th class="px-4 py-2 border-b">Dosen Pengajar</th>
                    <th class="px-4 py-2 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mataKuliahs as $mataKuliah)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $mataKuliah->kode_mk }}</td>
                        <td class="px-4 py-2 border-b">{{ $mataKuliah->nama_mk }}</td>
                        <td class="px-4 py-2 border-b">{{ $mataKuliah->dosen->nama_dosen ?? 'Tidak ada dosen' }}</td>
                        <td class="px-4 py-2 border-b">
                            <a href="{{ route('mata_kuliah.show', $mataKuliah) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Detail</a>
                            <a href="{{ route('mata_kuliah.edit', $mataKuliah) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('mata_kuliah.destroy', $mataKuliah) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
