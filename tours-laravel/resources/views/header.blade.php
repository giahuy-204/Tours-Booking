<header class="header" id="header">
    <nav class="nav container">
        <div class="nav__logo">
            <img src="/sources/assets/img/favicon.png" alt="" >
            <a href="/index" class="nav__logo">Wanderer</a>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="/index" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="/about" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="#place" class="nav__link">Places</a>
                    <div class="dropdown-content">
                        @foreach ($type_tours as $tours)
                        <a href="/places/{{$tours->id}}">{{$tours->name}}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav__item">
                    @if(Session::has('user'))	
                        <a href="#" class="nav__link">Welcome, {{Session('user')->last_name}} {{Session('user')->first_name}} </a>
                            <div class="dropdown-content">
                                <!-- <a href="#">Setting</a> -->
                                <a href="/logout">Logout</a>
                            </div>
                    @else
                        <a href="/login" class="nav__link">Login</a>
                    @endif
                </li>
            </ul>

            <div class="nav__dark">
                <!-- Theme change button -->
                <span class="change-theme-name">Dark mode</span>
                <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>

            <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line"></i>
        </div>
    </nav>
</header>