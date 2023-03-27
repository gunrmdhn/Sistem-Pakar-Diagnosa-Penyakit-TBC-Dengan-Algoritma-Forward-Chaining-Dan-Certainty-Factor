<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'tabel_pasien';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $with = ['pasienPenyakit'];
    public function pasienPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    }
    public function getRouteKeyName()
    {
        return 'kode_registrasi';
    }
}
