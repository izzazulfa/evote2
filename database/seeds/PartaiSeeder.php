<?php

use Illuminate\Database\Seeder;
use App\Partai;
class PartaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partai::create(['name' => '--------']);
        Partai::create(['name' => 'PDI']);
        Partai::create(['name' => 'PKB']);
        Partai::create(['name' => 'GOLKAR']);
        Partai::create(['name' => 'NASDEM']);
        Partai::create(['name' => 'DEMOKRAT']);
        Partai::create(['name' => 'HANURA']);
        Partai::create(['name' => 'PPP']);
        Partai::create(['name' => 'PAN']);
    }
}
