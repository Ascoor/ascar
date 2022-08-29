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
        
        $places = Place::latest()->paginate(20);
        return view('place.index',compact('places'));
    }
    public function trashedPlaces()
        {
            
        $places = Place::onlyTrashed()->paginate(10);
            return view('place.trash',compact('places'));
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
      
        ]);

      $places = Place::create($request->all());
        return redirect()->route('places.index')
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
            'gnump9' => 'required'
    
        ]);
      $place->update($request->all());
        return redirect()->route('places.index')
            ->with('تمت', 'تم التحديث بنجاح');
    }


public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->route('places.index')
            ->with('تمت', 'تم الحذف نهائيا بنجاح');
    }

public function softDelete( $id)
    {
         $place = Place::find($id)->delete();

        return redirect()->route('places.index')
            ->with('تمت', 'تم الإخفاء بنجاح');
    }
public function deleteForEver( $id)
    {
         $place = Place::onlyTrashed()->where('id',$id)->forceDelete();

        return redirect()->route('place.trash')
            ->with('تمت', 'تم الحذف   بنجاح');
    }
    public function backFromSoftDelete( $id)
        {
  $place = Place::onlyTrashed()->where('id',$id)->first()->restore();
    
            return redirect()->route('places.index')
            ->with('تمت', 'تم الإظهار  بنجاح');
        }
   
}