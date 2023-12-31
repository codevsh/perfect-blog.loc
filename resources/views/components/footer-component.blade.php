{{-- <style>
    @media (max-width: 425px ) {

        footer .footer-menu {
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding-left: 0;
        }
        footer .footer-menu .nav-item{
            margin-right: 0!important;
        }
    }
</style> --}}
<footer class="footer text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons">
                    @foreach ($socials as $social)
                        <a href="{{ $social->link }}">{!! $social->icon !!}</a>
                    @endforeach
                    {{-- <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a> --}}
                </div>
                <div class="logo-footer text-center">
                    <a href="{{ route('main.index') }}">{{ config('app.name') }}</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <ul class="footer-menu text-uppercase d-flex justify-content-center">
                    <li class="nav-item"><a href="{{ route('main.index') }}" class="nav-link">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-muted"
                            href="{{ route('main.about') }}">{{ __('About') }}</a></li>
                    <li class="nav-item"><a class="nav-link text-muted"
                            href="{{ route('main.contact') }}">{{ __('Contact') }}</a></li>
                    <li class="nav-item"><a class="nav-link text-muted"
                            href="{{ route('profile') }}">{{ __('Profile') }}</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">F.A.Q.</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright-text">Copyright &copy;2024, Designed &amp; Developed by <a href="#">CodeVSH</a>
        </p>
    </div>
</footer>
