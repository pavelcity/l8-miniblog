<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
					'name' => 'admin',
					'email' => 'sudo@su.do',
					'password' => bcrypt('009988')
				]);
    }
}
