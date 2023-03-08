<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\producting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       $user=User::create([
        'name'=>'eliod',
        'email'=>'eliod@gmail.com',
        'password'=>'password2'
       ]);

        producting::create([
            'title'=>'laravel expert',
            'user_id'=>$user->id,
            'tags'=>'api,laravel,react',
            'company'=>'omega software company',
            'email'=>'eliodamutiba@gmail.com',
            'location'=>'makerere livingstone',
            'website'=>'www.omega.com',
            'description'=>'This company operates in producing softwares for different personel and companies'
             ]);
             producting::create([
                'title'=>'javascript expert',
                'user_id'=>$user->id,
                'tags'=>'api,vue,react',
                'company'=>'javascript.com',
                'email'=>'theeliod@gmail.com',
                'location'=>'sheema bushenyi',
                'website'=>'www.react.com',
                'description'=>'this is a very good and experienced company held by experienced personnel'
                 ]);
                 producting::create([
                    'title'=>'react expert',
                    'user_id'=>$user->id,
                    'tags'=>'api,nextjs,react',
                    'company'=>'angular.com',
                    'email'=>'kampala @gmail.com',
                    'location'=>'kabwohe runkungiri',
                    'website'=>'www.angular.com',
                    'description'=>'react,angular,vue and angular good frontend frameworks'
                     ]);
                     producting::create([
                        'title'=>'nextjs expert',
                        'user_id'=>$user->id,
                        'tags'=>'api,nextjs,react',
                        'company'=>'laravel.com',
                        'email'=>'livingstone @gmail.com',
                        'location'=>'kikoni ',
                        'website'=>'www.nextjs.com',
                        'description'=>'react,,vue and angular good frontend frameworks'
                         ]);
    }
}
