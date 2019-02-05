<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			'nama_kelas'=> 'IS-1',
			'jurusan'	=> 'Sistem Informasi'
		];
		DB::table('t_kelas')->insert ($data);
		
		$data = [
			'nama_kelas'=> 'IS-2',
			'jurusan'	=> 'Sistem Informasi'
		];
		DB::table('t_kelas')->insert ($data);
    }
}
