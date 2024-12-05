@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Edit Mata Kuliah</h2>

        <form action="{{ route('mata_kuliah.update', $mataKuliah) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="kode_mk" class="block text-sm font-medium text-gray-700">Kode Mata Kuliah</label>
                <input type="text" name="kode_mk" id="kode_mk" value="{{ old('kode_mk', $mataKuliah->kode_mk) }}" class="mt-1 block w-full border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="nama_mk" class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" id="nama_mk" value="{{ old('nama_mk', $mataKuliah->nama_mk) }}" class="mt-1 block w-full border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="dosen_id" class="block text-sm font-medium text-gray-700">Dosen Pengajar</label>
                <select name="dosen_id" id="dosen_id" class="mt-1 block w-full border border-gray-300 rounded-md" required>
                    @foreach($dosens as $dosen)
                        <option value="{{ $dosen->id }}" {{ $dosen->id == old('dosen_id', $mataKuliah->dosen_id) ? 'selected' : '' }}>
                            {{ $dosen->nama_dosen }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Update Mata Kuliah</button>
        </form>
    </div>
@endsection
