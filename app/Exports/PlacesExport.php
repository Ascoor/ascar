<?php

namespace App\Exports;

use App\Place;


use Maatwebsite\Excel\Concerns\FromCollection;

class PlacesExport implements FromCollection
{
    public function collection()
    {
        return Place::select('id', 'gnump', 'gnumh', 'gnumw', 'gnump1', 'gnump2', 'gnump3', 'gnump4', 'gnump5', 'gnump6', 'gnump7', 'gnump8', 'gnump9', 'gnump10', 'gnump11')->get();
    }
}