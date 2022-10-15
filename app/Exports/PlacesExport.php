<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class PlacesExport implements FromView, ShouldAutoSize, WithEvents
{
    private $places;

    public function __construct($places)
    {
        $this->places = $places;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        return view('place.export', ['places' => $this->places]);
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
            },
        ];
    }
}