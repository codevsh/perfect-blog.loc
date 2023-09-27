<div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form wire:submit.prevent='update_info({{ Auth::user() }})'>
        <div class="row">
            <div class="card">
                <div class="card-body">

                    @if ($new_image)
                        <img src="{{ $new_image->temporaryUrl() }}" class="w-25 mb-3" alt="{{ $user->name }}">
                    @else
                        <img src="{{ Storage::url($old_image) }}" class="w-25 mb-3" alt="{{ $user->name }}">
                    @endif
                    <div class="form-group mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control bg-white" id="inputGroupFile02" wire:model='new_image'>
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control bg-white" wire:model='name'>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="text" class="form-control bg-white" wire:model='email'>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-main">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
