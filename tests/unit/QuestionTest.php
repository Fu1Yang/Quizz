<?php

use PHPUnit\Framework\TestCase;
use App\MyQuizz\Question as Question; // Importez la classe Question

class QuestionTest extends TestCase {
    public function test_1() {
        $question = new Question();
        $this->assertSame('No title choosen', $question->getTitle()); // Utilisez $question au lieu de $quizz
    }
    public function test_2() {
        $question = new Question('Quizz about PHP');
        $this->assertSame('Quizz about PHP', $question->getTitle()); 
    }
}
