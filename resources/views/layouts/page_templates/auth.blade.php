@include('layouts.navbars.navs.auth')
s

<div class="container" style="background: rgb(221, 225, 248)">
    <div class="container" style="align-items: center;background:rgb(220, 225, 255);">
        <div class="jumbotron jumbotron-fluid" style="color:rgb(0, 46, 65); ">
            <div class="card-body">

                @yield('content')

                @include('layouts.footers.auth')
            </div>
        </div>
