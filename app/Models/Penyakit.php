<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'tabel_penyakit';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function penyakitPasien()
    {
        return $this->hasMany(Pasien::class);
    }
    public function penyakitBasis()
    {
        return $this->hasMany(Basis::class);
    }
    public function getRouteKeyName()
    {
        return 'kode_penyakit';
    }
}
