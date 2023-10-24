<?php

namespace Database\Seeders;

use App\Models\Outlets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class outletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'slug' => 'roastkuy-juanda',
            'outlet_name' => 'Roastkuy Juanda',
            'address' => 'Kantor Propertree.id, Jl. K.H.M. Yusuf Raya, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411',
            'lat' => '-6.384914283709664',
            'lon' => '106.8397784576713',
            'operation_time' => '08:00 - 22:00',
            'contact' => '85171590732',
            "gofood_link" => "https://gofood.co.id/depok/restaurant/ayam-panggang-roastkuy-khm-yusuf-raya-2b321c70-406f-4ede-adc2-8f9ef920cbbc",
            "shopeefood_link" => "https://shopee.co.id/universal-link/now-food/shop/1104821?deep_and_deferred=1&share",
            "grabfood_link" => "https://grab.onelink.me/2695613898?pid=inappsharing&c=6-C2L2NTMFBFBDFA&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-C2L2NTMFBFBDFA&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com%2Fdownload",
            "travelokaeats_link" => "https://www.traveloka.com/restaurants/Indonesia/detail/ayam-panggang-roastkuy-depok-delivery-153298/delivery?funnel_id=menu_page&funnel_source=click_social_share",
        ],
        [
            'slug' => 'roastkuy-casablanca',
            'outlet_name' => 'Roastkuy Casablanca',
            'address' => 'Casablanca Premiere Depok, Jl. H. Japat I, Abadijaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417',
            'lat' => '-6.399776955857876',
            'lon' => '106.84492898250197',
            'operation_time' => '08:00 - 22:00',
            'contact' => '85171590732',
            "gofood_link" => 'https://gofood.link/a/E3mAEfY',
            "shopeefood_link" => 'https://shopee.co.id/universal-link/now-food/shop/20587421?deep_and_deferred=1&shareChannel=whatsapp',
            "grabfood_link" => 'https://grab.onelink.me/2695613898?pid=inappsharing&c=6-C3KHSFMEGUJKGA&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-C3KHSFMEGUJKGA&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com%2Fdownload',
            "travelokaeats_link" => 'https://www.traveloka.com/restaurants/Indonesia/detail/ayam-panggang-roastkuy-abadijaya-delivery-201376/delivery?funnel_id=menu_page&funnel_source=click_social_share',
        ],
        [
            'slug' => 'roastkuy-alexandria',
            'outlet_name' => 'Roastkuy Alexandria',
            'address' => 'HVVV+WV, Leuwinanggung, Kec. Tapos, Kota Depok, Jawa Barat 16457',
            'lat' => '-6.40518339625183',
            'lon' => '106.89478828435143',
            'operation_time' => '08:00 - 22:00',
            'contact' => '85171590732',
            "gofood_link" => 'https://gofood.link/a/BBXNojq',
            "shopeefood_link" => "https://shopee.co.id/universal-link/now-food/shop/1467811?deep_and_deferred=1&shareChannel=whatsapp",
            "grabfood_link" => "https://grab.onelink.me/2695613898?pid=inappsharing&c=6-C2XTA75FMAAELN&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-C2XTA75FMAAELN&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com%2Fdownload",
            "travelokaeats_link" => "https://www.traveloka.com/restaurants/Indonesia/detail/ayam-panggang-roastkuy-tapos-delivery-153301/delivery?funnel_id=menu_page&funnel_source=click_social_share",
        ],[
            'slug' => "roastkuy-batu-layang",
            'outlet_name' => "Roastkuy Batu Layang",
            'address' => "Jl. Batu Sapi No.69, Batu Layang, Kec. Cisarua, Kabupaten Bogor, Jawa Barat 16750",
            'lat' => '-6.675452517115493',
            'lon' => '106.9521500131893',
            'operation_time' => '08:00 - 22:00',
            'contact' => 85171590732,
            "gofood_link" => '',
            "shopeefood_link" => '',
            "grabfood_link" => '',
            "travelokaeats_link" => '',
        ],[
            'slug' => 'roastkuy-cariu',
            'outlet_name' => 'Roastkuy Cariu',
            'address' => 'Karya Mekar, Kec. Cariu, Kabupaten Bogor, Jawa Barat 16840',
            'lat' => '-6.543953916617318',
            'lon' => '107.09492087085961',
            'operation_time' => '12:00 - 20:00',
            'contact' => '85171590732',
            "gofood_link" => "https://gofood.link/a/F4oGYPN",
            "shopeefood_link" => '',
            "grabfood_link" => '',
            "travelokaeats_link" => '',
        ]];


        Outlets::insert($data);
    }
}
