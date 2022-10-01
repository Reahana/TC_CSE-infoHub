<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
 public function run()
    {
   
     Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Student']);
        Role::create(['name' => 'Teacher']);    }
}
