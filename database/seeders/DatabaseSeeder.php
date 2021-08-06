<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(OcupationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HolyPersonSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(CommunitySeeder::class);
        $this->call(ChucheSeeder::class);
        $this->call(PatrySeeder::class);

    }
}
