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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create()->each(function ($user){
            $user->profile()->save(factory(App\Profile::class)->make());
        });

        factory(App\Website::class, 10)->create();

        factory(App\Article::class, 100)->create()->each(function ($article){
            $boolean = random_int(0, 1);

            $ids = range(1, 10); //array of ids, it is 10 because we create 10 websites

            shuffle($ids);

            if($boolean){

                $sliced = array_slice($ids, 0, 2);

                //we attach ids(we provide ids) to the article website pivot table
                $article->websites()->attach($sliced); //we used attach for many to many relationship but not for one to one
            } else
                $article->websites()->attach(array_rand($ids, 1));

        });


    }
}
