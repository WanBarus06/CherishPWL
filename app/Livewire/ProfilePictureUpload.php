<?php

namespace App\Livewire;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProfilePictureUpload extends Component
{
    use WithFileUploads;

    public $profilePicture;
    public $showUploadForm = false;

    protected $rules = [
        'profilePicture' => 'image|max:1024', // 1MB Max
    ];

    public function toggleUploadForm()
    {
        $this->showUploadForm = !$this->showUploadForm;
    }

    

    public function save()
    {
        $this->validate();

        $user = Auth::user();

        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        $path = $this->profilePicture->store('profile_pictures', 'public');

        $user->profile_picture = $path;
        $user->save();

        $this->profilePicture = null;
        $this->showUploadForm = false;

    }

    public function render()
    {
        return view('livewire.profile-picture-upload', [
            'user' => Auth::user()
        ]);
    }
}
