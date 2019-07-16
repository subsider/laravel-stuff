<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\TaskCreateForm;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TasksTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_creates_tasks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new TaskCreateForm)
                ->type('name', 'Foobar')
                ->press('Submit')
                ->assertSee('You typed Foobar');
        });
    }
}
