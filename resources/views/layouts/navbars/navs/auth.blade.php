<!-- Navbar -->
<div class="container-fluid">
    <nav class="navbar navbar-dark " style="font-size:21px;background:#ffffff;background-color: #153257;outline-color:#ffffff;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <large style="text-align:center;font-family:Amiri,serif;font-size:38pt;color:rgb(251, 255, 0);">محافظة الدقهلية
        </large>
        <a class="navbar-brand" href="{{ route('places.index') }}">
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    </li>
                </ul>

    </nav>
</div>