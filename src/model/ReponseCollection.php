<?php 
namespace App\MyQuizz;
class ReponseCollection implements \ArrayAccess, \Countable {

public function count(): int {
    return count($this->_values);
}

public function rewind():void {//Histoire de se render au premier élément !
    $this->_position = 0;
}

public function key(): int { //On peut savoir à quel élément on est en ce moment !
    return $this->_position;
}

public function current():Question { //On peut savoir à quel élément on est en ce moment !
    return $this->_values[$this->_position];
}

public function next(): void { //On peut avoir la valeur de l’élément en cours !
    $this->_position++;
}
public function valid(): bool { //  C’est pour savoir quand s’arrête le foreach !
    return isset($this->_values[$this->_position]);
}
}