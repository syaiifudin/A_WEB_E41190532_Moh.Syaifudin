<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name' => 'Moh. Syaifudin',
            'alamat' => "Sudimoro Selatan RT 02 RW 04, Kec. Tulangan, Kab. Sidoarjo",
            'jk' => 1,
            'prodi' => 1,
            'no_hp' => '082140520771'
        ]);
    }
}
