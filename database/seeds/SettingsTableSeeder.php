<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Settings::create([
            'site_name' => 'OOU bloodbank',
            'contact_number' => '08147793653',
            'contact_email' => 'odutusinmoses@gmail.com',
            'address' => 'Ogun,Nigeria'
        ]);
    }
}
