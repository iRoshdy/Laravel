<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Gharbiya, Egypt',
            'contact_number' => '12 0753 7198',
            'contact_email' => 'info@laravelblog.com'

        ]);
    }
}
