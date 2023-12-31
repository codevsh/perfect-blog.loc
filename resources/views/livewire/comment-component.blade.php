<section class="comments">
    <div class="container">
        <div class="row">
            <div class="col-12 border-bottom pb-3">
                <div class="section-header border-bottom my-3">
                    <h3><span>{{ $article->comments->count() }}</span> {{ __('Comment(s)') }}</h3>
                </div>
                @if ($article->comments->count() > 0)
                    @foreach ($article->comments as $comment)

                        <div class="coment-single px-2 py-1 mb-1 border ">
                            <div class="comment-data d-flex">
                                <div class="user-image w-25">
                                    <img class="img-thumbnail w-50" src="{{ Storage::url($comment->user->profile_image) }}"
                                        alt="">
                                </div>
                                <div class="content w-100">
                                    <div class="user-comment d-flex justify-content-between w-100 border-bottom">
                                        <div class="user-data">
                                            <h4 class="mb-0 pb-0">{{ $comment->user->name }}</h4>
                                            <small
                                                class="text-secondary">{{ $comment->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="user-actions">
                                            @if (Auth::user() && Auth::user()->id == $comment->user->id)
                                                <a href="#" class="btn btn-secondary btn-sm mr-3"
                                                    wire:click.prevent='edit_comment({{ $comment->id }})'>{{ __('Edit') }}</a>
                                                <a href="#" class="btn btn-danger btn-sm mr-3"
                                                    wire:click.prevent='deleteComment({{ $comment->id }})'>{{ __('Delete') }}
                                                    <i class="fas fa-times"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="user-comment-content py-3">
                                        @if ($view_edit && $comment_id == $comment->id)
                                            <form wire:submit.prevent='update_comment({{ $comment->id }})'>
                                                <div class="form-control mb-3">
                                                    <textarea class="form-control" rows="2" wire:model='edit_content'></textarea>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"
                                                    wire:model='user_id'>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update') }}
                                                </button>
                                                <button type="button" class="btn btn-dark" wire:click='close'>
                                                    {{ __('Close') }}
                                                </button>
                                            </form>
                                        @else
                                            <p class="fst-italic text-dark">
                                                {{ $comment->content }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @auth
                    <div class="section-header border-bottom my-3">
                        <h3>{{ __('Leave you Comment') }}</h3>
                    </div>
                    @if ($view_edit)
                       not commented
                    @else
                        <form wire:submit.prevent='StoreComment'>
                            <div class="form-group mb-3">
                                <textarea class="form-control @error('content') border-danger @enderror" name="content" id="content" rows="3"
                                    placeholder="{{ __('comment') }}" wire:model='content'>{{ old('content') }}</textarea>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" wire:model='user_id'>


                            <button type="submit" class="btn-main">{{ __('Send Comment') }}</button>
                        </form>
                    @endif
                @endauth
                @guest
                    <p class="mt-3">{{ __('To leave a comment, please') }}
                        <a class="btn btn-link text-primary text-decoration-none"
                            href="{{ route('login') }}">{{ __('Login') }}</a> {{ __('or') }}
                        <a class="btn btn-link text-primary text-decoration-none"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    </p>
                @endguest

                @if (session()->has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                @if (session()->has('error'))
                    <p class="text-danger">{{ session('error') }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
