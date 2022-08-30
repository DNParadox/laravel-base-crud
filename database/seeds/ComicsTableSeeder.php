<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array =  config('comics');
        // dd($comics_array); "comando in caso volessi visualizzare in terminale l'intero array tramite dd php artisan db:seed --class="nomeTabella"
        foreach($comics_array as $comic){
            $new_comic = new Comic();
            $new_comic->thumb = $comic['thumb'];
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->save();

        }
    }
}
