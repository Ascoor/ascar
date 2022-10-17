<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





    <title>

        {{ __($titlePage) }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />


    <!---Font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/sb-1.3.4/datatables.min.css" />
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.12.1/ b-2.2.3/sc-2.0.7/sb-1.3.4/sl-1.4.0/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />


    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/app.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/settings.js" rel="stylesheet" />


</head>

<body>



    <body class="{{ $class ?? '' }}">
        @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
            @csrf
        </form>
        @include('layouts.page_templates.auth')
        @endauth
        @guest()
        @include('layouts.page_templates.guest')
        @endguest

























        <!-- Optional JavaScript; choose one of the two! -->
        <!--- Option 1: jQuery and Bootstrap Bundle (includes Popper)

        ----->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
            integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
        </script>

        <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.7/sb-1.3.4/datatables.min.js">
        </script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
        </script>



        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"

     in
tegrity
="sha38
4-9/reF
TGAW83E
W2RDu2S
0VKaIza
p3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>

    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
    integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK" crossorigin="anonymous">
</script>
---->

    </body>

</html>