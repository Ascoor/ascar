<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user();
        $id = Auth::id();
if ($user->profile == null) {$profile = Profile::create([
'nickname' => 'محرر',
'user_id' => $id,
'place' => 'الوحدة',
'postion' => 'ادمن',

]);
}
return view('profile.edit')->with('user',$user);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {   
        $this->validate($request , [
     
            'nickname' => 'required',
            'place' => 'required',
            'postion' =>'required',
        ]);

    $user = Auth::use();

    $user->profile->nickname = $request->nickname;
    $user->profile->place = $request->place;
    $user->profile->postion = $request->position;

    $user->profile->save();


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