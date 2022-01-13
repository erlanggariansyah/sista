<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'seminar_id', 'nim', 'nama', 'prodi',
        'program'
    ];
}
