<?php

use Illuminate\Database\Seeder;
use App\Widget;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Widget::unguard();
        Widget::truncate();
        factory(Widget::class, 30)->create();
        Widget::reguard();
    }
}
