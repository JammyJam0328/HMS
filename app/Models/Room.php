<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    
    public function pricings()
    {
        return $this->hasMany(Pricing::class);
    }
}