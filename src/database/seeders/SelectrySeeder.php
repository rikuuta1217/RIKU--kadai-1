<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;
use App\Models\Select;

class SelectrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Select::create([
            'id' => 1,
            'select' => '当社のホームページ',
        ]);
        
        Select::create([
            'id' => 2,
            'select' => 'SNS・ブログ',
        ]);
        
        Select::create([
            'id' => 3,
            'select' => 'その他のインターネットサイト',
        ]);
        
        Select::create([
            'id' => 4,
            'select' => '知人・友人',
        ]);
    }
}
