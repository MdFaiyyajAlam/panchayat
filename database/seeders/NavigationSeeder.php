<?php

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigation::create([
            'title' => 'home',
            'category_id' => 0,
            'link' => '/',
            'menu_order' => 1,
            'menu_status' => 1,
        ]);
    }
}
