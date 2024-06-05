<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            ['slug' => 'home', 'title' => 'Home', 'content' => 'Welcome to our Fintech Company', 'image' => null],
            ['slug' => 'services', 'title' => 'Our Services', 'content' => 'We offer various financial services...', 'image' => null],
            ['slug' => 'about-us', 'title' => 'About Us', 'content' => 'Learn more about our company...', 'image' => null],
            ['slug' => 'contact-us', 'title' => 'Contact Us', 'content' => 'Feel free to reach out...', 'image' => null],
            ['slug' => 'apply-loans', 'title' => 'Apply for a Loan', 'content' => 'Complete the form below...', 'image' => null],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
