<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use App\Models\Room;
use App\Models\Pricing as PricingModel;
class Pricing extends Component
{
    public $set_id;
    public $action='show';
    public $room_id;
    public $creating=false;

    public $hours;
    public $price;
    public function mount($room_id)
    {
        $this->room_id=$room_id;
    }

    public function getRoomProperty()
    {
        return Room::where('id', $this->room_id)->with('type')->first();
    }
    public function getPricingProperty()
    {
        return PricingModel::where('id', $this->set_id)->first();
    }
    public function render()
    {
        return view('livewire.branch.pricing',[
            'pricings'=>PricingModel::where('room_id',$this->room_id)->paginate(10)
        ])
        ->layout('layouts.branch');
    }

    public function show()
    {
        $this->action='show';
        $this->set_id=null;
    }

    public function createPricing()
    {
        $this->validate([
            'hours'=>'required',
            'price'=>'required|numeric'
        ]);

        PricingModel::create([
            'hours'=>$this->hours,
            'price'=>$this->price,
            'room_id'=>$this->room_id
        ]);

        $this->reset([
            'hours',
            'price'
        ]);

        $this->creating=false;
        session()->flash('success', 'Pricing has been created successfully');
    }
}