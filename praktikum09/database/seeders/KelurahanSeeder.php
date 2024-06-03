<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        DB::table('kelurahans')->insert([
            [
                'nama' => 'Bojong Sari',
                'kecamatan_id' => '1'
            ]
        ]);
    }
}
