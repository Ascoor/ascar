<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('tag.index', compact('tags', $tags));
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
        return redirect()->back()->with('تمت', 'تم إضافة الحالة بنجاح');
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

        return redirect()->back()->with('تمت', 'تم التعديل بنجاح');
    }





    public function destroy(Request  $id)
    {
        $tag = Tag::find($id);
        $tag->destroy($id);
        return redirect()->back();
    }
}
