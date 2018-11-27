<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Property::create
        ([
            'user_id'=>'1',
            'status'=>'0',
            'price'=>'990',
        	'negotiation_id'=>'3',
        	'propertytype_id'=>'2',
        	'housingtype_id'=>'3',
        	'equipment_id'=>'2',
        	'habs'=>'1',
        	'bath'=>'1',
        	'address'=>'Calle Santiago de compostela',
        	'number'=>'12',
        	'cp'=>'28034',
        	'city_id'=>'40',
        	'area'=>'55',
        	'antiquity'=>'10',
        	'floor'=>'3',
        	'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
		]);
		\App\Property::create
        ([
            'user_id'=>'2',
            'status'=>'1',
            'price'=>'780',
        	'negotiation_id'=>'2',
        	'propertytype_id'=>'2',
        	'housingtype_id'=>'2',
        	'equipment_id'=>'3',
        	'habs'=>'3',
        	'bath'=>'2 ',
        	'address'=>'Calle María Marín',
        	'number'=>'3',
        	'cp'=>'20002',
        	'city_id'=>'5',
        	'area'=>'80',
        	'antiquity'=>'2',
        	'floor'=>'8',
        	'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
		]);
		\App\Property::create
        ([
            'user_id'=>'3',
            'status'=>'1',
            'price'=>'550',
        	'negotiation_id'=>'3',
        	'propertytype_id'=>'3',
        	'housingtype_id'=>'3',
        	'equipment_id'=>'2',
        	'habs'=>'4',
        	'bath'=>'5',
        	'address'=>'Calle Dionisio',
        	'number'=>'3',
        	'cp'=>'20002',
        	'city_id'=>'5',
        	'area'=>'115',
        	'antiquity'=>'1',
        	'floor'=>'19',
        	'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
		]);
		\App\Property::create
        ([
            'user_id'=>'1',
            'status'=>'1',
            'price'=>'850',
        	'negotiation_id'=>'4',
        	'propertytype_id'=>'4',
        	'housingtype_id'=>'4',
        	'equipment_id'=>'4',
        	'habs'=>'8',
        	'bath'=>'5',
        	'address'=>'Calle SIMON ABRL',
        	'number'=>'15',
        	'cp'=>'20002',
        	'city_id'=>'5',
        	'area'=>'250',
        	'antiquity'=>'1',
        	'floor'=>'5',
        	'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
		]);
        \App\Property::create
        ([
            'user_id'=>'2',
            'status'=>'1',
            'price'=>'1200',
            'negotiation_id'=>'5',
            'propertytype_id'=>'5',
            'housingtype_id'=>'5',
            'equipment_id'=>'3',
            'habs'=>'8',
            'bath'=>'5',
            'address'=>'Calle SIMON ABRL',
            'number'=>'15',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'250',
            'antiquity'=>'1',
            'floor'=>'5',
            'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'3',
            'status'=>'1',
            'price'=>'1200',
            'negotiation_id'=>'5',
            'propertytype_id'=>'5',
            'housingtype_id'=>'5',
            'equipment_id'=>'3',
            'habs'=>'8',
            'bath'=>'5',
            'address'=>'Calle SIMON ABRL',
            'number'=>'15',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'250',
            'antiquity'=>'1',
            'floor'=>'5',
            'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'1',
            'status'=>'1',
            'price'=>'990',
            'negotiation_id'=>'3',
            'propertytype_id'=>'2',
            'housingtype_id'=>'3',
            'equipment_id'=>'2',
            'habs'=>'1',
            'bath'=>'1',
            'address'=>'Calle Santiago de compostela',
            'number'=>'12',
            'cp'=>'28034',
            'city_id'=>'40',
            'area'=>'55',
            'antiquity'=>'10',
            'floor'=>'3',
            'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'2',
            'status'=>'1',
            'price'=>'780',
            'negotiation_id'=>'2',
            'propertytype_id'=>'2',
            'housingtype_id'=>'2',
            'equipment_id'=>'5',
            'habs'=>'3',
            'bath'=>'2 ',
            'address'=>'Calle María Marín',
            'number'=>'3',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'80',
            'antiquity'=>'2',
            'floor'=>'8',
            'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'3',
            'status'=>'1',
            'price'=>'550',
            'negotiation_id'=>'3',
            'propertytype_id'=>'3',
            'housingtype_id'=>'3',
            'equipment_id'=>'4',
            'habs'=>'4',
            'bath'=>'5',
            'address'=>'Calle Dionisio',
            'number'=>'3',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'115',
            'antiquity'=>'1',
            'floor'=>'19',
            'description'=>'ALQUILER HABITACIONES FERIA 2017. Mega piso, precio por persona en habitación compartida para 2 personas. Suelos de parquet, doble salón, cada habitación con escritorios y armarios empotrados. Aire acondicionado, calefacción, lavavajillas, lavadora.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'1',
            'status'=>'1',
            'price'=>'850',
            'negotiation_id'=>'4',
            'propertytype_id'=>'4',
            'housingtype_id'=>'4',
            'equipment_id'=>'3',
            'habs'=>'8',
            'bath'=>'5',
            'address'=>'Calle SIMON ABRL',
            'number'=>'15',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'250',
            'antiquity'=>'1',
            'floor'=>'5',
            'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'2',
            'status'=>'1',
            'price'=>'1200',
            'negotiation_id'=>'5',
            'propertytype_id'=>'5',
            'housingtype_id'=>'5',
            'equipment_id'=>'3',
            'habs'=>'8',
            'bath'=>'5',
            'address'=>'Calle SIMON ABRL',
            'number'=>'15',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'250',
            'antiquity'=>'1',
            'floor'=>'5',
            'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
        ]);
        \App\Property::create
        ([
            'user_id'=>'3',
            'status'=>'1',
            'price'=>'1200',
            'negotiation_id'=>'5',
            'propertytype_id'=>'5',
            'housingtype_id'=>'5',
            'equipment_id'=>'4',
            'habs'=>'8',
            'bath'=>'5',
            'address'=>'Calle SIMON ABRL',
            'number'=>'15',
            'cp'=>'20002',
            'city_id'=>'5',
            'area'=>'250',
            'antiquity'=>'1',
            'floor'=>'5',
            'description'=>'Venta/ atico ubicado en pleno centro de la cudad, Paseo Simon Abril, frente al parque Abelardo Sanchez, una de las arterias principales de la ciudad. Superficie 110 metros, distribuida en salón doble ( con acceso a terraza privada de 65 metros con vistas al Parque Abelardo Sanchez), 3 dormitorios, salon, 2 baños. Primera calidades: suelos de tarima, ventanas climalit, empotrados revestidos, calefacción individual, A/A. Ascensor. Garaje Privado. Perfil Selecto.',
        ]);
    }
}