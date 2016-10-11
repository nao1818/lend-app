<?php

use Illuminate\Database\Seeder;

class LendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lends')->truncate();
        Db::table('lends')->insert([
        	[
        		'title' => 'ワンピース',

        	],
        	[
        		'title' => 'ダイヤのA',
        	],
        	]);
    }
}
