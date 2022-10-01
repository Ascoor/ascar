@extends('layouts.app', ['activePage' => 'place.test', 'titlePage' => __('اختلار')])

@section('content')

    <style>
        .wrap {
            padding: 30px 0;
        }
        h2 {
            margin-bottom: 30px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrap">

                    <h2>Laravel Multiple Image Upload Example</h2>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>

                        @foreach(Session::get('image') as $img)
                            <img src="images/{{ $img }}" style="width:100px;">
                        @endforeach
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your file.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL::to('/upload-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <input type="file" name="photo1[]" multiple>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
@endsection
