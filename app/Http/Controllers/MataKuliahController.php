<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::with('dosen')->get();
        return view('mata_kuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('mata_kuliah.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs',
            'nama_mk' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('mata_kuliah.index');
    }

    public function show(MataKuliah $mataKuliah)
    {
        return view('mata_kuliah.show', compact('mataKuliah'));
    }

    public function edit(MataKuliah $mataKuliah)
    {
        $dosens = Dosen::all();
        return view('mata_kuliah.edit', compact('mataKuliah', 'dosens'));
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,' . $mataKuliah->id,
            'nama_mk' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        $mataKuliah->update($request->all());
        return redirect()->route('mata_kuliah.index');
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();
        return redirect()->route('mata_kuliah.index');
    }
}