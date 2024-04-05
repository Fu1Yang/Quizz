<?php
namespace app\quizz\model;

class Question {
    private string $_title;

    public function __construct(string $pTitle = "No title choosen"){
        $this->_title = $pTitle;
    }

    public function getTitle():string{
        return $this->_title;
    }

    public function setTitle($pTitle):void{
        $this->_title = $pTitle;
    }

 }