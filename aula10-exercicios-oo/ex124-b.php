<?php

class Televisao {
    # atributos
    private $status;
    private $canal;
    private $volume;
    
    # métodos
    public function __construct(){
        $this->status = 0;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga(){
        $this->status = !$this->status;
    }

    public function aumentaCanal(){
        if ($this->status){
            if ($this->canal < 999) {
                $this->canal++;
            } else {
                $this->canal = 1;
            }
        }

        
    }

    public function diminuiCanal(){
        if ($this->status){
            if ($this->canal > 1) {
                $this->canal--;
            } else {
                $this->canal = 999;
            }
        }

    }

    public function aumentaVolume(){
        if ($this->status){
            if ($this->volume < 100){
                $this->volume++;
            }
        }

    }

    public function diminuiVolume(){
        if ($this->status){
            if ($this->volume > 0){
                $this->volume--;
            }
        }

    }

    public function mostraCanal(){
        return $this->canal;
    }

    public function mostraVolume(){
        return $this->volume;
    }

    public function mostraStatus(){
        return $this->status?"ligada":"desligada";
    }




}