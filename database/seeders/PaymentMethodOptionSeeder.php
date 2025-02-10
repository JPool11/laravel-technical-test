<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PaymentMethodOption;
use App\Models\PaymentMethod;

class PaymentMethodOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethodOption::factory()
        ->has(PaymentMethod::factory(5))
        ->create();
    }
}
