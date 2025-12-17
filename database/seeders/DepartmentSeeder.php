<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            'Emergency', 'Radiology', 'Cardiology', 'Pediatrics', 'Oncology',
            'Neurology', 'Orthopedics', 'Surgery', 'ICU', 'Pharmacy',
            'Dermatology', 'ENT', 'Urology', 'Gastroenterology', 'Nephrology',
            'OB-GYN', 'Pulmonology', 'Rehabilitation', 'Respiratory Care', 'Anesthesiology'
        ];

        foreach ($departments as $name) {
            \App\Models\Department::create([
                'name' => $name
            ]);
        }
    }
}
