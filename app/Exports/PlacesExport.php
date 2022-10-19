<?php

namespace App\Exports;

use App\Place;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PlacesExport implements FromCollection, ShouldAutoSize
{
    use Exportable;

    public function collection()
    {
        // return $places->collect('places')
    }
}