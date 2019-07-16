<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TasksTest extends DuskTestCase
{
    /** @test */
    public function it_shows_tasks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tasks')
                    ->assertSee('Some Task');
        });
    }
}
