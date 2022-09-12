<!-- Navbar -->
<div class="container-fluid">
    <nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <large style="color:rgb(251, 255, 0)">محافظة الدقهلية</large>
        <span class="navbar-toggler-icon">
        </span>
        <img
        src="/img/Coat.png"
        class="me-2"
        height="50"
        width="50"
        alt="MDB Logo"
        loading="lazy"
        />


        <a class="navbar-brand" href="{{ route('places.index') }}">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
            <a class="nav-link" href="{{ route('places.index') }}">الصفحة الرئيسية <span class="sr-only">(current)</span></a>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                مسلسل المتغير
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
                <a class="dropdown-item" href="{{ route('places.index') }}">{{ __('المتغيرات قيد التشغيل') }} </a>
                <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }} </a>
                <div class="dropdown-divider"></div>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الحساب
            </a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
            <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
        </li>
    </ul>

</nav>
</div>

