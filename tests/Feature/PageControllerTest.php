<?php

namespace Tests\Feature;


use Tests\TestCase;

class PageControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contact_route()
    {
        $response = $this->get('blog/contacto');
        $response->assertStatus(200);
    }
}
