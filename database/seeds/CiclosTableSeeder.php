<?php
use Illuminate\Database\Seeder;
class CiclosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('Ciclos')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        \DB::table('Ciclos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'descripcion' => '2014'
            ),
            1 =>
            array (
                'id' => 2,
                'descripcion' => '2015'
            ),
            2 =>
            array (
                'id' => 3,
                'descripcion' => '2016'
            ),
            3 =>
            array (
                'id' => 4,
                'descripcion' => '2017'
            )
        ));
    }
}
