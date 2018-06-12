<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $menu = factory(App\Menu::class, 5)->create();

        $menu->each(function(App\Menu $tipo){

            $platos = factory(App\Plato::class)
               ->times(5)
               ->create(['menu_id' => $tipo->id,]);

         });
    }
}
