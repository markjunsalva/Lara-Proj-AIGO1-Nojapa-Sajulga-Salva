<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_shows_the_project_contact_form(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSeeText('Let’s keep local coffee close.')
            ->assertSeeText('Good local guides grow with the neighborhood.')
            ->assertSeeText('Ampayon, Butuan City')
            ->assertSeeText('does not send or store your message')
            ->assertSee('name="email"', false)
            ->assertSee('data-contact-form', false);
    }
}
