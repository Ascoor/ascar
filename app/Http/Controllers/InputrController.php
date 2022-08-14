<?php

namespace App\Http\Controllers;

use App\Inputr;
use Illuminate\Http\Request;

class InputrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputr = Inputr::latest();
        return view('inputr.index', compact('Inputr'));
    }

    public function create()
    {
        return view('inputr,create');
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

        $inputr = Inputr::create($request->all());
        return redirect()
            ->Route('inputr.index')
            ->with('تمت', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inputr  $inputr
     * @return \Illuminate\Http\Response
     */
    public function show(Inputr $inputrs)
    {
        return view('inputr.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inputr  $inputr
     * @return \Illuminate\Http\Response
     */
    public function edit(Inputr $inputr)
    {
        return view('inputr.edit', compact('Inputr'));
    }

    public function update(Request $request, Inputr $inputr)
    {
        $request->validate([
            'gnump' => 'required',
            'gnumh' => 'required',
            'gnumw' => 'required',
            'gnump1' => 'required',
            'gnump2' => 'required',
            'gnump3' => 'required',
            'gunmp4' => 'required',
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
        $inputr = Inputr::update($request->all(''));
        return redirect()
            ->route('inputr.index')
            ->with('تمت', 'تم التحديث بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inputr  $inputr
     * @return \Illuminate\Http\Response
     */
    public function show(Inputr $inputr)
    {
        return view('inputr.show', compact('Inputr'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inputr  $inputr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inputr $inputr)
    {
        $Inputr->delete();
        return redirect()
            ->route('inputr.index')
            ->with('تمت', 'تم الحذف  بنجاح');
    }
}
