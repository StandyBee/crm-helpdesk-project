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

    public function getTestData()
    {
        return [
            [0, true],
            [1, false]
        ];
    }

    /**
     * @dataProvider getTestData
     */
    public function testIsNew($status, $expectedResult)
    {
        //dump($status, $expectedResult);
        $ticket = Ticket::factory()->create([
            'status' => $status,
        ]);

        $this->assertEquals($expectedResult, $ticket->isNew());
    }
}
