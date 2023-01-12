<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Role;
use App\Models\Ticket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketTest extends TestCase
{
    //use RefreshDatabase;
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testIsNew()
    {
        // Role::create([
        //     'name' => 'Client',
        // ]);
        $ticket = Ticket::factory()->create([
            'status' => 0,
        ]);

        $this->assertTrue($ticket->isNew());
    }

    public function testIsNotNew()
    {
        // Role::create([
        //     'name' => 'Admin'
        // ]);
        $ticket = Ticket::factory()->create([
            'status' => 1,
        ]);

        $this->assertFalse($ticket->isNew());
    }
}
