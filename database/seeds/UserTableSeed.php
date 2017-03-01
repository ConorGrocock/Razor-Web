<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(app\User::class, 50)->create()->each(function ($u) {
        $u->groups()->attach(rand(0,5));
      });
    }
}
