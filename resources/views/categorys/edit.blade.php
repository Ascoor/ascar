<blade @section('content') @if($message=Session::get('تمت')) <div class="alert alert-success" role="alert">
    {{ $message }}
    </div>
    @endif
    @if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
        @endif


        <div class="container">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header"
                        style="color:rgb(255, 242, 64);background-color:#153257;align-items: center;text-align:center;">

                        <h3>تعديل التصنيف</h3>
                        <h4 class="display-6"> التصنيف : {{ $category->name }}</h4>


                        <p class="lead" style="text-align: center; padding-top: 20px;"></p>

                        <a class="btn btn-success" href="{{ route('categorys') }}">جميع التصنيفات</a>
                    </div>

                    @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    @endif


                    <div class="card-body">

                        <form action="{{ route('categorys.update', $category->id) }}" method="post">
                            <div class="form-group">
                                @csrf


                                <div class="form-group">
                                    <label for="exampleFormControlInput1">إسم التصنيف</label>
                                    <input type="text" name="name" value="{{ $category->name }}">



                                    <div class="form-group">

                                        <button class="btn btn-danger" class="form-group" type="submit">حفظ</button>
                                    </div>

                        </form>
                    </div>
                </div>
            </div>



            @endsection