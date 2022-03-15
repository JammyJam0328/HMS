<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use App\Models\Room;
use App\Models\Pricing;
use App\Models\Type;
use Livewire\WithPagination;
class MyBranch extends Component
{
    use WithPagination;
    public $set_id;
    public $action='show';
    public $types=[];
    // data
    public $type;
    public $number_of_units;
    public $description;
    // end data
    public function show()
    {
        $this->action='show';
        $this->set_id=null;
    }
    public function getRoomProperty()
    {
        return Room::where('id', $this->set_id)->first();
    }
    public function mount()
    {
        $this->types=Type::all();
    }
    public function render()
    {
        return view('livewire.branch.my-branch',[
            'rooms'=>Room::where('branch_id',auth()->user()->branch_id)->with(['type'])->paginate(10)
        ])
        ->layout('layouts.branch');
    }

    public function createRoom()
    {
        $this->validate([
            'type'=>'required|in:'.implode(',',Type::pluck('id')->toArray()),
            'number_of_units'=>'required|numeric',
            'description'=>'required'
        ]);
        Room::create([
            'type_id'=>$this->type,
            'number_of_units'=>$this->number_of_units,
            'description'=>$this->description,
            'branch_id'=>auth()->user()->branch_id
        ]);
        $this->reset([
            'type',
            'number_of_units',
            'description'
        ]);
        $this->show();
        session()->flash('success','Room created successfully');
    }


}