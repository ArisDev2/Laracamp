<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Tech stack kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Full Stack Mern Javascript'
            ],
            [
                'camp_id' => 1,
                'name' => 'I Mac Pro 2021 And Display'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Monitoring Progress'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Courses Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => 'Future Job Opportunity'
            ]
        ];

        CampBenefit::insert($campBenefits);
    }
}
