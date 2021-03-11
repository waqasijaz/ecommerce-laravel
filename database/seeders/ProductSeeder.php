<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Lg Mobile',
            'price'=>'10000',
            'description'=>'an elegant smartphone phone with latest features',
            'category'=>'mobile',
            'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2018/12/LG-X5-Android-One-600x600.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'15000',
                'description'=>'an elegant smartphone phone with latest features',
                'category'=>'mobile',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a33/navigation/A33-navigation-green-v2.png'
                ],
                [
                    'name'=>'Samsung Mobile',
                    'price'=>'20000',
                    'description'=>'an elegant smartphone phone with latest features',
                    'category'=>'mobile',
                    'gallery'=>'https://www.whatmobile.com.pk/admin/images/Samsung/SamsungGalaxyS10E-b.jpg'
                    ],
                    [
                        'name'=>'Huawei Mobile',
                        'price'=>'15000',
                        'description'=>'an elegant smartphone phone with latest features',
                        'category'=>'mobile',
                        'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/nova-7i.jpg'
                        ]
                        ]);
    }
}
