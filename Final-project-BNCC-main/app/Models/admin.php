<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaadmin', 'umuradmin', 'alamatadmin', 'no_telp'
    ];
}
