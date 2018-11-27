<?php

use Illuminate\Database\Seeder;

class AppraisalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Appraisal::create([
        	'floorprice'=>'10,00',
        	'property_id'=>'1',
        	'edifprice'=>'30.000,00',
        	'actualprice'=>'30.010,00',
        	'dateprice'=>'2018-10-01 13:04:28.530',
        	'performance'=>'5.000,00',
        ]);
        \App\Appraisal::create([
        	'floorprice'=>'80,00',
        	'property_id'=>'2',
        	'edifprice'=>'20.000,00',
        	'actualprice'=>'20.080,00',
        	'dateprice'=>'2018-10-01 13:04:28.530',
        	'performance'=>'8.000,00',
        ]);
        \App\Appraisal::create([
        	'floorprice'=>'50,00',
        	'property_id'=>'3',
        	'edifprice'=>'50.000,00',
        	'actualprice'=>'50.050,00',
        	'dateprice'=>'2018-10-01 13:04:28.530',
        	'performance'=>'15.000,00',
        ]);
        \App\Appraisal::create([
        	'floorprice'=>'256,00',
        	'property_id'=>'4',
        	'edifprice'=>'89.000,00',
        	'actualprice'=>'89.256,00',
        	'dateprice'=>'2018-10-01 13:04:28.530',
        	'performance'=>'65.000,00',
        ]);
    }
}