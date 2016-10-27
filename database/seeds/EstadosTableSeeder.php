<?php
use Illuminate\Database\Seeder;
class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('Estados')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');



        
        DB::table('Estados')->insert(array (
            0 =>
            array (
                'id' => 1,
                'descripcion' => 'Activo',
            ),
            1 =>
            array (
                'id' => 2,
                'descripcion' => 'Baja',
            ),
        ));
    }
}
