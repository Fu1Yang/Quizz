<?php

use PHPUnit\Framework\TestCase;
use App\MyQuizz\Response as Response; // Importez la classe Response

class ResponseTest extends TestCase {
    public function test_1() {
        $response = new Response();
        $this->assertSame('No response given', $response->getText()); 
    }
    
    public function test_2() {
        $response = new Response('Correct answer', true); // Créez une réponse avec le texte "Correct answer" et valide à true
        $this->assertSame('Correct answer', $response->getText()); // Vérifiez si le texte est correct
        $this->assertTrue($response->isValid()); // Vérifiez si la réponse est valide
    }

    public function test_3() {
        $response = new Response('Wrong answer', false); 
        $this->assertSame('Wrong answer', $response->getText()); 
        $this->assertFalse($response->isValid()); 
    }
}
