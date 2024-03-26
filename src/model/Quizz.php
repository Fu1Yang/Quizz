<?php

namespace App\MyQuizz;

class Quizz
{
    private string $_title;
    private QuestionCollection $_questions;

    public function __construct(string $title = 'No title chosen')
    {
        $this->_title = $title;
        $this->_questions = new QuestionCollection();
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

    public function getQuestions(): QuestionCollection
    {
        return $this->_questions;
    }

    public function addQuestion(Question $question): void
    {
        $this->questions[] = $question;
    }
    public static function create($pJsonObject): Quizz {
 
        $quizzTitle = $pJsonObject['title'] ?? 'No title chosen';
        $quizz = new Quizz($quizzTitle);

        foreach ($pJsonObject['questions'] as $questionData) {
            $questionText = $questionData['text'] ?? 'No question text';
            $question = new Question($questionText);

            foreach ($questionData['responses'] as $responseData) {
                $responseText = $responseData['text'] ?? 'No response text';
                $isValid = $responseData['isValid'] ?? false;
                $response = new Response($responseText, $isValid);
                $question->addResponse($response);
            }

            $quizz->addQuestion($question);
        }

        return $quizz;
   
    } 
}
