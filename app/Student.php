<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Untuk menyalakan sofdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //

    // SoftDeletes
    // Berfungsi untuk menghapus data namun masih tersimpan di dalam database
    use SoftDeletes;

    // Documentation ada di laravel cari mass assignemnt
    // Yang berisi field mana saja yang boleh di isi user
    protected $fllable = ['nama', 'nrp', 'email', 'jurusan'];
    // Guarded kebalikan dari fillabel
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
