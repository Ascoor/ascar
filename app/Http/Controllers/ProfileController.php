<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $id = Auth::id();
        if ($user->profile == null) {
           $profile = Profile::create([
            'nickname' => 'مسئول',
            'user_id'	 => $id,
            'place' => 'المقر',
            'postion'	 => 'مدير',

           ]);
        }
        return view('profile.edit')->with('user',$user);



    }

    public function update(Request $request )
    {

        $this->validate($request,[

            'nickname' => 'required',
            'place'    => 'required',
            'postion'	   => 'required',
        ]);



        $user = Auth::user();
        $user->name = $request->name ;
        $user->profile->nickname = $request->nickname ;
        $user->profile->place = $request->place ;
        $user->profile->postion = $request->postion ;
        $user->save();
        $user->profile->save();
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));

    }

/**
 * Change the password
 *
 * @param  \App\Http\Requests\PasswordRequest  $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function password(PasswordRequest $request)
{
    auth()->user()->update(['password' => Hash::make($request->get('password'))]);

    return back()->withStatusPassword(__('Password successfully updated.'));
}
}
