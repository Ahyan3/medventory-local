<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EquipmentSeeder extends Seeder
{
    public function run()
    {
        $imageMap = [
            'autoclave' => 'autoclave.webp',
            'defibrillator' => 'defibrillator.webp',
            'ecg-machine' => 'ecg-machine.jpg',
            'infusion-pump' => 'infusion-pump.jfif',
            'nebulizer' => 'nebulizer.png',
            'oxygen-concentrator' => 'oxygen-concentrator.jfif',
            'patient-monitor' => 'patient-monitor.jpg',
            'ultrasound-machine' => 'ultrasound-machine.webp',
            'ventilator' => 'ventilator.webp',
            'x-ray-unit' => 'x-ray-unit.webp',
        ];

        $equipmentNames = [
            "Ventilator", "Defibrillator", "Infusion Pump", "Ultrasound Machine",
            "X-Ray Unit", "ECG Machine", "Patient Monitor", "Autoclave",
            "Nebulizer", "Oxygen Concentrator"
        ];

        foreach(Staff::take(10)->get() as $index => $staff) {
            $name = $equipmentNames[$index];
            $slug = Str::slug($name);

            Equipment::create([
                'staff_name' => $staff->name,
                'department_id' => ($index % 10) + 1,
                'equipment_name' => $name,
                'model_brand' => fake()->company(),
                'serial_number' => fake()->unique()->bothify('SN-####-????'),
                'quantity' => fake()->numberBetween(1, 5),
                'status' => 'available',
                'date_issued' => fake()->date(),
                'remarks' => 'Initial entry',
                'image_path' => "equipment_images/" . $imageMap[$slug],
            ]);
        }
    }
}
