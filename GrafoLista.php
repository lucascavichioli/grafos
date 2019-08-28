<?php 
require_once "Grafos.php";

class GrafoLista extends Grafos {
    
    public $grafo = [];
    public $nomeVertices=[];


    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct($ehdirecionado, $ehponderado);
    }
 
    public function inserirVertice(string $label) : bool {
        $this->$grafo[] = [];
        $nomeVertices[]=$vertice;
        
    }
    
    public function labelVertice(int $indice) : string{
          
        return $this->$nomeVertices[$indice];
    }
    
    public function imprimeGrafo() : void {

    }
    
    public function inserirAresta(int $origem, int $destino, int $peso = 1) : bool {
        if($this->$ehponderado){
            $this->grafo[$origem][] = [$nomeVertices[$destino],$peso];
        }else{
            $this->grafo[$origem][] = $nomeVertices[$destino];
        }
        
    }
    
    public function existeAresta(int $origem, int $destino) : bool {
        
        if($this->$ehponderado){
            for($coluna = 0; $coluna < count($this->grafo[$origem]); $linha++){
                if($this->grafo[$origem][$coluna][0] == $nomeVertices[$destino]){
                    return true;
                }
            }
            return false;
        }else{
            for($coluna = 0; $coluna < count($this->grafo[$origem]); $linha++){
                if($this->grafo[$origem][$coluna] == $nomeVertices[$destino]){
                    return true;
                }
            }
            return false;
        }

        
    }
    
    public function retornarVizinhos(int $vertice) : array { //vector<int>
        
        return $this->$grafo[$vertice]  
    }
    
}