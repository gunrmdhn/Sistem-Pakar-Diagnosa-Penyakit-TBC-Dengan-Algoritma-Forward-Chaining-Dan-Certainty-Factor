<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = collect([
            'Basis' => 'basis.index',
            'Kategori' => 'kategori.index',
            'Gejala' => 'gejala.index',
            'Penyakit' => 'penyakit.index',
            'Pasien' => 'pasien.index',
        ]);
        return view(
            'components.sidebar',
            [
                'data' => $data,
                'routeName' => Str::before(Route::currentRouteName(), '.'),
            ]
        );
    }
}
