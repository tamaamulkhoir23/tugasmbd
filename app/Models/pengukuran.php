<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengukuran extends Model
{
    use HasFactory;
    protected $fillable = [
        'idpengukuran',
        'idgas',
        'idsuhu',
        'idbuah',
        'nilaigas',
        'nilaisuhu',
    ];
}
