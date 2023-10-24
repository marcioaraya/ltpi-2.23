<?php

class Adulto {
# atributo
private $peso;

# métodos

public function engordar($quilos){
    $this->peso += $quilos; // $this->peso = $this->peso + $quilos
}

public function emagrecer($quilos){
    $this->peso -= $quilos; // $this->peso = $this->peso - $quilos
}

public function setPeso($p){
    $this->peso = $p;
}

public function getPeso(){
    return $this->peso;
}

}
