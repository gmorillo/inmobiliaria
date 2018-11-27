<?php

use Illuminate\Database\Seeder;

class ValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Value::create([
        	'reference'=>'1',
        	'idufir'=>'9',
        	'floor'=>'5000',
        	'area'=>'150',
        	'antiquity'=>'1',
        	'propertypercent'=>'20',
        	'floorprice'=>'289',
        	'edifprice'=>'900000',
        ]);
        \App\Value::create([
        	'reference'=>'2',
        	'idufir'=>'4',
        	'floor'=>'2000',
        	'area'=>'250',
        	'antiquity'=>'6',
        	'propertypercent'=>'209',
        	'floorprice'=>'599',
        	'edifprice'=>'895632102',
        ]);
         \App\Value::create([
        	'reference'=>'3',
        	'idufir'=>'9',
        	'floor'=>'879',
        	'area'=>'56',
        	'antiquity'=>'9',
        	'propertypercent'=>'3',
        	'floorprice'=>'25',
        	'edifprice'=>'987654321',
        ]);
         \App\Value::create([
        	'reference'=>'4',
        	'idufir'=>'5',
        	'floor'=>'232',
        	'area'=>'90',
        	'antiquity'=>'12',
        	'propertypercent'=>'1',
        	'floorprice'=>'655',
        	'edifprice'=>'10987654321',
        ]);
        
    }
}
