<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
        ]);
        // $user = User::factory()->make();
        // dd($user);

        //User::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        // User::factory()->admin()->create();
        // User::factory()
        //     ->client()
        //     ->has(Ticket::factory()->count(3))
        //     ->create();

        //Ticket::factory()->client()create();
    }
}
