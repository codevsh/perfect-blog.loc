<div class="card">
    @if (session('success'))
        <div class="card-header bg-success">
            <p class="text-white">{{ session('success') }}</p>
        </div>
    @endif
    <div class="card-body">


        <form wire:submit='send_text'>
            <div class="form-group mb-3">
                <label for="">{{ __('Your Name') }}</label>
                <input type="text" name="name" id=""
                    class="form-control bg-white @error('name') border-danger @enderror" autofocus wire:model='name'>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="">{{ __('Your Email') }}</label>
                <input type="email" name="email" id=""
                    class="form-control bg-white @error('email') border-danger @enderror" autofocus wire:model='email'>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="">{{ __('Subject') }}</label>
                <input type="text" name="subject" id=""
                    class="form-control bg-white @error('subject') border-danger @enderror" autofocus
                    wire:model='subject'>
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="">{{ __('Your Message') }}</label>
                <textarea class="form-control bg-white @error('text') border-danger @enderror" name="message" wire:model='text'
                    rows="3"></textarea>
                @error('text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn-main">{{ __('Send') }}</button>
        </form>
    </div>
</div>
