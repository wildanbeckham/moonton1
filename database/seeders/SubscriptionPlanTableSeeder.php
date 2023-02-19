<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subscriptionPlan = [
            [
                'name' => 'Basic',
                'price' => 200000,
                'active_period_in_month' => 3,
                'features' => json_encode(['features1', 'features2']),
            ],
            [
                'name' => 'Premium',
                'price' => 800000,
                'active_period_in_month' => 6,
                'features' => json_encode(['features1', 'features2', 'features3', 'features4']),
            ],
        ];

        SubscriptionPlan::insert($subscriptionPlan);
    }
}
