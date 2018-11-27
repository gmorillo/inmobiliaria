<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create([
            'img' => 'asdasdasdasdasdasd.jpg',
            'property_id' => '-1',
            'division' => 'principal',
        ]);
    }
}
