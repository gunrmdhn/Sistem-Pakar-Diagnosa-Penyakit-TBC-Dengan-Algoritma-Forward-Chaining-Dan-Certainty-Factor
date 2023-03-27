<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
    use HasFactory;
    protected $table = 'tabel_basis';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $with = ['basisGejala', 'basisPenyakit'];
    public function basisGejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id');
    }
    public function basisPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    }
    public function getRouteKeyName()
    {
        return 'kode_basis';
    }
}
