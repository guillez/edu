<?php
use Illuminate\Database\Seeder;
class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('Paises')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        DB::table('Paises')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nombre' => 'Argentina',
                'abreviacion' => 'ARG',
            ),
            1 =>
            array (
                'id' => 2,
                'nombre' => 'Uruguay',
                'abreviacion' => 'URU',
            ),
        ));
    }
}
