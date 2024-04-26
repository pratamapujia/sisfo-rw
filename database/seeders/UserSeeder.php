<?php
namespace Database\Seeders;

use App\Models\User;
// use App\User;
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
        $admin = User::create([
            'name' => 'RW',
            'email' => 'rw@mail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'RT',
            'email' => 'rt@mail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 2,
        ]);

        $user->assignRole('user');
    }
}
