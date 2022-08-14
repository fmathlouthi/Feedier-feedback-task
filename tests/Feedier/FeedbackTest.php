<?php

namespace Tests\Feedier;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
   // use RefreshDatabase;

    public function test_a_submit_feedback()
    {

        $response = $this->postJson(route('feedbacks.store'),[
            'feedback' => "test"
        ])
        ->assertStatus(302);

    }
    public function test_a_submit_feedback_without_feedback_text()
    {

        $response = $this->postJson(route('feedbacks.store'))
        ->assertStatus(422);

    }
}
