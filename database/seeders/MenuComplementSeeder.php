<?php

namespace Database\Seeders;

use App\Models\MenuComplement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuComplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_id' => '1',
                'complement_id' => '8'
            ],
            [
                'menu_id' => '1',
                'complement_id' => '9'
            ],
            [
                'menu_id' => '1',
                'complement_id' => '10'
            ],
            // [
            //     'menu_id' => '1',
            //     'complement_id' => '4'
            // ],
            // [
            //     'menu_id' => '1',
            //     'complement_id' => '5'
            // ],
            // [
            //     'menu_id' => '1',
            //     'complement_id' => '6'
            // ],
            // [
            //     'menu_id' => '1',
            //     'complement_id' => '7'
            // ],
        ];

        MenuComplement::insert($data);
    }
}
