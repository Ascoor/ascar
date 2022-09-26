<?php


namespace App\Http\Controllers;

use App\Place;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\Exportable;

use Illuminate\Http\Request;
use App\Exports\PlacesExport;

use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = $request->input('search');

        $places = Place::query()
            ->where('gnump', 'LIKE', "%{$search}%")
            ->orWhere('gnumh', 'LIKE', "%{$search}%")
            ->orWhere('gnumw', 'LIKE', "%{$search}%")
            ->orWhere('gnump1', 'LIKE', "%{$search}%")
            ->orWhere('gnump2', 'LIKE', "%{$search}%")
            ->orWhere('gnump3', 'LIKE', "%{$search}%")
            ->orWhere('gnump4', 'LIKE', "%{$search}%")
            ->get();

        return view('place.search', compact('places', $places));
    }


    public function export()
    {


        return Excel::download(new PlacesExport, 'places.csv');
    }
}
