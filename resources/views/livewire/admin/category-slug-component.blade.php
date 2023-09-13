    <div class="form-group">
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="title">{{ __('Category title') }}<span class="text-danger">*</span> </label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') border-danger @enderror" autofocus
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group col-6">
                        <label for="slug">{{ __('Slug') }}<span class="text-danger">*</span> </label>
                        <input type="text" name="slug" id="slug"
                            class="form-control @error('slug') border-danger @enderror" autofocus
                            value="{{ old('slug') }}">
                        @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="dropdown-divider"></div>
                <h3 class="text-center my-5">{{ __('Meta Data') }}</h3>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="meta_title">{{ __('Category meta_title') }}</label>
                        <input type="text" name="meta_title" id="meta_title"
                            class="form-control @error('meta_title') border-danger @enderror" autofocus
                            value="{{ old('meta_title') }}">
                        @error('meta_title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group col-6">
                        <label for="meta_keywords">{{ __('Category meta_keywords') }}</label>
                        <input type="text" name="meta_keywords" id="meta_keywords"
                            class="form-control @error('meta_keywords') border-danger @enderror" autofocus
                            value="{{ old('meta_keywords') }}">
                        @error('meta_keywords')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label for="meta_description">{{ __('Category meta_description') }}</label>
                    <textarea class="form-control @error('meta_description') border-danger @enderror" name="meta_description"
                        id="meta_description" rows="3">{{ old('meta_description') }}</textarea>
                    @error('meta_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-dark">{{ __('Create Category') }}</button>
            </form>
        </div>
    </div>
