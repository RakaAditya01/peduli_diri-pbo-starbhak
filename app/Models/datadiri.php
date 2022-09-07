<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadiri extends Model
{
    use HasFactory;
    protected $table = 'datadiri';
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'alamat',
        'tempat_lahir',
    ];
}
