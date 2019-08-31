<?php
require_once "Grafos.php";

class GrafoMatriz extends Grafos{
    
    public $grafo = [];
    public $nomeVertices = [];
    public $listaVizinhos = [];
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct($ehdirecionado, $ehponderado);
    }
    
    public function inserirVertice(string $vertice) : bool {
        
        $this->grafo[] = [];
        for($linha = 0; $linha < count($this->grafo); $linha++){
             $this->grafo[$linha] = array_pad($this->grafo[$linha],count($this->grafo),0);
        }
        $this->nomeVertices[]=$vertice;
        return true;
    }
    
    public function labelVertice(int $indice) : string {
           
        return $this->nomeVertices[$indice];
        
    }
    
    public function imprimeGrafo() {

        for ($linha = 0; $linha < count($this->grafo) ; $linha++) {
          print " ".$this->nomeVertices[$linha].": ";
          for ($coluna = 0; $coluna < count($this->grafo[$linha]); $coluna++) {      
            print "  ".$this->grafo[$linha][$coluna]."  ";
          }
            print "<br>";
         }
    }
    
    public function inserirAresta(int $origem, int $destino, int $peso=1) : bool {
        if($this->direcionado){
            $this->grafo[$origem][$destino] = $peso;
            return true; 
        } else {
            $this->grafo[$origem][$destino] = $peso;
            $this->grafo[$destino][$origem] = $peso;
            return true; 
        }
        
    }
    
    public function existeAresta(int $origem, int $destino) : bool {
        
        return $this->grafo[$origem][$destino] != 0;
        
    }
    
    public function retornarVizinhos(int $vertice) : array { //vector<int>
        foreach($this->grafo[$vertice] as $chave => $valor){
            if($valor != 0){
                //$this->listaVizinhos[$chave] = $valor;
                $this->listaVizinhos[] = $chave;
            }
        }
        /*for($coluna = 0; $coluna < count($this->grafo[$vertice]); $linha++){
           if($this->grafo[$vertice][$coluna] != 0){
                $listaVizinhos[] = $this->nomeVertices[$coluna];
           }
       } */

        return $this->listaVizinhos;

    }
    
}