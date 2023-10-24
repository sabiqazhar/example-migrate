<?php

namespace Database\Seeders;

use App\Models\Complement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Saus Mushroom',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-mushroom.png'
            ],
            [
                'name' => 'Saus Creamy Pesto',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-creamy-pesto.png'
            ],
            [
                'name' => 'Saus Chilli Fire',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-chili-fire.png'
            ],
            [
                'name' => 'Saus Barbeque',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-barbeque.png'
            ],
            [
                'name' => 'Saus Black Pepper',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-chili-fire.png'
            ],
            [
                'name' => 'Saus Sambal Jeruk',
                'type' => 'Saus',
                'image'=> 'foto/menu/saus-sambal-jeruk.png'
            ],
            [
                'name' => 'Salad Tartar',
                'type' => 'Salad',
                'image'=> 'foto/menu/salad.png'
            ],
            [
                'name' => 'Salad Honey',
                'type' => 'Salad',
                'image'=> 'foto/menu/salad.png'
            ],
            [
                'name' => 'Salad Mustard',
                'type' => 'Salad',
                'image'=> 'foto/menu/salad.png'
            ],
            [
                'name' => 'Salad Lime Dressing',
                'type' => 'Salad',
                'image'=> 'foto/menu/salad.png'
            ],
        ];

        Complement::insert($data);
    }
}
