<?php
namespace app\quizz\model;

class Response {
    private string $_text;
    private bool $_isValid;

    public function __construct(string $text = 'No response given', bool $isValid = false)
    {
        $this->_text = $text;
        $this->_isValid = $isValid;
    }

    public function getText(): string
    {
        return $this->_text;
    }

    public function isValid(): bool
    {
        return $this->_isValid;
    }
}