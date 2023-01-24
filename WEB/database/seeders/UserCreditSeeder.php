<?php

namespace Database\Seeders;

use App\Models\Transaction_type;
use App\Models\UserCredit;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCredit::factory(500)->create();

        $vendors = [
            ['name' => 'iDEAL', 'image_url' => 'https://www.ideal.nl/cms/themes/ideal_nl/img/ideal_logo.svg', 'gateway_url' => 'https://test.test/gateway/v3/test'],
            ['name' => 'PayPal', 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/31/PayPal_Logo2014.svg', 'gateway_url' => 'https://test.test/gateway/v3/test'],
            ['name' => 'Mastercard', 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg', 'gateway_url' => 'https://test.test/gateway/v3/test'],
        ];

        $t_types = [
            ['name' => 'topup', 'increase' => true],
            ['name' => 'spent', 'increase' => false],
            ['name' => 'refund', 'increase' => true],
            ['name' => 'fine', 'increase' => false],
            ['name' => 'manual compensation', 'increase' => true],
            ['name' => 'manual penalty', 'increase' => false]
        ];

        foreach($t_types as $type) {
            Transaction_type::create($type);
        }

        foreach($vendors as $vendor) {
            Vendor::create($vendor);
        }
    }
}
