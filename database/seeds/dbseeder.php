<?php

use Illuminate\Database\Seeder;
use App\admin;

class dbseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new App\admin();
        $admin->email='sh@gmail.com';
        $admin->password='admin';
        $admin->save();
    }
}
