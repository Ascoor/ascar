<?php

namespace App\Exports;

use App\Place;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlacesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      
        return Place::select('id','gnump','gnumh','gnumw','gnump1','gnump2','gnump3','gnump4','gnump5')->get();
    }
}