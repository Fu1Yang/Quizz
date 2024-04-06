<?php

namespace app\quizz\model;

class Quizz
{
    private string $_title;
    private QuestionCollection $_questions;

    public function __construct(string $title = 'No title choosen')
    {
        $this->_title = $title;
        $this->_questions = new QuestionCollection();
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

    public function getQuestion(): QuestionCollection
    {
        return $this->_questions;
    }

    public function addQuestion(Question $question): void
    {
        $this->_questions[] = $question;
    }
    public static function create($pJsonObject): Quizz {
 
        $quizzTitle = $pJsonObject->title ;
        $quizz = new Quizz($quizzTitle);

        foreach ($pJsonObject["questions"] as $questionData) {
            $questionText = $questionData['text'] ;
            $question = new Question($questionText);
        }
        return $quizz;


    }
   

}


