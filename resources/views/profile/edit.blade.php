@extends('layouts.app', ['activePage' => ' profile', 'titlePage' => __('user profile ')])
@section('content')
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<form method="PUT" action="{{Route('profile.update')}}" autocomplete="off" class="form-horizontal">
  @csrf
  @method('PUT')

<div class="card ">
<div class="card-header card-header-primary">
<h4 class="card-title">Edit Profile</h4>
<p class="card-category">User information</p>
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
<label class="col-sm-2 col-form-label">Nickname</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="nickname" id="input-nickname" type="text" value="{{$user->profile->nickname}}" required />

</div>
</div>
</div>
<div class="row">
  <label class="col-sm-2 col-form-label">postion</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="postion" id="input-postion" type="text" placeholder="Email" value="{{$user->profile->postion}}" required />

<div class="row">
  <label class="col-sm-2 col-form-label">place</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="place" id="input-place" type="email" value="{{user->profile->place}}" required />

</div>
</div>
</div>
<div class="row">
  <label class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-7">
  <div class="form-group">
  <input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="admin@material.com" required />
</div>
</div>
</div>
</div>
<div class="card-footer ml-auto mr-auto">
<button type="submit" class="btn btn-primary">Save</button>
</div>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form method="post" action="https://material-dashboard-laravel.creative-tim.com/profile/password" class="form-horizontal">
<input type="hidden" name="_token" value="8lWbZTZAmqFXByXpVMtPFyU6Pyhh89TCY0M9ORR4"> <input type="hidden" name="_method" value="put">
<div class="card ">
<div class="card-header card-header-primary">
<h4 class="card-title">Change password</h4>
<p class="card-category">Password</p>
</div>
<div class="card-body ">
<div class="row">
<label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" input type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label" for="input-password">New Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required />
</div>
</div>
</div>
</div>
<div class="card-footer ml-auto mr-auto">
<button type="submit" class="btn btn-primary">Change password</button>
</div>
</div>
</form>
</div>
</div>
@endsection
