<?php

class Grafos {
    
    // 1 para sim
    private  $direcionado;
    private  $ponderado;
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        $this->direcionado = $ehdirecionado;
        $this->ponderado = $ehponderado;
    }
    
    public function teste() : string {
        $teste = "teste";
        return $teste;
    }
    
    public function inserirVertice(string $label) : bool {
        
        
    }
    
    public function labelVertice(int $indice) : string{
        
        
        
    }
    
    public function imprimeGrafo() : void {
        
    }
    
    public function inserirAresta(int $origem, int $destino, int $peso = 1) : bool {
        
        
    }
    
    public function existeAresta(int $origem, int $destino) : bool {
        
        
    }
    
    public function retornarVizinhos(int $vertice) : array { //vector<int>
        
    }
}