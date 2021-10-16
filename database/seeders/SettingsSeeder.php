<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'admin',
            'email'=>'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $data = [
            ['key' => 'app_name', 'value' => 'Laravel-POS'],
            ['key' => 'currency_symbol', 'value' => '$'],
        ];

        foreach ($data as $value) {
            if(!Setting::where('key', $value['key'])->first()) {
                Setting::create($value);
            }
        }
    }
}
