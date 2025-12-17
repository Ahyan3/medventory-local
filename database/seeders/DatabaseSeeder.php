<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment;
use App\Models\Issuance;
use App\Models\Request;
use App\Models\Staff;
use App\Models\User;
use App\Models\Settings;
use App\Models\HistoryLog;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
      Settings::create([
            'key' => 'system_title',
            'value' => 'Medventory: Medical Equipment Inventory System',
        ]);

        User::create([
        'name' => 'Administrator',
        'email' => 'admin@medventory.com',
        'password' => 'password123',
        'email_verified_at' => now(),
        'created_at' => now(),
    ]);
    $this->call([
        DepartmentSeeder::class,
        StaffSeeder::class,
        EquipmentSeeder::class,
    ]);
    }
    //php artisan migrate:fresh --seed
    //useful command to reset database and run seeders
    //php artisan storage:link
}
