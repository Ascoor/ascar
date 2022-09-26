<!-- Navbar -->
<div class="container-fluid">
    <nav class="navbar navbar-dark "
        style="font-size:21px;background:#ffffff;background-color: #153257;outline-color:#ffffff;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="nav-header" style="text-align:center;font-family:Amiri,serif;font-size:48px;color:#f7ce17;">محافظة الدقهلية
        </div>
<div class="form-input">

    <form action="{{ route('search') }}" method="GET">
        @csrf
        <input style="border-bottom: #fff;" type="text" name="search" required/>
        <button class="btn btn-success" type="submit">بحث</button>
    </form>
</div>


        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/img/Coat.png" class="me-2" height="100" width="100" alt="MDB Logo" loading="lazy" />

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    </li>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الحساب
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('الإعدادت') }}</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('ملف المستخدم') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('تسجيل الخروج') }}</a>

                    </li>
                </ul>

    </nav>
</div>
