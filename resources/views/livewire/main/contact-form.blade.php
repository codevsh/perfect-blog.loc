<div class="card">
    @if (session('success'))
        <div class="card-header bg-success">
            <p class="text-white">{{ session('success') }}</p>
        </div>
    @endif
    <div class="card-body">


        <form wire:submit='send_text'>
            <div class="form-group mb-3">
                <label for="contact_name">{{ __('Your Name') }}</label>
                <input type="text" name="name" id="contact_name"
                    class="form-control bg-white @error('name') border-danger @enderror" autofocus autocomplete="name" wire:model='on'>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="contact_email">{{ __('Your Email') }}</label>
                <input type="email" name="email" id="contact_email"
                    class="form-control bg-white @error('email') border-danger @enderror" autofocus autocomplete="email" wire:model='on'>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="contact_subject">{{ __('Subject') }}</label>
                <input type="text" name="subject" id="contact_subject"
                    class="form-control bg-white @error('subject') border-danger @enderror" autofocus
                    wire:model='subject'>
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="contact_message">{{ __('Your Message') }}</label>
                <textarea class="form-control bg-white @error('text') border-danger @enderror" name="message" id="contact_message" wire:model='text'
                    rows="3"></textarea>
                @error('text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn-main">{{ __('Send') }}</button>
        </form>
    </div>
</div>
