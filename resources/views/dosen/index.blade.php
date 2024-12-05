@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Daftar Dosen</h1>

    <div class="mb-4">
        <a href="{{ route('dosen.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Dosen</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 text-left">Kode Dosen</th>
                <th class="py-2 px-4 text-left">Nama Dosen</th>
                <th class="py-2 px-4 text-left">NIP</th> <!-- Kolom NIP -->
                <th class="py-2 px-4 text-left">Email</th>
                <th class="py-2 px-4 text-left">No Telepon</th> <!-- Kolom No Telepon -->
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4">{{ $dosen->kode_dosen }}</td>
                    <td class="py-2 px-4">{{ $dosen->nama_dosen }}</td>
                    <td class="py-2 px-4">{{ $dosen->nip }}</td> <!-- Menampilkan NIP -->
                    <td class="py-2 px-4">{{ $dosen->email }}</td>
                    <td class="py-2 px-4">{{ $dosen->no_telepon }}</td> <!-- Menampilkan No Telepon -->
                    <td class="py-2 px-4">
                        <!-- Link ke halaman detail dosen -->
                        <a href="{{ route('dosen.show', $dosen) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Detail</a>

                        <a href="{{ route('dosen.edit', $dosen) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                        
                        <form action="{{ route('dosen.destroy', $dosen) }}" method="POST" style="display:inline;">
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
