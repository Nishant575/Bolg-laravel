<?php

namespace App\Http\Livewire\Guest;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


class Signup extends Component
{

    public $name, $email, $password;

    public function render()
    {
        return view('livewire.guest.signup');
    }

    public function submit()
    {
        $data = $this->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return redirect()->route('login');
    }
}
