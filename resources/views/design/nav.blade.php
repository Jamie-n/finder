
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <a>
                <img class="logo-img opacity opacity-transition" src="{{asset('images/branding/logo.svg')}}" alt="Finder Logo">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item">
                    <x-nav-link :route="route('home')" routeName="home" value="Home"/>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-4">New Cars</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-4">Used Cars</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-4">Valuation</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-4">Why us?</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-4">FAQ's</a>
                </li>
            </ul>

            <div class="text-end">
                @guest()
                <x-nav-link class="d-inline-block me-3 p-2" :route="route('login')" routeName="login" value="Sign-in"/>
                @else
                    <x-nav-link class="d-inline-block me-3 p-2" :route="route('logout')" routeName="logout" value="Sign-Out"/>
                @endif
            </div>
        </div>
    </div>

