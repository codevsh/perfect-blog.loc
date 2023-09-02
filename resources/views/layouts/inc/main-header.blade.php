<div class="container">
    <div class="row py-3 align-items-center">
        <div class="col-md-4 col-sm-12">
            <div class="social-icons my-auto">
                <a href="#"><i class="fab fa-telegram text-muted"></i></a>
                <a href="#"><i class="fab fa-linkedin text-muted"></i></a>
                <a href="#"><i class="fab fa-instagram text-muted"></i></a>
                <a href="#"><i class="fab fa-twitter text-muted"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="logo text-center">
                <a href="{{ route('main.index') }}">Perfect-Blog</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="login navbar-collapse">
                <ul class="top-menu nav ml-auto d-flex justify-content-end">
                    @guest
                        <li class="nav-item"><a class="nav-link text-muted"
                                href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li class="nav-item"><a class="nav-link text-muted"
                                href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.index') }}">Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();" href="{{ route('logout') }}">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <select class="form-control">
                            <option>EN</option>
                            <option>DE</option>
                            <option>FR</option>
                            <option>ES</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-center">
            <a class="nav-link text-muted" href="{{ route('main.index') }}">Home <span
                    class="sr-only">(current)</span></a>
            <a class="nav-link text-muted" href="#">About</a>
            <a class="nav-link text-muted" href="#">Contact</a>
            <a class="nav-link text-muted" href="{{ route('profile') }}">Profile</a>
            <a class="nav-link text-muted" href="{{ route('admin.index') }}">Settings</a>
        </nav>
    </div>
</div>
