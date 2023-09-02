<div class="col-md-4 rounded" style="background-color: #efefef;">
    <div class="widget widget-profile py-3">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ Storage::url(Auth::user()->profile_image) }}" class="img-fluid rounded-start" alt="{{ Auth::user()->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                        <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="widget widget-links py-3">
        <h3 class="mb-4">{{ __('My Actions') }}</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cog mr-3"></i>
                    {{ __('Settings') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-thumbs-up mr-3"></i>
                    {{ __('Likes') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-comment mr-3"></i>
                    {{ __('Comments') }}</a>
            </li>

        </ul>
    </div>
</div>
