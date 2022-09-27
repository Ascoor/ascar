<?php

namespace App\Http\Controllers;

use App\Place;
use App\Tag;

use App\Exports\PlacesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $places = Place::latest()->paginate(10);
        return view('place.index', compact('places', $places));
    }




    /** Trashed places */
    public function PlacesTrashed()
    {

        $places = Place::onlyTrashed()->paginate(10);
        return view('place.trash')->with('places', $places);
    }






    /**      Place Create     */
    public function create()
    {
        $tags = Tag::all();
        if ($tags->count() == 0) {
            return   redirect()->route('tag.create');
        }
        return view('place.create')->with('tags',  $tags);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'gnump' => 'required',
            'gnumh' => 'required',
            'gnumw' => 'required',
            'gnump1' => 'required',
            'gnump2' => 'required',
            'gnump3' => 'required',
            'tags' =>  'required',
            'photo1 ' =>  'required|image',

        ]);
        $photo = $request->photo1;

        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('uploads/posts', $newPhoto);

        $place = Place::create([
            'gnump' => $request->gnump,
            'gnumh' => $request->gnumh,
            'gnumw' => $request->gnumw,
            'gnump1' => $request->gnump1,
            'gnump2' => $request->gnump2,
            'gnump3' => $request->gnump3,
            'gnump4' => $request->gnump4,
            'gnump5' => $request->gnump5,
            'gnump6' => $request->gnump6,
            'gnump7' => $request->gnump7,
            'gnump8' => $request->gnump8,
            'gnump9' => $request->gnump9,
            'gnump10' => $request->gnump10,
            'gnump11' => $request->gnump11,
            'gnump12' =>  Auth::id(),
            'slug' =>   str_slug($request->gnump),
            'photo1' =>  'uploads/posts/' . $newPhoto

        ]);


        $place->tag()->attach($request->tags);

        return redirect()->back();
    }


    /**      Place show     */


    public function show($slug)
    {
        $tags = Tag::all();
        $place = Place::where('slug', $slug)->first();

        return view('place.show')->with('place', $place)
            ->with('tags', $tags);
    }






    /**      Place Edit     */
    public function edit($id)
    {
        $tags = Tag::all();
        $place = Place::find($id);
        return view('place.edit')->with('place', $place)
            ->with('tags', $tags);
    }





    /**      Place update     */

    public function update(Request $request,  $id)
    {
        $place = Place::find($id);
        $this->validate($request, [
            'gnump' => 'required',
            'gnumh' => 'required',
            'gnumw' => 'required',
            'gnump1' => 'required',
            'gnump2' => 'required',
            'gnump3' => 'required',




        ]);

        //   dd($request->all());


        if ($request->has('photo')) {
            $photo = $request->photo1;
            $newPhoto = time() . $photo->getClientOriginalName();
            $photo->move('uploads/posts', $newPhoto);
            $place->photo1 = 'storage/posts/' . $newPhoto;
        }

        $place->gnump = $request->gnump;
        $place->gnumh = $request->gnumh;
        $place->gnumw = $request->gnumw;
        $place->gnump1 = $request->gnump1;
        $place->gnump2 = $request->gnump2;
        $place->gnump3 = $request->gnump3;
        $place->gnump4 = $request->gnump4;
        $place->gnump5 = $request->gnump5;
        $place->gnump6 = $request->gnump6;
        $place->gnump7 = $request->gnump7;
        $place->gnump8 = $request->gnump8;
        $place->gnump9 = $request->gnump9;
        $place->gnump10 = $request->gnump10;
        $place->gnump11 = $request->gnump11;


        $place->gnump12 =  Auth::id();


        $place->save();
        $place->tag()->sync($request->tags);
        return redirect()->back()
            ->with('تمت', 'تم التعديل  بنجاح');
    }






    /**      Place destroy     */

    public function destroy($id)
    {
        $place = Place::where('id', $id)->where('gunup12', Auth::id())->first();
        if ($place === null) {
            return redirect()->back();
        }


        $place->delete($id);
        return redirect()->back();
    }




    /**      Place softDeletes     */

    public function softDeletes($id)
    {
        $place = Place::find($id)->delete();


        return redirect()->route('places')
            ->with('تمت', 'تم الإخفاء بنجاح');
    }




    public function deleteForEver($id)
    {
        $place = Place::withTrashed()->where('id',  $id)->first();
        $place->forceDelete();
        return redirect()->back();
    }

    public function backFromSoftDelete($id)
    {
        $place = Place::withTrashed()->where('id',  $id)->first();
        $place->restore();
        return redirect()->back();
    }



    public function export()
    {
        return Excel::download(new PlacesExport, 'places.csv');
    }
}