<?php
namespace app\quizz\model;

class QuestionCollection implements \ArrayAccess {
    private $_values = [];
    private int $_position = 0;

    public function __construct(){
        $this->_values = [];
    }

    public function offsetExists($offset): bool {
        return isset($this->_values[$offset]);
    }

    public function offsetGet($offset): Question {
        return $this->_values[$offset];
    }

    public function offsetSet($offset, $value): void {
        if (!($value instanceof Question)) {
            throw new \InvalidArgumentException("Must be a question");
        }
        if (empty($offset)) {
            $this->_values[] = $value;
        } else {
            $this->_values[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void {
        unset($this->_values[$offset]);
    }

    public function count(): int {
        return count($this->_values);
    }
    
    public function add(Question $question): void {
        $this->_values[] = $question;
    }
}
?>
