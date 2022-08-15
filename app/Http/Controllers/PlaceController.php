<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $places = Place::latest()->paginate(4);
        return view('place.index',compact('places'));
    }

    public function create()
    {
        return view('place.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gnump'=> 'required',
            'gnumh' => 'required',
            'gnumw' => 'required',
            'gnump1' => 'required',
            'gnump2' => 'required',
            'gnump3' => 'required',
            'gnump4' => 'required',
            'gnump5' => 'required',
            'gnump6' => 'required',
            'gnump7' => 'required',
            'gnump8' => 'required',
            'gnump9' => 'required',
            'gnump10' => 'required'
        ]);

      $places = Place::create($request->all());
        return redirect()->route('place.index')
            ->with('تمت', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('place.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place$place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('place.edit', compact('place'));
    }

    public function update(Request $request, Place $place)
    {
        $request->validate([
            'gnump' => 'required',
            'gnumh' => 'required',
            'gnumw' => 'required',
            'gnump1' => 'required',
            'gnump2' => 'required',
            'gnump3' => 'required',
            'gnump4' => 'required',
            'gnump5' => 'required',
            'gnump6' => 'required',
            'gnump7' => 'required',
            'gnump8' => 'required',
            'gnump9' => 'required',
            'gnump10' => 'required',
 
        ]);
      $place = Place::update($request->all());
        return redirect()->route('place.index')
            ->with('تمت', 'تم التحديث بنجاح');
    }


public function destroy(Place $place)
    {
        $places->delete();
        return redirect()->route('place.index')
            ->with('تمت', 'تم الحذف بنجاح');
    }
}
