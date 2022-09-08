@extends('layouts.app', ['activePage' => ' profile', 'titlePage' => __('user profile ')])
@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="card ">
          <div class="card-header card-header-primary">
             <h4 class="card-title">{{ __('Edit Profile') }}</h4>
             <p class="card-category">{{ __('User information') }}</p>
          </div>
          <div class="card-body ">
             @if(session('status'))
             <div class="row">
                <div class="col-sm-12">
                   <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                      </button>
              

            
             @endif
             <div class="form-row">
             <form method="PUT" action="{{ route('profile.update') }}" autocomplete="off" class="form-group">
             @csrf
             @method('PUT')
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="name" value="{{$user->email}}">
    
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}" >
    </div>
  <div class="form-group">
    <label for="inputAddress">Nickname</label>
    <input type="text" class="form-control" name="nickname" value="{{$user->profile->nickname}}" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">postion</label>
    <input type="text" class="form-control" name="postion" value="{{$user->profile->postion}}" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">place</label>
      <input type="text" class="form-control" name="place" value="{{$user->profile->place}}" >
  </div>
    <<div class="form-group">
       <button type="submit" class="btn btn-primary">Save</button>
      </div>
   </form>
</div>
@endsection
