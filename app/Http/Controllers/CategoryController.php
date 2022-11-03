<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categorys = Category::all();
        return view('categorys.index')->with('categorys', $categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showcategory(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required'
        ]);
        $id = $request->category_id;
        $category = Category::where('id', $id)->firstOrFail();
        $categories = Category::all();
        $places = $category->places()->paginate(30);
        return view('place.export')->with('places', $places)->with('categorya', $category)->with('categories', $categories);
    }

    public function create()
    {
        return view('categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categorys')->with('تمت', 'تم الإضافة بنجاج');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categorys.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $this->validate($request, [
            'name' => 'required',


        ]);

        $category->name = $request->name;

        $category->save();

        return redirect()->route('categorys')
            ->with('تمت', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */


    public function softDeletes($id)
    {
        $category = Category::where('id', $id);
        if ($category === null) {
            return redirect()->back();
        }

        $category->delete($id);
        return redirect()->back()->with('تمت', 'تم الحذف ');
    }
}