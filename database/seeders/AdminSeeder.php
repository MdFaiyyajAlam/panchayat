<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123),
        ]);
        if ($admin) {
            $profile = new AdminProfile;
            $profile->admin_id = $admin->id;
            $admin->adminProfile()->save($profile);
        }
    }
}
