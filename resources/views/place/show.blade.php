@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('غرض المتغير')])

@section('content')

<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">عرض بيانات المتغير</h4>
    <p class="card-text">المتغير رقم {{ $place->gnump }}</p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container">


        <tr class="table-active">...</tr>

        <tr class="table-primary">...</tr>
        <tr class="table-secondary">...</tr>
        <tr class="table-success">...</tr>
        <tr class="table-danger">...</tr>
        <tr class="table-warning">...</tr>
        <tr class="table-info">...</tr>
        <tr class="table-light">...</tr>
        <tr class="table-dark">...</tr>

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
</div>




{!! $place->detail !!}
@endsection
