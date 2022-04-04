<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class FormTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_form_renders()
    {
        $user = User::factory()->withPersonalTeam()->unverified()->create();

        $response = $this->actingAs($user)->get('/form');

        $response->assertStatus(200);
    }
}
