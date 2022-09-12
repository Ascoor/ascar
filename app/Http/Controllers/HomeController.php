<?php

namespace App\Http\Controllers;
use App\Place;
use App\Exports\PlacesExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $places = Place::latest()->paginate(10);
        return view('place.index', compact('places', $places));
    }

    public function export()
    {

        return Excel::download(new PlacesExport(),'places.xlsx' );
    }

}
