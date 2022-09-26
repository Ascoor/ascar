@extends('layouts.app', ['activePage' => ' profile', 'titlePage' => __('user profile ')])
@section('content')
<div class="content">
<div class="container pt-3-fluid">
<div class="row">
<div class="col-md-12">


   <form method="POST" action="{{route('profile.update')}}">
      @csrf
      @method('PUT')

<div class="card ">
  <div class="card">
    <div class="card-header card-header" style="
color: rgb(255, 242, 64);
background-color: #153257;
align-items: center;
text-align: center;">
<h4 class="card-title">تعديل الملف الشخصي</h4>
<p class="card-category"> بيانات المستخدم</p>
</div>
<div class="card-body ">
<div class="row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="{{$user->name}}" required="true" aria-required="true" />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label">nickname</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="nickname" type="text" value="{{$user->profile->nickname}}"  />

</div>
</div>
</div>
<div class="row">
  <label class="col-sm-2 col-form-label">postion</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="postion" id="input-postion" type="text" value="{{$user->profile->postion}}"  />
  </div>
  </div>
  </div>
<div class="row">
  <label class="col-sm-2 col-form-label">place</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="place" id="input-place" type="text" value="{{ $user->profile->place  }}"  />

</div>
</div>
</div>
<div class="row">
  <label class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="{{ $user->email }}" required />
</div>
</div>
</div>
</div>


<div class="card">
    <div class="card-body">
    <div class="card-header card-header" style="
color: rgb(255, 242, 64);
background-color: #153257;
align-items: center;
text-align: center;">
               <h4 class="card-title">{{ __('Change password') }}</h4>
    </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> password </label>
              <input type="password" name="password" class="form-control" >
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1"> confirm password </label>
              <input type="password" name="c_passowrd" class="form-control"  >
              </div>
    
            <div class="form-group">
             <button class="btn btn-success" type="submit"> update</button>
     </div>
   </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>
@endsection
