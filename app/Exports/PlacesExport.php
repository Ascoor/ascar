<?php

namespace App\Exports;

use App\Http\Controllers\SearchController;
use App\Place;



use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;


class PlacesExport implements FromCollection, WithHeadings
{
    public function __construct(places $places)
    {
        $this->places = $places;
    }

    public function collection()
    {
        return $this->places->select('id', 'gnump', 'gnumh', 'gnumw', 'gnump1', 'gnump2', 'gnump3', 'gnump4', 'gnump5', 'gnump6', 'gnump7', 'gnump8', 'gnump9', 'gnump10', 'gnump11');
    }


    public function headings(): array
    {
        return [
            'id',
            'رقم_المتغير',
            'خط الطول',
        ];
    }
}