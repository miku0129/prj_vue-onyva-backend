<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EtudiantTest extends TestCase
{
//     public function setUp(): void
//     {
//         $this->post('/api/student/', ['name'=>'
//         test_etudiant', 'email'=>'test_etudiant@mail.com']);
// }    
    
    public function 
    test_getAll_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/etudiant/');
        $response->assertStatus(200); 
    }
    
    public function 
    test_getA_request_return_resuponse_successfuly(): void
    {
        $response = $this->get('/api/etudiant/1');
        $response->assertStatus(200); 
        $response->assertJsonFragment([
                "id"=>1,
                "name"=>"etudiant1",

            ]
        );
    }
        
    public function test_post_request_return_resuponse_successfuly(): void
    {
        $response = $this->post('/api/etudiant/', ['name'=>'
        sample', 'email'=>'sample@email.com']);

        $response->assertJson([
            "status"=>201,
            "message"=>"Data uploaded successfully"       
        ]);


    }

        
    public function test_put_request_return_resuponse_successfuly(): void
    {
        $response = $this->put('/api/etudiant/edit/2', ['name'=>'
        sample-modified', 'email'=>'sample-modified@email.com']);

        $response->assertJson([
            "status"=>200,
            "message"=>"Data updated successfully"       
        ]);
    }

    public function test_delete_request_return_resuponse_successfuly(): void
    {
        $response = $this->delete('/api/etudiant/delete/11');

        $response
            ->assertStatus(200)
            ->assertJson([
                "status"=>200,
                "message"=>"data deleted successfully" 
            ]);
    }
        

//     public function setUp(): void
//     {
        
//         $response = $this->get('/api/etudiant/1');
//         $id = $response->id; 
//         $this->post('etudiant/delete/{$id}', ['name'=>'
//         test_etudiant', 'email'=>'test_etudiant@mail.com']);
// }    

}
