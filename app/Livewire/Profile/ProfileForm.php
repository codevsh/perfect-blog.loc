<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class ProfileForm extends Component
{
    use WithFileUploads;
    public $user, $profile_image, $user_id, $old_image;

    #[Rule('nullable|image|max:1024')]
    public  $new_image;

    #[Rule('string')]
    public $name;

    #[Rule('email')]
    public $email;

    public function mount($user)
    {
        $this->user = $user;
        $this->old_image = $this->user->profile_image;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function update_info(User $user)
    {
        $this->validate();
        $fileName = '';
        $destination = public_path('storage\\' . $user->profile_image);
        if ($this->new_image !== null) {
            if (File::exists($destination)) {
                if ($destination !== public_path('storage\\profile/No-Image.jpg')) {
                    File::delete($destination);
                }
            }
            $fileName = $this->new_image->store('profile', 'public');
        }else{
            $fileName = $this->old_image;
        }
        $result = $user->save([
            $user->profile_image = $fileName,
            $user->name = $this->name,
            $user->email = $this->email
        ]);
        if ($result) {
            session()->flash('success', trans('Updated Successfully'));
        } else {
            session()->flash('error', trans('Not Update Successfully'));
        }
    }
    public function render()
    {
        return view('livewire.profile.profile-form');
    }
}
