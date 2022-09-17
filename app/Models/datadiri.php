<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadiri extends Model
{
    use HasFactory;
    protected $table = 'datadiri';
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'alamat',
        'jenis_kelamin',
        'no_ponsel',
        'tempat_lahir',
        'email',
    ];
}
