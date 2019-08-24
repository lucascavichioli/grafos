<?php
require_once "Grafos.php";

class GrafoMatriz extends Grafos{
    
    public $grafo = array();
    public $v = 0;
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct($ehdirecionado, $ehponderado);
    }
    
    public function inserirVertice(string $vertice) : bool {
        for($linha = 1; $linha < count($linha); $linha++){
            for($coluna = 1; $coluna <= count($this->grafo); $coluna++){
                $grafo[$vertice][$vertice] = 0;
            }
        }
        return true; 
        
        //$this->grafo += array($vertice => array($vertice => 1));
        return true;
    }
    
    public function labelVertice(int $indice) : string{
           
        
    }
    
    public function imprimeGrafo() {
        print "<pre>";
        print_r($this->grafo);
        print "</pre>";
    }
    
    public function inserirAresta(int $origem, int $destino, int $peso = 1) : bool {
        
        
    }
    
    public function existeAresta(int $origem, int $destino) : bool {
        
        
    }
    
    public function retornarVizinhos(int $vertice) : array { //vector<int>
        
    }
    
}