<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
{
    $dosens = Dosen::all();
    return view('dosen.index', compact('dosens'));
}

public function show(Dosen $dosen)
{
    // Mengambil data dosen yang sesuai
    return view('dosen.show', compact('dosen'));
}

public function create()
{
    return view('dosen.create');
}

public function store(Request $request)
{
    // Validasi form
    $request->validate([
        'kode_dosen' => 'required|max:3',
        'nama_dosen' => 'required',
        'nip' => 'required|unique:dosens',
        'email' => 'required|email|unique:dosens',
        'no_telepon' => 'nullable',
    ]);

    Dosen::create($request->all()); // menyimpan data dosen

    return redirect()->route('dosen.index');
}

public function edit(Dosen $dosen)
{
    return view('dosen.edit', compact('dosen'));
}

public function update(Request $request, Dosen $dosen)
{
    $dosen->update($request->all());
    return redirect()->route('dosen.index');
}

public function destroy(Dosen $dosen)
{
    $dosen->delete();
    return redirect()->route('dosen.index');
}

}