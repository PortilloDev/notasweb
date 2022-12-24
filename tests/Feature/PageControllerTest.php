<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Support\Facades\Storage;

class PageControllerTest extends TestCase
{

    public function testExistContactView()
    {

        $response = $this->get('/blog/contacto');

        $response->assertStatus(200);
        $response->assertViewIs('web.contact.index');
    }

    public function testExistBlogView()
    {

        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertViewIs('web.blog.posts');
    }

    public function testExistDocumentView()
    {

        $response = $this->get('/blog/documentacion');

        $response->assertStatus(200);
        $response->assertViewIs('web.document.home');
    }

    public function testExistAboutView()
    {

        $response = $this->get('/perfil');

        $response->assertStatus(200);
        $response->assertViewIs('web.profile.index');
    }

    public function testExistPolicyView()
    {

        $response = $this->get('/blog/politica-privacidad');

        $response->assertStatus(200);
        $response->assertViewIs('web.politicas.politicas');
    }


    public function testExistAvatarImage()
    {
        $exist  = false;

        if (Storage::disk('local')->exists('public/blog/avatar.png')) {
           $exist  = true;
        }

        $this->assertEquals(true, $exist);
    }

    public function testExistProfileImage()
    {
        $exist  = false;

        if (Storage::disk('local')->exists('public/blog/profile.jpg')) {
           $exist  = true;
        }

        $this->assertEquals(true, $exist);
    }
}
