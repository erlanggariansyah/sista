<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;

    protected $table = 'seminars';
    protected $fillable = [
        'user_id', 'nim', 'nama_lengkap', 'prodi',
        'tanggal_seminar', 'jam_seminar', 'ruangan',
        'judul', 'seminar'
    ];
}
