<?php

use Illuminate\Database\Seeder;
use App\admin;
class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new App\admin();
        $admin->email='admin@123.com';
        $admin->password='admin';
        $admin->save();
    }
}
