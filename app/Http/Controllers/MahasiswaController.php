<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
{
    $mahasiswas = Mahasiswa::with('dosen')->get();
    return view('mahasiswa.index', compact('mahasiswas'));
}

public function show(Mahasiswa $mahasiswa)
{
    // Mengambil data mahasiswa yang sesuai
    return view('mahasiswa.show', compact('mahasiswa'));
}


public function create()
{
    $dosens = Dosen::all();
    $mataKuliah = MataKuliah::all();  // Ambil semua mata kuliah
    return view('mahasiswa.create', compact('dosens', 'mataKuliah'));
}

// Di Controller Mahasiswa
public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nim' => 'required|unique:mahasiswas',
        'nama_mahasiswa' => 'required',
        'email' => 'required|email',
        'jurusan' => 'required',
        'dosen_id' => 'required|exists:dosens,id',
        'mata_kuliah_id' => 'required|exists:mata_kuliahs,id', // Validasi untuk mata kuliah
    ]);

    // Simpan mahasiswa
    $mahasiswa = Mahasiswa::create([
        'nim' => $validatedData['nim'],
        'nama_mahasiswa' => $validatedData['nama_mahasiswa'],
        'email' => $validatedData['email'],
        'jurusan' => $validatedData['jurusan'],
        'dosen_id' => $validatedData['dosen_id'],
        'mata_kuliah_id' => $validatedData['mata_kuliah_id'], // Menyimpan mata kuliah yang dipilih
    ]);

    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
}


public function edit(Mahasiswa $mahasiswa)
{
    $dosens = Dosen::all();
    return view('mahasiswa.edit', compact('mahasiswa', 'dosens'));
}

public function update(Request $request, Mahasiswa $mahasiswa)
{
    $mahasiswa->update($request->all());
    return redirect()->route('mahasiswa.index');
}

public function destroy(Mahasiswa $mahasiswa)
{
    $mahasiswa->delete();
    return redirect()->route('mahasiswa.index');
}

}