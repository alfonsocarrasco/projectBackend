<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $phone;
    public $about;
    public $location;
    public $password;

    protected $rules = [
        'name' => 'required|max:40|min:3',
        'email' => 'required|email:rfc',
        'phone' => 'max:10',
        'about' => 'max:200',
        'location' => 'min:3',
        'password' => 'required|min:8',
    ];

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'about' => $this->about,
            'location' => $this->location,
            'password' => Hash::make($this->password),
        ]);

        return back()->with('status', "The User information have been successfully saved! 🍻");
    }

    public function render()
    {
        return view('livewire.user.user-create');
    }
}
