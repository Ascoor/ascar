<?php

namespace App\Exports;

use App\Http\Controllers\SearchController;
use App\Place;

use Maatwebsite\Excel\Concerns\FromArray;

class PlacesExport implements FromArray
{
    public function __construct(SearchController $places)
    {
        $this->places = $places;
    }

    public function collection()
    {
        return $this->Place->all();
    }
}