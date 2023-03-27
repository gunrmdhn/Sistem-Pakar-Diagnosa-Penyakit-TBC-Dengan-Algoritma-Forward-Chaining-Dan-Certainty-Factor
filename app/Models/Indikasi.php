<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_indikasi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
