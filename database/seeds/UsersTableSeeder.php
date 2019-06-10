<?php

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::query()->where('email', '!=', 'admin@admin.com')->count() > 0)
            return;
        
        User::query()
            ->create([
                'name'              => 'Admin',
                'username'          => 'admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('123123'),
                'api_token'         => str_random(60),
                'remember_token'    => str_random(10),
            ]);
        
        factory(App\Models\User::class, 20)
            ->create()
            ->each(function(User $user){
                $user->assignRole('developer');
            });
    }
}
