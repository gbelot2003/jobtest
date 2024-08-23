<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleTableSeeder::class);

        $this->call(UsersTableSeeder::class);

        $admin = User::where('email', 'admin@tester.com')->first();
        $admin->assignRole('administrador');

        $margaret = User::findOrFail(10);
        $margaret->assignRole('administrador');

        $savion = User::findOrFail(9);
        $savion->assignRole('administrador');

        $user1 = User::findOrFail(1);
        $user1->assignRole('cliente');

        $user2 = User::findOrFail(2);
        $user2->assignRole('cliente');

        $user3 = User::findOrFail(3);
        $user3->assignRole('cliente');

        $user4 = User::findOrFail(4);
        $user4->assignRole('cliente');

        $user5 = User::findOrFail(5);
        $user5->assignRole('cliente');

        $user6 = User::findOrFail(6);
        $user6->assignRole('cliente');

        $user7 = User::findOrFail(7);
        $user7->assignRole('cliente');

        $user8 = User::findOrFail(8);
        $user8->assignRole('cliente');
    }
}
