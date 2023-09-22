<div class="row">
    <div class="col-12">
        <form>
            @auth
                @if (auth()->user()->likedArticle->contains($article_id))
                    <button type="submit" class="btn btn-secondary" wire:click.prevent='likeUserArticle({{ $article_id }})'>
                        <i class="fas fa-thumbs-up fa-lg"></i>
                        <span class="text-light" style="font-size: 1.5rem; font-weigh:bold;">{{ $countLikes }}</span>

                    </button>
                @else
                    <button type="submit" class="btn btn-primary" wire:click.prevent='likeUserArticle({{ $article_id }})'>
                        <i class="fas fa-thumbs-up fa-lg"></i>
                        <span class="text-light" style="font-size: 1.5rem; font-weigh:bold;">{{ $countLikes }}</span>
                    </button>
                @endif
            @else
                <button type="submit" class="btn btn-link disabled">
                    <i class="far fa-thumbs-up fa-lg text-light"></i>
                    <i class="fas fa-thumbs-up fa-lg"></i>
                        <span class="text-light" style="font-size: 1.5rem; font-weigh:bold;">{{ $countLikes }}</span>
                </button>
            @endauth

        </form>
    </div>
</div>
