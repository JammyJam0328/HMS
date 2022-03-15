<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.branch.dashboard')
         ->layout('layouts.branch');
    }
}