<?php
use PHPUnit\Framework\TestCase;
use App\MyQuizz\Quizz as Quizz;
class QuizzTest extends TestCase
{
public function test_1()
 {
 $quizz = new Quizz();
 $this->assertSame('No title choosen', $quizz->getTitle());
 }
 public function test_2()
 {
 $quizz = new Quizz('Quizz about PHP');
 $this->assertSame('Quizz about PHP', $quizz->getTitle());
}

public function test_3 () {
    $quizz = new Quizz("Quizz about PHP");
    $quizz->addQuestion(new Question("What is a Constructor,"));
    $quizz->addQuestion(new Question("What is a Attribute?"));
    $this->asertSame('Quizz about PHP', $quizz->getTitle());
    $this->assertSame(2, $quizz->getQuestion()->count());
}
}