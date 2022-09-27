<?php

namespace App\Exports;



use App\Place;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PlacesExport implements FromView, ShouldAutoSize
{
    use Exportable;
    private $places;
    public function __construct()
    {
        $this->items = Place::all();
    }



    public function view(): View
    {
        return view('place.search', [
            'places' => $this->items
        ]);
    }
}