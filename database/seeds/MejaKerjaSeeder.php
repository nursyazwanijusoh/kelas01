<?php

use Illuminate\Database\Seeder;

class MejaKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kerjas')->insert([
        [
          'staff_id' => 1,
          'buat_ape' => 'congkak',
          'status' => 'I'
        ],
        [
          'staff_id' => 1,
          'buat_ape' => 'guli',
          'status' => 'O'
        ],
        [
          'staff_id' => 2,
          'buat_ape' => 'konda kondi',
          'status' => 'O'
        ],
        [
          'staff_id' => 2,
          'buat_ape' => 'Starcraft 2',
          'status' => 'I'
        ],
        [
          'staff_id' => 2,
          'buat_ape' => 'piano',
          'status' => 'I'
        ],
        [
          'staff_id' => 3,
          'buat_ape' => 'game ular',
          'status' => 'I'
        ],
        [
          'staff_id' => 3,
          'buat_ape' => 'guli',
          'status' => 'O'
        ],
      ]);
    }
}
