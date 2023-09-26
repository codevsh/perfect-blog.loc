<div class="col-md-4">
    <div class="position-sticky mb-3" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">{{ __('About') }}</h4>
            <p class="mb-0">{{ __('Your ad could be here.') }}</p>
        </div>

        <div class="p-4">
            <h4 class="mb-4">{{ __('Categories') }}</h4>
            <ul class="nav flex-column p-0">
                @foreach ($categories as $category)
                    <li class="nav-item px-0">
                        <a class="nav-link text-muted px-0" href="#"><i class="fas fa-angle-right me-3"></i>
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>

        <div class="widget widget-tags p-4">
            <h4 class="mb-4">{{ __('Tag Cloud') }}</h4>
            <div class="tag-block">
                @foreach ($tags as $tag)
                    <a class="tag-link text-decoration-none mb-3
                {{ request()->segment(1) == 'show-tag' && request()->segment(2) == $tag->id ? ' active' : '' }}
                "
                        href="#">
                        <span class="tag">{{ $tag->title }}</span>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="widget widget-latest-posts">
            <h3 class="mb-4">{{ __('Popular Posts') }}</h3>
            @foreach ($likedArticles as $item)
                <div class="row g-0 border rounded overflow-hidden d-flex shadow-sm h-md-250 position-relative mb-3"
                    style="font-size: 13px !imprtant;">
                    <div class="col py-2 px-2 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-1 text-primary">{{ $item->category->title }}</strong>
                        <h5 class="mb-0">{{ $item->title }}</h5>
                        <div class="mb-1 text-muted">
                            {{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</div>
                        {{-- <p class="card-text mb-auto">{!! mb_strimwidth($item->description, 0, 50, '(...)') !!}</p> --}}
                        {{-- <a href="{{ route('main.show', $item) }}" class="stretched-link">{{ __('Continue reading') }}</a> --}}
                    </div>
                    <div class="col d-none d-lg-block">
                        <img class="img-fluid" src="{{ Storage::url($item->prev_img) }}" alt="{{ $item->title }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
