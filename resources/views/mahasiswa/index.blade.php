@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Daftar Mahasiswa</h2>

        <a href="{{ route('mahasiswa.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md mb-4 inline-block">Tambah Mahasiswa</a>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b">NIM</th>
                    <th class="px-4 py-2 border-b">Nama Mahasiswa</th>
                    <th class="px-4 py-2 border-b">Dosen Wali</th>
                    <th class="px-4 py-2 border-b">Mata Kuliah</th>
                    <th class="px-4 py-2 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $mahasiswa->nim }}</td>
                        <td class="px-4 py-2 border-b">{{ $mahasiswa->nama_mahasiswa }}</td>
                        <td class="px-4 py-2 border-b">{{ $mahasiswa->dosen->nama_dosen ?? 'Tidak ada dosen' }}</td>
                        <td class="px-4 py-2 border-b">{{ $mahasiswa->mataKuliah->nama_mk ?? 'Tidak ada mata kuliah' }}</td>
                        <td class="px-4 py-2 border-b">
                            <a href="{{ route('mahasiswa.show', $mahasiswa) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Detail</a>

                            <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>

                            <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" style="display:inline;">
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
