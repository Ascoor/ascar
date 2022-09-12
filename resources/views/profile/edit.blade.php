@extends('layouts.app', ['activePage' => ' profile', 'titlePage' => __('user profile ')])
@section('content')

<div class="container">

<div class="card ">
<div class="card-header card-header-primary">
<h4 class="card-title">Edit Profile</h4>
<p class="card-category">User information</p>
</div>
<div class="card-body ">
   <form method="post" action="{{Route('profile.edit')}}" autocomplete="off" class="form-horizontal">
      @csrf
      @method('PUT')
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">name</label>
       <input type="text" class="form-control" value="{{$user->name}}" name="name">
     </div>

     <div class="form-group col-md-6">
       <label for="inputEmail4">email</label>
       <input type="email" class="form-control" value="{{$user->email}}" name="email">
     </div>
  
   <div class="form-row">
      <div class="form-group col-md-6">
         <label for="inputEmail4">nickname</label>
         <input type="text" class="form-control" value="{{$user->profile->nickname}}" name="nickname">
      </div>
      
      <div class="form-group col-md-6">
         <label for="inputEmail4">postion</label>
         <input class="form-control" name="postion" id="input-postion" type="text" value="{{$user->profile->postion}}"  />
      </div>
      
      
      <div class="form-group col-md-6">
         <label for="inputEmail4">place</label>
         <input class="form-control" name="place" id="input-postion" type="text" value="{{$user->profile->place}}"  />
         
         <div class="form-row">
            
            <button type="submit" class="btn btn-primary">update</button>
         </div>
 </form>
</div>
</div>
.<div class="container">

   
   .<div class="card text-left">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
         <h4 class="card-title">{{ __('Change password') }}</h4>
         <p class="card-category">{{ __('Password') }}</p>
         
         <form method="post" action="{{ route('password.request') }}" class="form-horizontal">
            @csrf
            @method('POST')
          
               @if (session('status_password'))
 
                  <div class="form-row">
            
                     <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
              
               @endif
            </div>
            <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                     <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password"    value="{{ $user->password }}" required />
                     @if ($errors->has('old_password'))
                     <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                     @endif
                     
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  </div>
              
                  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                        @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                        @endif
                
                     </div>
                   
                        <div class="form-group">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
              
                        </div>
                        </div>
            <div class="card-footer ml-auto mr-auto">
               <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
            </div>
         </div>
      </form>
   </div>
   </div>
   </div>
   </div>
</div>
</div>
</div>
@endsection
