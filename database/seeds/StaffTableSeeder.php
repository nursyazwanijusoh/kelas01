<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
          [
            'name' => 'abu bin mat',
            'age' => 10,
          ],
          [
            'name' => 'lim pu kau',
            'age' => 12,
          ],
          [
            'name' => 'jon snow',
            'age' => 18,
          ],
          [
            'name' => 'siti binti din',
            'age' => 5,
          ],
        ]);
    }
}
