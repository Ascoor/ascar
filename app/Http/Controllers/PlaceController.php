<?php

namespace App\Http\Controllers;

use 	Auth;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PlaceController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		
		$places = Place::all();
		return view('place.index');
	}



	/** Trashed places */
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
		'gnump12' => Auth::id(),

		'gnump13' => 'required',
		'photo1' => 'required | image',
		'photo2' => 'required | image',
		'photo3' => 'required | image',
		'photo4' => 'required | image',
  

	]);
			
	  $photo1 = $request->photo1;
	  $newPhoto1 = time().$photo1.getClientOrginalName();
	  $photo1->move('uploads/posts', $newPhoto1); 
	  $photo2 = $request->photo2;
	  $newPhoto2 = time().$photo2.getClientOrginalName();
	  $photo2->move('uploads/posts', $newPhoto2); 
	  $photo3 = $request->photo3;
	  $newPhoto3 = time().$photo3.getClientOrginalName();
	  $photo3->move('uploads/posts', $newPhoto3); 
	  $photo4 = $request->photo4;
	  $newPhoto4 = time().$photo4.getClientOrginalName();
	  $photo4->move('uploads/posts', $newPhoto4) ;
	
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
	'gnump12' => Auth::id(),
	'gnump13' => $request->gnump13,
	'gnump14' => '/uploads/posts/'.$newPhoto1,
	'gnump15' => '/uploads/posts/'.$newPhoto2,
	'gnump16' => '/uploads/posts/'.$newPhoto3,
	'gnump17' =>'/uploads/posts/'.$newPhoto4,
			
]);

return redirect()->back()->with('تمت', 'تمت الإضافة بنجاح');
	} 	

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Place $place
	 * @return \Illuminate\Http\Response
	 */
	public function show(Place $id)
	{
		$place =Place::where('id', $id)->first();
		return view('place.show', compact('place'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Place$place
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$place =Place::find($id);
		return view('place.edit')->with('place',$place);
	}

	public function update(Request $request,  $id )
	{
		$Place= Place::find($id);
		$request->validate([
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
			'photo2' => 'required | image',
			'photo3' => 'required | image',
			'photo4' => 'required | image',
		]);
		if($request->has('photo	')){
			$photo1 = $request->photo1;
			$newPhoto1 = time().$photo1.getClientOrginalName();
			$photo1->move('uploads/posts', $newPhoto1); 
			$photo2 = $request->photo2;
			$newPhoto2 = time().$photo2.getClientOrginalName();
			$photo2->move('uploads/posts', $newPhoto2); 
			$photo3 = $request->photo3;
			$newPhoto3 = time().$photo3.getClientOrginalName();
			$photo3->move('uploads/posts', $newPhoto3); 
			$photo4 = $request->photo4;
			$newPhoto4 = time().$photo4.getClientOrginalName();
			$photo4->move('uploads/posts', $newPhoto4) ;
			$place->save();
		}
		$place->gnump = $request->gnump;
		$place->gnumh = $request->gnumh;
		$place->gnumw = $request->gnumw;
		$place->gnump1 = $request->gnump1;
		$place->gnump2 = $request->gnump2;
		$place->gnump3 = $request->gnump3;
		$place->gnump4 = $request->gnump4;
		$place->gnump5 = $request->gnump5;
		$Place->gnump6 = $request->gnump6;
		$place->gnump7 = $request->gnump7;
		$place->gnump8 = $request->gnump8;
		$place->gnump9 = $request->gnump9;
		$place->gnump10 = $request->gnump10;
		$place->gnump11 = $request->gnump11;
		$place->gnump12 =  Auth::id();
		$place->gnump13 = $request->gnump13;


		return redirect()->route('places.index')
			->with('تمت', 'تم التحديث بنجاح');
	}

/**
 * 
 public function destroy(Place $place)
 {
	 $place->delete();
	 return redirect()->route('places.index')
	 ->with('تمت', 'تم الحذف نهائيا بنجاح');
	}
	
	*/
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