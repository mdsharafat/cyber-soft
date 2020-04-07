<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Category;
use App\CompanyProfile;
use App\Skill;
use App\Service;
use Illuminate\Support\Str;
use App\Tag;
use App\Project;

class NecessaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // user table
        $user           = new User();
        $user->name     = 'Mohammad Sharafat';
        $user->email    = 'sharafat.sohan047@gmail.com';
        $user->password = Hash::make('Snkadw)#@psgHS8@');
        $user->status   = 1;
        $user->pro_pic  = 'pro_pic.jpg';
        $user->save();

        // company profile table
        $companyProfile = new CompanyProfile();
        $companyProfile->name      = 'CyberSoft';
        $companyProfile->moto      = 'We Provide Complete Web Application Solution';
        $companyProfile->email     = 'info@cybersoftbd.net';
        $companyProfile->phone     = '+8801787689983';
        $companyProfile->intro     = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.';
        $companyProfile->logo      = null;
        $companyProfile->pro_pic   = 'pro_pic.jpg';
        $companyProfile->location  = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945';
        $companyProfile->address   = 'Wabda road, Post office para, Sabira villa, Chuadanga';
        $companyProfile->copyright = '2020 All right reserved.';
        $companyProfile->fb_link   = null;
        $companyProfile->tw_link   = null;
        $companyProfile->ln_link   = null;
        $companyProfile->save();

        //skills table
        $skillArray = [
            0 => ['UX/UI Design', 80], 
            1 => ['Javascript/Jquery/ReactJs', 60], 
            2 => ['Php/Laravel', 70],
            3 => ['Wordpress', 70],
            4 => ['Technical content writing', 60],
            5 => ['Search Engine Optimization', 80],
            6 => ['Linux/Windows OS', 80],
            7 => ['Database', 80],
        ];
        
        foreach($skillArray as $key => $value){
            $skill = new Skill();
            $skill->name = $value[0];
            $skill->progress = $value[1];
            $skill->save();
        }

        //services table
        $serviceArray = [
            'UX/UI Design', 
            'Web Application with Laravel', 
            'Wordpress Theme Customization',
            'Wordpress Theme Development',
            'Wordpress Plugins Development',
            'Search Engine Optimization'
        ];

        foreach($serviceArray as $key => $value){
            $service = new Service();
            $service->name = $value;
            $service->save();
        }

        // categories table
        $categoryArray = [
            'Cyber Security',
            'Database',
            'Information Technology',
            'ITIL',
            'Linux',
            'Networking',
            'Programming',
            'Security',
            'Windows'
        ];

        foreach($categoryArray as $value){
            $category = new Category();
            $category->title = $value;
            $category->slug = Str::of($value)->slug('-');
            $category->save();
        }

        //tags table
        $tagArray = [
            'debain', 
            'kali linux', 
            'laravel', 
            'Reactjs', 
            'Vuejs', 
            'Javascript', 
            'Jquery',
            'php',
            'mysql',
            'bootstrap',
            'css',
            'backend',
            'frontend',
            'web design',
            'web development',
            'wordpress',
            'wordpress theme development',
            'wordpress plugins development',
            'seo'
        ];
        foreach($tagArray as $value){
            $tag = new Tag();
            $tag->title = $value;
            $tag->slug = Str::of($value)->slug('-');
            $tag->save();
        }

        //projects table
        $projectContents = [
            0 => ['MJ Auto Japan Ltd', 'html, css, javascript, jquery, php, laravel', '', 'mj-auto-ltd.png' ],
            1 => ['Claimnwin', 'html, css, javascript, jquery, php, laravel', 'http://webencoder.space/demo/demo56/public Real: http://claimnwin.com', 'claimnwin.png'],
            2 => ['Econosurance', 'html, css, javascript, jquery, php, laravel', 'http://webencoder.space/demo/demo54/public/ Real: http://econosurance.com', 'eco54.png'],
            3 => ['My Money Life', 'html, css, javascript, jquery, php, laravel', 'http://webencoder.space/demo/demo62/public/ Admin: http://webencoder.space/demo/demo62/public/login', 'my-money-life.png'],
            4 => ['Agent Wordpress Plugins', 'html, css, jquery, php', '', 'agent.png'],
            5 => ['Makhdom', 'html, css, bootstrap, laravel', '', 'mkhdom.png']
        ];

        foreach($projectContents as $item){
            $project             = new Project();
            $project->title      = $item[0];
            $project->short_desc = $item[1];
            $project->url        = $item[2];
            $project->image      = $item[3];
            $project->save();
        }
    }
}
