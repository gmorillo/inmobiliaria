<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(ViewTableSeeder::class);
        $this->call(ValueTableSeeder::class);
        $this->call(AppraisalTableSeeder::class);
        $this->call(NegotiationTableSeeder::class);
        $this->call(PropertytypeTableSeeder::class);
        $this->call(HousingtypeTableSeeder::class);
        $this->call(DivisionTableSeeder::class);
        $this->call(EquipmentsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
    }
}
