<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserUpdate extends Component
{

    public User $user;
    public $userId;

    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc',
        'user.phone' => 'max:10',
        'user.about' => 'max:200',
        'user.location' => 'min:3'
    ];

    public function mount($userId)
    {
        $this->userId = $userId; // Asigna el ID del usuario desde la ruta al atributo $userId
        $this->user = User::find($userId); // Obtén el usuario según el ID

        /*// Verifica si el usuario actual es el mismo que el que se está visualizando
        if (!$this->user || $this->user->id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }*/
    }

    public function save()
    {
        $this->validate();

        $this->user->save();

        return back()->with('status', "User information have been successfully UPDATED! 💫");
    }
    public function render()
    {
        return view('livewire.user.user-update');
    }
}
