<?php

use Wba\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::create([
            'name' => 'Administrator',
            'username' => 'wba',
            'password' => Hash::make('Wba2016'),
        ]);
        $this->command->info("Admin user created!");

        Model::reguard();
    }
}
