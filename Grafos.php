<?php

class Grafos {
    
    // 1 para sim
    private  $direcionado;
    private  $ponderado;
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        $this->direcionado = $ehdirecionado;
        $this->ponderado = $ehponderado;
    }
    
    
    
}