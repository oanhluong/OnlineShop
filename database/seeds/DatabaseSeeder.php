<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = User::create(array(
        	'name' => 'admin',
            'email' => 'admin@x.com',
        	'password' => bcrypt('1')
        ));
    }
}
