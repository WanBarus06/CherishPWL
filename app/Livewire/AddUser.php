<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class AddUser extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function addNewUser(){
        
        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' =>$this->password
        ]);

        return redirect()->to('/registerr');
    }
    public function render()
    {
        return view('livewire.add-user');
    }
}
