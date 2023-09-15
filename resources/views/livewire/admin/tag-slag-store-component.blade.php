<div class="row">
    <div class="form-group col-6">
        <label for="title">{{ __('Tag title') }}<span class="text-danger">*</span>
        </label>
        <input type="text" name="title" id="title" class="form-control @error('title') border-danger @enderror"
            autofocus value="{{ old('title') }}" wire:model='title' wire:keyup='geterateSlug'>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="form-group col-6">
        <label for="slug">{{ __('Slug') }}<span class="text-danger">*</span>
        </label>
        <input type="text" name="slug" id="slug" class="form-control @error('slug') border-danger @enderror"
            autofocus value="{{ old('slug') }}" wire:model='slug'>
        @error('slug')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
</div>
