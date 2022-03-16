<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Booking extends Component
{
    public $branch_id;
    public function mount($branch_id)
    {
        $this->branch_id = $branch_id;
    }

    public function getBranchProperty()
    {
        return \App\Models\Branch::where('id',$this->branch_id)->with('rooms')->first();
    }

    public function render()
    {
        return view('livewire.user.booking')
        ->layout('layouts.user');
    }
}