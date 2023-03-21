<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $super = User::create([
            'name' => 'Super Admin',
            'email' => 'prolifearmy@serviciospeninsula.xyz',
            'email_verified_at'=>'2021-06-01 19:07:38',
            'password' => Hash::make('serviciospeninsula12')
        ]);
        $super->assignRole('Super-Admin');
        
        $super2 = User::create([
            'name' => 'Leo',
            'email' => 'leonardozamudio@armyprolife.com',
            'password' => Hash::make('Secret12'),
            'email_verified_at'=>'2021-06-01 19:07:38',
        ]);
        $super2->assignRole('Super-Admin');
        
        $super3 = User::create([
            'name' => 'Uriel Esqueda',
            'email' => 'urielesqueda@armyprolife.com',
            'password' => Hash::make('Secret12'),
            'email_verified_at'=>'2021-06-01 19:07:38',
        ]);
        $super3->assignRole('Super-Admin');

        $super4 = User::create([
            'name' => 'Carlos Ramirez',
            'email' => 'carlosramirez@armyprolife.com',
            'password' => Hash::make('Secret12'),
            'email_verified_at'=>'2021-06-01 19:07:38',
        ]);
        $super4->assignRole('Super-Admin');

        $super5 = User::create([
            'name' => 'Admin',
            'email' => 'admin@armyprolife.com',
            'password' => Hash::make('secret12'),
            'email_verified_at'=>'2021-06-01 19:07:38',
        ]);
        $super5->assignRole('Admin');
        
        $super5->givePermissionTo([
            'index',
            'create',
            'show',
            'edit',
            'destroy'
        ]);
    }
}
