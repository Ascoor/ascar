<?php

namespace App\Exports;

use App\Place;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PlacesExport implements FromQuery, ShouldAutoSize
{
    use Exportable;

    public function query()
    {
        return Place::query();
    }
}