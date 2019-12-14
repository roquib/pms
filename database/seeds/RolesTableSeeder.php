<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'admin'],
            ['name' => 'testadmin'],
            ['name' => 'billadmin'],
            ['name' => 'medicineadmin'],
            ['name' => 'doctoradmin'],
            ['name' => 'patient'],
            ['name' => 'reception'],
        ]);
    }
}
