<?php

namespace Database\Seeders;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'todos' => 'wake up at 5 Am',
            'todo_status' => false
        ]);
    }
}
