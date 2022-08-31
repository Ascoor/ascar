@extends('layouts.app', ['activePage' => 'upload', 'titlePage' => __('مرفقات المتغير')])

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<             
<div class="content">
  <div class="container-fluid">

      <div class="col-md-12">
        
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">المتغير رقم </h4>
            <p class="card-category">{{ __(' مرفقات المتغير') }}</p>
          </div>
          <div class="card-body">
        <center>
        <span ><a  href="/places" >عودة للخلف </a></span></center>

</div>

<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="{{url('/multiuploads')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="Product Name">مرفقات المتغيرات</label>
<input type="text" name="filename1" class="form-control"  placeholder="Product Name" >
</div>
<label for="Product Name">Product photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="gnump11" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush