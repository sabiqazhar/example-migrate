<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "image" => "foto/promo/maret-2.jpg",
                "type" => "pro",
                "promo_name"=> "MANTAP (Maret Siap Santap)",
                "description"=> "Bundling menu siap santap yang bikin kamu jadi lebih lahap. Dapatkan 3 pcs wingskuy beserta kentang/nasi aromatik dan segelas thai tea dengan harga spesial HANYA di bulan ini!",
                "outdate_promo"=> "2023-03-31",
                "detail_tutorial"=> "1. Dapat dipesan melalui online maupun offline 2. Tanpa minimum pembelian 3. Tidak dapat digabung dengan promo lain",
                "detail_condition"=> "1. Dapat dipesan melalui online maupun offline 2. Tanpa minimum pembelian 3. Tidak dapat digabung dengan promo lain"
            ]
        ];

        Promo::insert($data);
    }
}
