<?php


namespace App\Http\Controllers;


use App\Category;
use App\Place;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use function GuzzleHttp\Promise\queue;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = $request->input('search');

        $places = Place::where(function ($query)  use ($search) {
            $query->where('gnump', 'LIKE', "%{$search}%")
                ->orWhere('gnumh', 'LIKE', "%{$search}%")
                ->orWhere('gnumw', 'LIKE', "%{$search}%")
                ->orWhere('gnump1', 'LIKE', "%{$search}%")
                ->orWhere('gnump2', 'LIKE', "%{$search}%")
                ->orWhere('gnump3', 'LIKE', "%{$search}%")
                ->orWhere('gnump4', 'LIKE', "%{$search}%");
        })
            ->paginate(2000);
        $places->appends(['search' => $search]);

        return view('place.export')->with('places', $places)->with('categories', Category::all());
    }
}