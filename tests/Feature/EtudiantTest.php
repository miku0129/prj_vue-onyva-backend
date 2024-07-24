<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EtudiantTest extends TestCase
{
    
    public function 
    test_getAll_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/etudiants/');
        $response->assertStatus(200); 
    }
    
    public function 
    test_getA_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/etudiants/1');
        $response->assertStatus(200); 
        $response->assertJsonFragment([
                "id"=>1,
                "name"=>"test1",
            ]
        );
    }
        
    public function test_post_request_return_resuponse_successfuly(): void
    {
        $response = $this->post('/api/etudiants/', ['name'=>'
        sample', 'email'=>'sample@email.com']);

        $response->assertJson([
            "status"=>201,
            "message"=>"Data uploaded successfully"       
        ]);
    }

    public function test_put_request_return_resuponse_successfuly(): void
    {
        $response = $this->put('/api/etudiants/1/edit', ['name'=>'
        test-modified', 'email'=>'test-modified@email.com']);

        $response->assertJson([
            "status"=>200,
            "message"=>"Data updated successfully"       
        ]);
    }

    public function test_delete_request_return_resuponse_successfuly(): void
    {
        $response = $this->delete("/api/etudiants/2/delete");

        $response
            ->assertStatus(200)
            ->assertJson([
                "status"=>200,
                "message"=>"data deleted successfully" 
            ]);
    }
}
