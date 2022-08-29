@extends('layouts.app', ['activePage' => 'index', 'titlePage' => __('لوحة التحكم')])

@section('content')
<div class="content">
<div class="container-fluid">
  











@endsection

@push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
  });
</script>
@endpush