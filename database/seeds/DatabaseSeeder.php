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

        $user = factory('App\User', 50)->create();

        $user->each(function($user){
            factory('App\Post', rand(0,3))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
