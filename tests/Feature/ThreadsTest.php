<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function a_user_can_browse_threads()
    {
        $thread = factory('App\Thread')->create();
        
        $response = $this->get('/threads');

        $response->assertSee($thread->title);

    }
}
