<?php

namespace App\Http\Controllers;

use App\Place;
use App\Tag;
use App\UploadsPlace;

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

            'photo1.*' => 'required | photos',
            'photo2.*' => 'required | photos'

        ]);



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


        ]);
        $data = new uploadsplace();

        if ($request->hasFile('photo1')) {
            $imagenameArr = [];
            foreach ($request->photo1 as $file) {
                // you can also use the original name
                $imagename = time() . '-' . $file->getClientOriginalName();
                $imagenameArr[] = $imagename;
            }
            // Upload file to public path in images directory
            $file->move(public_path('/storage/posts/'), $imagename);
            $data->place_id = $request->place->id;


            $data->filename = $request->photo1;
            $data->save();
        }
        if ($request->hasFile('photo2')) {
            $imagenameArr = [];
            foreach ($request->photo2 as $file) {
                // you can also use the original name
                $imagename = time() . '-' . $file->getClientOriginalName();
                $imagenameArr[] = $imagename;
            }
            // Upload file to public path in images directory
            $file->move(public_path('/storage/posts/'), $imagename);
            $data->place_id = Place::id();


            $data->filename = $imagename;
            $data->save();
        }

        return redirect()->back();
    }

    /**      Place show     */


    public function show($slug)
    {
        $tags = Tag::all();
        $place = Place::where('slug', $slug)->first();
        $data = UploadsPlace::all();
        return view('place.show')->with('place', $place)
            ->with('tags', $tags)->with('data', $data);
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
            'photo1.*' => 'required|image',
            'photo2.*' => 'required|file',

        ]);



        //   dd($request->all());
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

        $place->tag()->sync($request->tags);
        $place->save();

        $data = new UploadsPlace();
        if ($request->hasFile('photo1')) {
            $files = $request->file('photo1');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('storage/posts'), $filename);
                UploadsPlace::create([
                    'place_id' => $place->id,
                    'filename' =>   $filename,

                ]);
            }
        }
        if ($request->hasFile('photo2')) {
            $files = $request->file('photo2');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('storage/posts'), $filename);
                UploadsPlace::create([
                    'place_id' => $place->id,
                    'filename' =>   $filename,

                ]);
            }
        }
        return redirect()->back()
            ->with('تمت', 'تم التعديل  بنجاح');
    }







    public function download(Request $request, $filename)
    {
        return response()->download(public_path('storage/posts/' . $filename));
    }


    public function view($id)
    {
        $data = UploadsPlace::find($id);
        return view('place.view', compact('data'));
    }


    public function deleteForEver($id)
    {
        $place = Place::withTrashed()->where('id',  $id)->first();
        $place->forceDelete();
        return redirect()->back();
    }

    public function backFromSoftDelete($slug)
    {
        $place = Place::withTrashed()->where('slug',  $slug)->first();
        $place->restore();
        return redirect()->back();
    }

    public function Softdeletes($slug)
    {
        //dd($id);
        // $post = Post::find( $id ) ;

        $place = Place::where('slug', $slug);
        if ($place === null) {
            return redirect()->back();
        }

        $place->delete($slug);
        return redirect()->back();
    }
}