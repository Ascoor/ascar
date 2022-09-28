<?php

namespace App\Exports;

use App\Place;


use Maatwebsite\Excel\Concerns\FromCollection;

class PlacesExport implements FromCollection
{
    public function collection()
    {
        return Place::select('gnump', 'gnumh', 'gnumw', 'gnump1', 'gnump2', 'gnump3', 'gnump4')->get();
    }
}