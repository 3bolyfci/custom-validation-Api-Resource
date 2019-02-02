<?php

use Illuminate\Database\Seeder;

class PodCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\PodCast::class, 10)->create();
    }
}
