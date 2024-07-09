<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    public function test_get_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/student/');
        $response->assertStatus(200); 
    }

    public function test_the_application_get_a_student(): void
    {
        $response = $this->get('/api/student/1');
        $response->assertJson([
                    "name"=> "test2",
                    "email"=> "test2@email.com",
                    "phone"=> null,
        ]);
    }

    public function test_post_request_return_resuponse_successfuly(): void
    {
        $response = $this->post('/api/student/', ['name'=>'
        sample', 'email'=>'sample@email.com']);

        $response
            ->assertStatus(201);
    }
        
    public function test_the_application_post_a_student(): void
    {
        $response = $this->post('/api/student/', ['name'=>'
        sample', 'email'=>'sample@email.com']);

        $response->assertJson([
            "status"=>201,
            "message"=>"Data uploaded successfully"       
        ]);
    }

}
