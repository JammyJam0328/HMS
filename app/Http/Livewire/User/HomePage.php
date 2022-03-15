<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.user.home-page')
            ->layout('layouts.user');
    }
}