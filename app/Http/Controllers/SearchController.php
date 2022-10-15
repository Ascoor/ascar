<?php


namespace App\Http\Controllers;

use App\Exports\PlacesExport;
use App\Place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{


    public function search()
    {
        $places = app(Place::class)->newQuery();

        if (request()->has('search') && !empty(request()->get('search'))) {
            $search = request()->query('search');
            $places->where(function ($query) use ($search) {
                $query->where('gnump', 'LIKE', "%{$search}%")
                    ->orWhere('gnumh', 'LIKE', "%{$search}%")
                    ->orWhere('gnumw', 'LIKE', "%{$search}%")
                    ->orWhere('gnump1', 'LIKE', "%{$search}%")
                    ->orWhere('gnump2', 'LIKE', "%{$search}%")
                    ->orWhere('gnump3', 'LIKE', "%{$search}%")
                    ->orWhere('gnump4', 'LIKE', "%{$search}%");
            });
        }

        return Excel::download(new PlacesExport($places), 'filter.xlsx');
    }
}