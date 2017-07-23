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
        factory(App\Task::class, 10)->create();
        factory(App\Post::class, 10)->create();
        factory(App\Comment::class,7)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
