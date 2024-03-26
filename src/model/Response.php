<?php

namespace App\MyQuizz;

class Response
{
    private string $text;
    private bool $isValid;

    public function __construct(string $text, bool $isValid)
    {
        $this->text = $text;
        $this->isValid = $isValid;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }
}
