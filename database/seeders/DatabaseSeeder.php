<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $settings = new \App\Setting();
        $settings->title = 'a';
        $settings->logo_store = 'a';
        $settings->app_bundle = 'a';
        $settings->description = 'a';
        $settings->keywords = 'a';
        $settings->conditions_order = 'a';
        $settings->status_store = 1;
        $settings->status_orders = 1;
        $settings->price_order = 'a';
        $settings->one_signal_app_key = 'a';
        $settings->one_signal_app_id = 'a';
        $settings->twitter_account = 'a';
        $settings->snapchat_account = 'a';
        $settings->telegram_account = 'a';
        $settings->whatsapp_account = 'a';
        $settings->save();
    }
}
