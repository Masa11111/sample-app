<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '松田将秀',
                'email' => 'masahide@icloud.com',
                'password' => 'masahide',
                'phone' => '090-1111-1111',
                'profile' => '何でも好き',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '小松愛絵理',
                'email' => 'komatu@icloud.com',
                'password' => 'airi',
                'phone' => '090-2222-2222',
                'profile' => '甘いものが好き',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '吉川康平',
                'email' => 'yoshikawa@icloud.com',
                'password' => 'kouhei',
                'phone' => '090-3333-3333',
                'profile' => 'シュークリームが好き',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
