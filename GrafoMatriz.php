<?php
require_once "Grafos.php";

class GrafoMatriz extends Grafos{
    
    public $grafo = [];
    public $nomeVertices=[];
    
    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct($ehdirecionado, $ehponderado);
    }
    
    public function inserirVertice(string $vertice) : bool {
        
        $this->grafo[] = [];
        for($linha = 0; $linha < count($this->grafo); $linha++){
             $this->grafo[$linha] = array_pad($this->grafo[$linha],count($this->grafo),0);
        }
        $nomeVertices[]=$vertice;
        return true;
        
        
        // for($linha = 0; $linha < count($linha); $linha++){
        //     for($coluna = 0; $coluna <= count($this->grafo); $coluna++){
        //         $grafo[$vertice][$vertice] = 0;
        //     }
        // }
        // return true; 
        
        // //$this->grafo += array($vertice => array($vertice => 1));
        // return true;
    }
    
    public function labelVertice(int $indice) : string{
           
        return $this->$nomeVertices[$indice];
        
    }
    
    public function imprimeGrafo() {

        for ($row = 0; $row < count($this->grafo) ; $row++) {
          echo " ".$row.": ";
          for ($col = 0; $col < count($this->grafo[$row]); $col++) {      
            echo "".$this->grafo[$row][$col]."";
          }
            echo "<br>";
         }


        // print "<pre>";
        // print_r($this->grafo);
        // print "</pre>";
    }
    
    public function inserirAresta(int $origem, int $destino, int $peso = 1) : bool {
        if($this->$ehdirecionado){
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
        $lista =[];
        for($coluna = 0; $coluna < count($this->grafo[$vertice]); $linha++){
           if($this->grafo[$vertice][$coluna] != 0){
                $lista[] = $this->$nomeVertices[$coluna];
           }
       }


        return $lista;

    }
    
}