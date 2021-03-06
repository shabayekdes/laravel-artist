<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'phone' => '+201097072480',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'type' => 1,
        ]);

        factory(User::class, 10)->create();
    }
}
