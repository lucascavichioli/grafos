<?php 
require_once "Grafos.php";

class GrafoLista extends Grafos {
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct(bool $ehdirecionado, bool $ehponderado);
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