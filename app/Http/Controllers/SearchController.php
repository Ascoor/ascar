<?php

namespace App\Http\Controllers;

use App\Place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index()
    {
        $search_text = $_GET['query'];
        $places = Place::where('gnump', 'LIKE', '%' . $search_text . '%')
            ->orwhere('gnump2', 'LIKE', '%' . $search_text . '%')
            ->orwhere('gnump3', 'LIKE', '%' . $search_text . '%')
            ->orwhere('gnumh', 'LIKE', '%' . $search_text . '%')
            ->orwhere('gnumw', 'LIKE', '%' . $search_text . '%')
            ->orwhere('gnump10', 'LIKE', '%' . $search_text . '%')

            ->get();
        return view('place.index', compact('places', $places));
    }
}