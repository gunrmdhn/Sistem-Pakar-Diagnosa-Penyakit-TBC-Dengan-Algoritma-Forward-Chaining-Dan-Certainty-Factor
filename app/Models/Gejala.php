<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'tabel_gejala';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $with = ['gejalaKategori'];
    public function gejalaBasis()
    {
        return $this->hasMany(Basis::class);
    }
    public function gejalaKategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function getRouteKeyName()
    {
        return 'kode_gejala';
    }
}
