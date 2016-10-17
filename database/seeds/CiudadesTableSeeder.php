<?php
use Illuminate\Database\Seeder;
class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('Ciudades')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        \DB::table('Ciudades')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nombre' => 'Concepción del Uruguay',
                'fk_provincia_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'nombre' => 'Gualeguaychú',
                'fk_provincia_id' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'nombre' => 'Baradero',
                'fk_provincia_id' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'nombre' => 'Zarate',
                'fk_provincia_id' => 2,
            ),
            4 =>
            array (
                'id' => 5,
                'nombre' => 'Paysandú',
                'fk_provincia_id' => 3,
            ),                      
        ));
    }
}
