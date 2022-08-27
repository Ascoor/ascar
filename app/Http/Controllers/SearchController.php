<?php

namespace App\Http\Controllers;

use App\Place; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   
    public Function index()
    {
$search_text = $_GET['query'];
$places = Place::where('gnump','LIKE','%'.$search_text.'%')->get();


return view('place.search', compact('places')); 
}
   

public Function searchp()
    {
$search_text = $_GET['queryp'];
$places = Place::where('gnump2','LIKE','%'.$search_text.'%')->get();


return view('place.search', compact('places')); 
}




public Function searchw()
{
$search_text = $_GET['queryw'];
$places = Place::where('gnump3','LIKE','%'.$search_text.'%')->get();


return view('place.search', compact('places')); 
}
}