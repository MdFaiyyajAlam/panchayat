<?php

namespace Database\Seeders;

use App\Models\AdminRole;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminRole::create([
            'admin_id' => 1,
            'role_id' => 1,
        ]);
    }
}
