@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row">
		<h2>Some text</h2>
		<hr/>
		
		 <div id="wrapper">
        
    

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i> 
                    
                </li>
                <li>
                    <a href="#"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span>  </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">Section </span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                         
                        
</a>


                    
        
        <!-- /#page-content-wrapper -->

   
    <!-- /#wrapper -->





        
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
