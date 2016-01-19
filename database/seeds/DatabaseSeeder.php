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
            'password' => \Hash::make('Wba2016'),
        ]);

        $parser = KzykHys\CsvParser\CsvParser::fromFile(storage_path('app/seeders/seed.csv'), ['delimiter' => ';', 'encoding' => 'utf8']);
        $data = $parser->parse();

        foreach ($data as $row)
        {
            $password = str_random();
            $this->command->info($password);
            User::create([
                'name' => $row[0],
                'username' => $row[1],
                'password' => \Hash::make($password),
            ]);
        }

        Model::reguard();
    }
}
