<?php

namespace App\Exports;

use App\Models\Nasabah;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

// class NasabahExport implements FromCollection
class NasabahExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     // return view('exel', [
    //     //     'nasabah' => Nasabah::all()
    //     // ]);
    //     return Nasabah::all();
    // }
    public function view(): View
    {
        return view('exel', [
            'nasabahs' => Nasabah::all()
        ]);
    }
}
