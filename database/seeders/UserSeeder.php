<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Keneth Licame',
                'email' => 'kekenken12@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('kenethlicame12')
            ],
            [
                'name' => 'Daisy Knots',
                'email' => 'deeznutz@yeehaw.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('severus123')
            ],
            [
                'name' => 'Rhydon Rhyperior',
                'email' => 'rhyhorn@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('draco123')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
