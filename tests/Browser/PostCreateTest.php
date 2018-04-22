<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($first) {
//            $first->visit('/login')
//                ->type('email','maksim@gmail.com')
//                ->type('password','maksimqwerty')
//                ->click('.btn-primary')
//                ->assertSee('Dashboard');

            $first->visit('/login')
                ->type('email','maksim@gmail.com')
                ->type('password','maksimqwerty')
                ->click('.btn-primary')
            ->visit('/posts/create')
                ->type('#title','New post test')
                ->type('#body','Test description')
                ->click('.btn-warning')
                ->assertSee('New post test');
        });
    }
}
