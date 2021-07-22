<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'name'=>Str::random(5),
      /*  DB::table('users')->insert([
            'name'=>'Yasin Cmc',
            'email'=>'yasincmc@gmail.com',
            'password'=>Hash::make('1234'),
        ]); */

          $user1 = User::create([
            'name'=>'Edward Snowden',
            'email'=>'snowden@gmail.com',
            'password'=>Hash::make('1234'),
        ]);

        $user1->save();

     /*  $user2 = User::create([
           'name'=>'Yasin Cmc',
           'email'=>'yasin@yandex.com',
           'password'=>Hash::make('1234'),
       ]);
       $user2->save(); */
    }
}
