<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'tabel_kategori';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function kategoriGejala()
    {
        return $this->hasMany(Gejala::class);
    }
    public function getRouteKeyName()
    {
        return 'kode_kategori';
    }
}
