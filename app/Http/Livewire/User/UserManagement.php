<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public function render()
    {
        $users = User::all();

        return view('livewire.user.user-management', ['users' => $users] );
    }
}
