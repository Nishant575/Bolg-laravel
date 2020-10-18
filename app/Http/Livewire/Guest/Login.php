<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Login extends Component
{

    public $email, $password, $hasError;

    public function render()
    {
        return view('livewire.guest.login');
    }

    public function submit()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->to('/');
        }
        else {
            $this->hasError = true;
            return;
        }
    }
}
