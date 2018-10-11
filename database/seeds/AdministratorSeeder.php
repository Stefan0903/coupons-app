<?php

use Illuminate\Database\Seeder;
use App\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = User::create([
            'name' => 'Stefan',
            'email' => 'stefan@admin.com',
            'password' => bcrypt('stefan123'),
        ]);

        $admin2 = User::create([
            'name' => 'Ana',
            'email' => 'ana@admin.com',
            'password' => bcrypt('ana123'),
        ]);

        $admin1->attachRole('admin');
        $admin2->attachRole('admin');

        $admin1->attachPermissions(['create-coupons', 'read-coupons', 'update-coupons', 'delete-coupons']);
        $admin2->attachPermissions(['create-coupons', 'read-coupons', 'update-coupons', 'delete-coupons']);
    }
}
