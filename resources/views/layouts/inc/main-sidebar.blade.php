<div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">{{ __('About') }}</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your
                publication, writers, content, or something else entirely. Totally up to you.</p>
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

        <div class="widget widget-tags py-3">
            <h3 class="mb-4">{{ __('Tag Cloud') }}</h3>
            <div class="tag-block">
                @foreach ($tags as $tag)
                <a class="tag-link text-decoration-none mb-3
                {{ (request()->segment(1) == 'show-tag' && request()->segment(2) == $tag->id) ? ' active': '' }}
                " href="#">
                    <span class="tag">{{ $tag->title }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
