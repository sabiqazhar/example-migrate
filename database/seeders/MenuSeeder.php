<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 5; $i++) {
            $data = [
                [
                    "outlet_id" => $i,
                    "category_id" => '1',
                    "menu_name" => "Ayam Panggang Paha",
                    "image" => "foto/menu/ayam-kuy-hemat-paha.png",
                    "price" => "Rp 38.000",
                    "discount" => "",
                    "description" => "Ayam Panggang Paha + Kentang/Nasi Aromatik + Saus + Salad + Infused Water",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '1',
                    "menu_name" => "Ayam Panggang Dada",
                    "image" => "foto/menu/ayam-kuy-hemat-dada.png",
                    "price" => "Rp 38.000",
                    "discount" => "",
                    "description"=> "Ayam Panggang Dada + Kentang/Nasi Aromatik + Saus + Salad + Infused Water",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '2',
                    "menu_name" => "Ayam Kuy Kenyang",
                    "image" => "foto/menu/ayam-kuy-kenyang.png",
                    "price" => "Rp. 46.000",
                    "discount" => "",
                    "description"=> "2 Ayam Panggang Sayap + Kentang/Nasi Aromatik + Salad + Saus + Infused Water",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '3',
                    "menu_name" => "Ayam Panggang Kuy Kekinian",
                    "image" => "foto/menu/ayam-panggang-kuy-kekinian.png",
                    "price" => "Rp 44.000",
                    "discount" => "",
                    "description"=> "Ayam Panggang + Nasi Aromatik/Kentang + Salad + Saus + Milky/Coffee",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '4',
                    "menu_name" => "Ayam Panggang Kuy Double Hemat",
                    "image" => "foto/menu/ayam-kuy-double-hemat.png",
                    "price" => "Rp 64.000",
                    "discount" => "",
                    "description"=> "2 Ayam Panggang Sayap + 2 Kentang/Nasi Aromatik + 2 Saus + 2 Salad + 2 Infused Water",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '5',
                    "menu_name" => "Ayam Panggang Kuy Double Karbo",
                    "image" => "foto/menu/ayam-panggang-double-carbo.png",
                    "price" => "Rp 44.000",
                    "discount" => "",
                    "description" => "Ayam Panggang + NasiAromatik + Kentang Goreng + Salad + Saus + Infused Water",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '6',
                    "menu_name" => "Ayam Goreng Kuy Santuy",
                    "image" => "foto/menu/ayam-panggang-double-carbo.png",
                    "price" => "Rp 27.000",
                    "discount" => "",
                    "description"=> "Nasi Putih + Ayam Goreng",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '7',
                    "menu_name" => "Nasi Aromatic",
                    "image" => "foto/menu/ayam-goreng-kuy-santuy.png",
                    "price" => "Rp 12.000",
                    "discount" => "",
                    "description"=> "Nasi Aromatik Dengan Bumbu Rempah Melimpah",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '7',
                    "menu_name" => "Kentang Crinkle",
                    "image" => "foto/menu/kentang-crinkle.png",
                    "price" => "Rp31.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "category_id" => '7',
                    "outlet_id" => $i,
                    "menu_name" => "Kentang Wedges",
                    "image" => "foto/menu/wedges.png",
                    "price" => "Rp32.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '7',
                    "menu_name" => "Ayam Panggang Paha",
                    "image" => "foto/menu/ayam-panggang-paha.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description"=> "Ayam Panggang Paha Dengan Bumbu Marinasi Gurih Dan Lezat",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '7',
                    "menu_name" => "Ayam Panggang Dada",
                    "image" => "foto/menu/ayam-panggang-dada.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description" => "Ayam Panggang Dada Dengan Bumbu Marinasi Gurih Dan Lezat",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '7',
                    "menu_name" => "Chicken Wings",
                    "image" => "foto/menu/chicken-wings.png",
                    "price" => "Rp34.000",
                    "discount" => "",
                    "description"=> "Chicken wings + wijen + creamy barbeque/chili fire",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Infused Water",
                    "image" => "foto/menu/Infused-water.png",
                    "price" => "Rp12.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Infused Tea",
                    "image" => "foto/menu/infused-tea.png",
                    "price" => "Rp14.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Infused Milky Original",
                    "image" => "foto/menu/infused-tea.png",
                    "price" => "Rp14.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Infused Milky Fruity",
                    "image" => "foto/menu/infused-tea.png",
                    "price" => "Rp20.000",
                    "discount" => "",
                    "description"=> "",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Classic Milo",
                    "image" => "foto/menu/milo.png",
                    "price" => "Rp27.000",
                    "discount" => "",
                    "description"=> "Milo + Creamer + SKM + Milo Powder",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '8',
                    "menu_name" => "Dark Choco",
                    "image" => "foto/menu/dark-choco.png",
                    "price" => "Rp27.000",
                    "discount" => "",
                    "description"=> "Choco + Vanilla + Susu + Creamer",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Thai Tea",
                    "image" => "foto/menu/Thai-Tea.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description" => "Thai Tea + SKM + Creamer",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Creamy Oreo",
                    "image" => "foto/menu/creamy-oreo.png",
                    "price" => "Rp27.000",
                    "discount" => "",
                    "description"=> "Vanilla + Susu + Creamer + Creamy + Oreo",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Creamy Regal",
                    "image" => "foto/menu/creamy-regal.png",
                    "price" => "Rp27.000",
                    "discount" => "",
                    "description"=> "Vanilla + Susu + Creamer + Creamy + Regal",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Americano",
                    "image" => "foto/menu/americano.png",
                    "price" => "Rp17.000",
                    "discount" => "",
                    "description"=> "Kopi Expresso Americano",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Coffee Kuy",
                    "image" => "foto/menu/coffee-kuy.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description"=> "Kopi + Gula Aren + Susu + Creamer",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Creamy Coffee",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Creamer + SKM",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Creamy Coffee Oreo",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp34.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Vanilla + Creamer + Oreo",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Creamy Coffee Regal",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp34.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Vanilla + Creamer + Regal",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Mocha Coffe",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp29.000",
                    "discount" => "",
                    "description"=> "Choco + Coffee + Susu + Creamer + Vanilla",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Double Shoot Coffe",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp29.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Gula + Creamy",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Coffee Latte",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Gula",
                ],
                [
                    "outlet_id" => $i,
                    "category_id" => '9',
                    "menu_name" => "Cappucino Latte",
                    "image" => "foto/menu/creamy-coffee.png",
                    "price" => "Rp23.000",
                    "discount" => "",
                    "description"=> "Kopi + Susu + Gula",
                ],
            ];

            Menu::insert($data);
        }
    }
}
