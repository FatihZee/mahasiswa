<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama_mahasiswa', 'email', 'jurusan', 'dosen_id', 'mata_kuliah_id'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

}