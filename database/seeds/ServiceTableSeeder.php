<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service')->delete();
        
        \DB::table('service')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MEMBRESÍA MENSUAL',
                'photo' => 'service\\August2019\\dGVjiLoo1l1Uew283HqA.jpg',
                'description' => '<p>El gimnasio puede estar abierto de 6 am a 9 pm todos los días del año. <br />Ofrecemos todos los artefactos para que te ejercites como se debe, <br />además de un buen ambiente.</p>',
                'price' => '350.00',
                'deleted_at' => NULL,
                'created_at' => '2020-05-20 18:00:00',
                'updated_at' => '2020-05-20 18:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ENTRENAMIENTO PERSONAL',
                'photo' => 'service\\August2019\\3m4KzuwFk6Tpx80WUEGs.jpg',
                'description' => '<p>Nuestros profesionales te ayudarán a que rindas lo máximo<br />Te daremos proridad con este servicio.</p>',
                'price' => '150.00',
                'deleted_at' => NULL,
                'created_at' => '2020-05-20 18:00:00',
                'updated_at' => '2020-05-20 18:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ZONA INFANTIL',
                'photo' => 'service\\August2019\\a20ucTItWijnKxDxgrZR.jpg',
                'description' => '<p>Ejercitate y no te preocupes por tus hijos.<br />Tenemos areas donde ellos pueden jugar mientras tu logras tu forma ideal.</p>',
                'price' => '5.00',
                'deleted_at' => NULL,
                'created_at' => '2020-05-20 18:00:00',
                'updated_at' => '2020-05-20 18:00:00',
            ),
        ));
        
        
    }
}