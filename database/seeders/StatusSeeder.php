<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj = new OrderStatus();
        $obj->name="Pending";
        $obj->save();

        OrderStatus::create([
            'name'=>'Deleted'
        ]);

        OrderStatus::create([
            'name'=>'Done'
        ]);

        OrderStatus::factory(10)->create();



    }
}
