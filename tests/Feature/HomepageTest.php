<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageTest extends TestCase
{
    public function test_homepage_introduces_the_local_coffee_guide(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSeeText('Kape Lokal')
            ->assertSeeText('Ampayon, Butuan City');
    }
}
