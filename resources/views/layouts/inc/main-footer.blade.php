{{-- <footer class="footer text-center py-5 bg-light mt-3">
    <div class="container">
        <div class="row">
            <div class="row col-md-12">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="logo-footer text-center">
                    <a href="{{ route('main.index') }}">{{ config('app.name') }}</a>
                </div>
                <ul class="footer-menu text-uppercase d-flex justify-content-center">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">F.A.Q.</a></li>
                </ul>
                <small>
                    <a href="#">Back to top</a>
                </small>
            </div>
            <div class="col-12 text-center">
                <small>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                        href="https://twitter.com/mdo">@mdo</a>.</small>
            </div>
            <div class="col-12 text-center">
                <p class="copyright-text">Copyright &copy;2024, Designed &amp; Developed by <a
                        href="#">CodeVSH</a></p>
            </div>
        </div>
    </div>
    </div>
</footer> --}}

<footer class="footer text-center">
    <div class="container">
        <div class="row col-md-12">
            <div class="social-icons">
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                {{-- @foreach ($links as $flink)
                    <a href="{!! $flink->link !!}"  target="_blank" >{!! $flink->icon !!}</a>
                @endforeach --}}
            </div>
            <div class="logo-footer text-center">
                <a href="{{ route('main.index') }}">{{ config('app.name') }}</a>
            </div>
            <ul class="footer-menu text-uppercase d-flex justify-content-center">
                <li class="nav-item"><a href="{{ route('main.index') }}" class="nav-link">{{ __('Home') }}</a></li>
                {{-- <li class="nav-item"><a href="{{ route('main.about') }}" class="nav-link">{{ __('About') }}</a></li>
                <li class="nav-item"><a href="{{ route('main.contact') }}" class="nav-link">{{ __('Contact') }}</a></li> --}}
                <li class="nav-item"><a href="#" class="nav-link">F.A.Q.</a></li>
            </ul>
            <p class="copyright-text">Copyright &copy;2024, Designed &amp; Developed by <a href="#">CodeVSH</a>
            </p>
        </div>
    </div>
</footer>
