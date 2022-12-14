<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Http\Request;
use PlaceTag;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('tag.index')->with('tags', $tags);
    }
    public function places($tagid)
    {
        $tag = $this->tags->find($tagid)->places()->paginate(12);

        return view('plce.plactags', compact('tag'));
    }


    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tag' => 'required',


        ]);

        $tag = Tag::create([
            'tag' => $request->tag,


        ]);

        return redirect()->route('tags')
            ->with('تمت', 'تم الإضافة بنجاح');
    }



    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tag.edit')->with('tag', $tag);
    }




    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $this->validate($request, [
            'tag' => 'required',


        ]);

        $tag->tag = $request->tag;

        $tag->save();

        return redirect()->route('tags')
            ->with('تمت', 'تم التعديل بنجاح');
    }





    public function softDeletes($id)
    {
        $Tag = Tag::find($id)->delete();


        return redirect()->route('tags')
            ->with('تمت', 'تم الحذف بنجاح');
    }
}
