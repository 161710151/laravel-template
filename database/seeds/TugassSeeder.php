<?php

use Illuminate\Database\Seeder;

class TugassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        	['Nama'=>'Rudi', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'M Taufik H', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'Robi F', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'Firas', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'M Satria D', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	


        ];
        DB::table('Tugass')->insert($a);
    }
}
