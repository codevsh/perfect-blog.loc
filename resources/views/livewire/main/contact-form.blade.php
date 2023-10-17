<div class="card">
    <div class="card-body">


        <form action="">
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
                    class="form-control bg-white @error('subject') border-danger @enderror" autofocus wire:model='subject'>
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="">Your Message</label>
                <textarea class="form-control bg-white" name="message" wire:model='message' rows="3"></textarea>
            </div>
            <button type="submit" class="btn-main">Send</button>
        </form>
    </div>
</div>
