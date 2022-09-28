<?php


namespace App\Http\Controllers;

use App\Exports\PlacesExport;
use App\Place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;

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

        return Excel::download(new PlacesExport, 'المتغيرات.xlsx');
    }
}