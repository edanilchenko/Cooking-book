<?php

use Illuminate\Database\Seeder;

use App\Food;
use App\Ingridient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // Блюда
        Food::create([
            'title' => 'Борщ'
        ]);
        Food::create([
            'title' => 'Овощной салат'
        ]);

        // Ингридиенты для борща
        DB::table('ingridients')->insert([
            'title' => 'Заправка на борщ'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Куриные ножки'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Капуста'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Картошка'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Морковь'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Лук'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Зелень'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Сметана'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Черный хлеб'
        ]);

        // Ингридиенты для овощного салата
        DB::table('ingridients')->insert([
            'title' => 'Огурец'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Помидор'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Лук фиолетовый'
        ]);
        DB::table('ingridients')->insert([
            'title' => 'Масло подсолнечное'
        ]);

        $food = Food::find(4);
        $ingridients = Ingridient::find(range(4,12));
        $food->ingridients()->attach($ingridients);

        $food = Food::find(5);
        $ingridients = Ingridient::find(range(13,16));
        $food->ingridients()->attach($ingridients);
    }
}
