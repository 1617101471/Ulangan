<?php

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
    	Eloquent::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call('seederrelasi');
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('seederrelasi berhasil.');
    }
}
