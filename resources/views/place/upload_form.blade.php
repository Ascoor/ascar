@extends('layouts.app', ['activePage' => 'uploadform', 'titlePage' => __('رفع ملفات  المتغير')])

@section('content')
       
<div class="content">
  <div class="container-fluid">

      <div class="col-md-12">
        
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">المتغير رقم </h4>
            <p class="card-category">{{ __(' مرفقات المتغير') }}</p>
          </div>
          <div class="card-body">

      
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"> <img src="/32114.svg" width="80" /></div>
<div class="col-md-8"><h2>Laravel Multiple File Uploading With Bootstrap Form</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/multiuploads" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="Product Name">Product Name</label>
<input type="text" name="name" class="form-control"  placeholder="Product Name" >
</div>
<label for="Product Name">Product photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>
</div>
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