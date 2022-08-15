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
        $place = place::latest();
        return view('place.index', compact('place'));
    }

    public function create()
    {
        return view('place,create');
    }

    public function store(Request $request)
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
            'gnump11' => 'required',
            'gnump12' => 'required',
            'gnump13' => 'required',
            'gnump14' => 'required',
            'gnump15' => 'required',
            'gnump16' => 'required',
            'gnump17' => 'required',
        ]);

        $place = place::create($request->all());
        return redirect()
            ->Route('place.index')
            ->with('تمت', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(place $places)
    {
        return view('place.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(place $place)
    {
        return view('place.edit', compact('place'));
    }

    public function update(Request $request, place $place)
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
            'gnump11' => 'required',
            'gnump12' => 'required',
            'gnump13' => 'required',
            'gnump14' => 'required',
            'gnump15' => 'required',
            'gnump16' => 'required',
            'gnump17' => 'required',
        ]);
        $place = place::update($request->all(''));
        return redirect()
            ->route('place.index')
            ->with('تمت', 'تم التحديث بنجاح');
    }



        
    /**
     * show
     *
     * @param  mixed $place
     * @return void
     */
    public function show(place $place)
    {
         return view('place.show', compact(place));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(place $place)
    {
        $place->delete();
        return redirect()
            ->route('place.index')
            ->with('تمت', 'تم الحذف  بنجاح');
    }
}
