<?php

namespace Database\Seeders;

use App\Models\Stop_type;
use App\Models\Stop;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stop_types = [
            ['name' => 'station', 'icon' => '\ue9f4'],
            ['name' => 'bus', 'icon' => '\ue530'],
        ];

        $stops = [
            ['name' => 'Eindhoven Centraal', 'stop_type_id' => 1, 'lat' => 51.4414165, 'lng' => 5.478717],
            ['name' => 'Eindhoven, WoensXL/ZH Catharina', 'stop_type_id' => 1, 'lat' => 51.46686064562121, 'lng' => 5.47495243659641],
            ['name' => 'Lieshout, N615/Deense Hoek', 'stop_type_id' => 2, 'lat' => 51.5115249, 'lng' => 5.5843946, 'group_label' => 'A'],
            ['name' => 'Lieshout, N615/Deense Hoek', 'stop_type_id' => 2, 'lat' => 51.5115599, 'lng' => 5.5855631, 'group_label' => 'B'],
            ['name' => 'Nuenen, Nuenen Centrum', 'stop_type_id' => 2, 'lat' => 51.472584504575096, 'lng' => 5.555361067688346, 'group_label' => 'A'],
            ['name' => 'Nuenen, Nuenen Centrum', 'stop_type_id' => 2, 'lat' => 51.472562367548875, 'lng' => 5.555467014948348, 'group_label' => 'B'],
            ['name' => 'Eindhoven, Eckartdal', 'stop_type_id' => 2, 'lat' => 51.4675099, 'lng' => 5.5044387, 'group_label' => 'A'],
            ['name' => 'Eindhoven, Eckartdal', 'stop_type_id' => 2, 'lat' => 51.4675003, 'lng' => 5.5049664, 'group_label' => 'B'],
            ['name' => 'Eindhoven, Summa College Sterrenln', 'stop_type_id' => 2, 'lat' => 51.4669431, 'lng' => 5.4973577, 'group_label' => 'A'],
            ['name' => 'Eindhoven, Summa College Sterrenln', 'stop_type_id' => 2, 'lat' => 51.4669195, 'lng' => 5.498433, 'group_label' => 'B'],
        ];

        foreach($stop_types as $type) {
            Stop_type::create($type);
        }

        foreach($stops as $stop) {
            Stop::create($stop);
        }
    }
}
