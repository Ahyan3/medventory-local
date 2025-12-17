<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use app\Models\Department;
use Illuminate\Support\Str; 

class StaffSeeder extends Seeder
{
    public function run()
    {
        $password = bcrypt('password'); // or same hash
        
        Department::all()->each(function($dept) use ($password) {
            Staff::create([
                'name' => fake()->name(),
                'position' => 'Staff',
                'department' => $dept->name, // matches schema
                'email' => fake()->unique()->safeEmail(),
                'status' => 'Active',
                'password' => $password,
                'remember_token' => Str::random(10),
            ]);
        });
    }
}