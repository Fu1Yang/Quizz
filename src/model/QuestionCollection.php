<?php
namespace App\MyQuizz;
class QuestionCollection implements \ArrayAccess {
    private $_values = [];
    private int $_position = 0;
    public function __construct(){
        $this->_values =[];
    }

    public function offsetExists($offset):bool {
        return isset($this->_values[$offset]);
    }

    public function offsetGet($offset):Question {
        return $this->_values[$offset];
    }

    public function offsetSet($offset, $value):void {
        if(!($value instanceof Question)) {
            throw new \InvalidArgumentException("Must be a question");
        }
        if(empty($offset)){
            $this->_values[] = $value;
        }
    }

    public function offsetunset($offset): void {
        unset($this->_values[$offset]);
    }

}