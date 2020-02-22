<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->delete();
        $now = date('Y-m-d H:i:s');

        $foodsData = [
            [
                'title' => 'Bakso',
                'description' => 'Bakso Gepeng',
                'full_description' => 'Bakso Gepeng Enak',
                'price' => 15000,
                'image' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Mie',
                'description' => 'Mie Goreng',
                'full_description' => "Mie Goreng Enak",
                'price' => 20000,
                'image' => '',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('foods')->insert($foodsData);
    }
}
