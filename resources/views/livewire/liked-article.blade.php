<div class="row">
    <div class="col-12">
        <form class="d-flex">
            @auth
                @if (auth()->user()->likedArticle->contains($article_id))
                    <button type="submit" class="btn btn-dark ms-auto" wire:click.prevent='likeUserArticle({{ $article_id }})'>
                        <i class="fas fa-thumbs-up fa-lg me-2"></i>
                        <span class="text-light fs-6" style="font-size: 1.5rem; font-weigh:bold;">({{ $countLikes }})</span>

                    </button>
                @else
                    <button type="submit" class="btn btn-primary ms-auto" wire:click.prevent='likeUserArticle({{ $article_id }})'>
                        <i class="fas fa-thumbs-up fa-lg me-2"></i>
                        <span class="text-light fs-6" style="font-size: 1.5rem; font-weigh:bold;">({{ $countLikes }})</span>
                    </button>
                @endif
            @else
                <button type="submit" class="btn btn-link disabled ms-auto">
                    <i class="fas fa-thumbs-up fa-lg"></i>
                        <span class="text-dark fs-6" style="font-size: 1.5rem; font-weigh:bold;">({{ $countLikes }})</span>
                </button>
            @endauth

        </form>
    </div>
</div>
