<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    'mysql' => [
	    'read' => [
	        'host' => ['192.168.1.1'],
	    ],
	    'write' => [
	        'host' => ['196.168.1.2'],
	    ],
	    'sticky'    => true,
	    'driver'    => 'mysql',
	    'database'  => 'database',
	    'username'  => 'root',
	    'password'  => '',
	    'charset'   => 'utf8mb4',
	    'collation' => 'utf8mb4_unicode_ci',
	    'prefix'    => '',
	]
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    }
}
