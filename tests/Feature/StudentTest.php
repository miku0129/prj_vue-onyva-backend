<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

$student_id = 2; 

class StudentTest extends TestCase
{
    public function test_getAll_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/student/');
        $response->assertStatus(200); 
    }

    public function test_getA_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/student/#{student_id}');
        $response->assertStatus(200); 
    }

    public function 
    test_the_application_getA(): void
    {
        $response = $this->get('/api/student/2');
        // $response->assertJson([
        //     "status"=>200, 
        //     "student"=>[
        //         "name"=> "test2",
        //         "email"=> "test2@email.com",
        //         "phone"=> null,
        //     ]
        // ]);
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

    public function test_put_request_return_resuponse_successfuly(): void
    {
        $response = $this->put('/api/student/edit/2', ['name'=>'
        sample-modified', 'email'=>'sample-modified@email.com']);

        $response
            ->assertStatus(200);
    }
        
    public function test_the_application_put_a_student(): void
    {
        $response = $this->put('/api/student/edit/2', ['name'=>'
        sample-modified', 'email'=>'sample-modified@email.com']);

        $response->assertJson([
            "status"=>200,
            "message"=>"Data updated successfully"       
        ]);
    }


}
