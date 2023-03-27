<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    public function __invoke(Request $request)
    {
        return response()->json([
            'data_pasien' => Pasien::where('id', $request->get('id'))->get(),
        ]);
    }
}
