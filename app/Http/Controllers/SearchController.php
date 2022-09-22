<?php


namespace App\Http\Controllers;

use App\Place;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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

            ->paginate();

        return view('place.search', compact('places'));
    }
}