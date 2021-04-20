<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testExample()
    {
       $this->get('/Prueba')
       ->assertStatus(200)
        ->assertSee('Este sera su titulo')
        ->assertSee('Luis');

    }
}
