<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class UsersTable extends Component
{
    public $search = "";

    public function render()
    {
        $users = User::search($this->search)
             ->where('user_role', 'user')
             ->paginate(10);
        return view('livewire.users-table', compact('users'));
    }
}
