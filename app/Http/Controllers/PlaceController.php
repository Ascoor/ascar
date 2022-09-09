<?php

namespace App\Http\Controllers;

use Auth;
use App\Place;
use Illuminate\Http\Request;


class PlaceController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {

        $places = Place::latest()->paginate(10);
        return view('place.index',compact('places'));

    }



	/** Trashed places */
	public function trashedPlaces()
		{

		$places = Place::onlyTrashed()->paginate();
			return view('place.trash',compact('places'));
		}

	public function create()
	{
		return view('place.create');
	}

	public function store (Request $request)
	{

        $user = Auth::user();
        $id = Auth::id();

		$this->validate($request,[
        'gnump'=> 'required',
		'gnumh' => 'required',
		'gnumw' =>'required',
		'gnump1' => 'required',
		'gnump2' =>'required',
		'gnump3' =>'required',
		'gnump4' => 'required',
		'gnump5' => 'required',
		'gnump6' =>'required',
		'gnump7' => 'required',
		'gnump8' => 'required',
		'gnump9' =>'required',
		'gnump10' => 'required',
		'gnump11' =>'required',

		'gnump13' => 'required',
		'photo1' => 'required | image',


        ]);

        $photo = $request->photo1;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('/uploads/posts',$newPhoto);

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
			'gnump12' => $id,

			'gnump13' => $request->gnump13,
			'photo1' => '/uploads/posts/'.$newPhoto,


        ]);
        auth()->user()->update($request->all());

        return redirect()->back() ;


	}



	public function show(Place $id)
	{
		$place =Place::where('id', $id)->first();
		return view('place.show', compact('place'));
	}


	public function edit($id)
	{
		$place =Place::find($id);
		return view('place.edit')->with('place',$place);
	}

	public function update(Request $request,  $id )
	{
  $place = Place::find( $id ) ;
        $this->validate($request,[
			'gnumh' => 'required',
			'gnumw' =>'required',
			'gnump1' => 'required',
			'gnump2' =>'required',
			'gnump3' =>'required',
			'gnump4' => 'required',
			'gnump5' => 'required',
			'gnump6' =>'required',
			'gnump7' => 'required',
			'gnump8' => 'required',
			'gnump9' =>'required',
			'gnump10' => 'required',
			'gnump11' =>'required',


			'gnump13' => 'required',
			'photo1' => 'required | image',
		]);

     //   dd($request->all());

    if ($request->has('photo')) {
        $photo = $request->photo1;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$newPhoto);
        $place->photo1 ='uploads/posts/'.$newPhoto ;
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
		$place->gnump13 = $request->gnump13;
    $place->save();


	}

public function destroy(Place $id)
	{
		$place = Place::where('id' , $id )->where('user_id', Auth::id())->first();
		if ($place === null) {
		   return redirect()->back() ;
	   }
	   $place->delete($id);
	   return redirect()->back() ;
	}


	public function softDelete( $id)
    {
         $place = Place::find($id)->delete();

        return redirect()->route('places.index')
            ->with('تمت', 'تم الإخفاء بنجاح');
}

public function deleteForEver  	( $id)
{
	$place = Place::withTrashed()->where('id' ,  $id )->first() ;
	$place->forceDelete();
	return redirect()->back() ;
}

public function backFromSoftDelete( $id)
{
	$place = Place::withTrashed()->where('id' ,  $id )->first() ;
	$place->restore();
	return redirect()->back() ;
}
}
