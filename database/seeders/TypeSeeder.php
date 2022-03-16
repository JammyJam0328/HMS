<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Room;
use App\Models\Branch;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $single =Type::create([
            'name' => 'Single',
            'description' => 'Single Room',
        ]);

        $double = Type::create([
            'name' => 'Double',
            'description' => 'Double Room',
        ]);
       $queen = Type::create([
            'name' => 'Queen',
            'description' => 'Queen Room',
        ]);
        $branches = Branch::all();
        foreach ($branches as $branch) {
            Room::create([
                'branch_id' => $branch->id,
                'type_id' => $single->id,
                'description' => 'This room is good for one people',
                'number_of_units'=>'50',
            ]);
            Room::create([
                'branch_id' => $branch->id,
                'type_id' => $double->id,
                'description' => 'This room is good for two people',
                'number_of_units'=>'50',
            ]);

            Room::create([
                'branch_id' => $branch->id,
                'type_id' => $queen->id,
                'description' => 'This room is good for two people',
                'number_of_units'=>'50',
            ]);
          
        }
    }
}