<?php
require_once "Grafos.php";

class GrafoMatriz extends Grafos{

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
		if($this->ponderado){
			if($this->direcionado){
				$this->grafo[$origem][$destino] = $peso;
				return true; 
			} else {
				$this->grafo[$origem][$destino] = $peso;
				$this->grafo[$destino][$origem] = $peso;
				return true; 
			}
		}else{
			if($this->direcionado){
				$this->grafo[$origem][$destino] = 1;
				return true; 
			} else {
				$this->grafo[$origem][$destino] = 1;
				$this->grafo[$destino][$origem] = 1;
				return true; 
			}
		}
        
        
    }
    
    public function existeAresta(int $origem, int $destino) { // : bool {
		if($this->grafo[$origem][$destino] != 0 ){
			if($this->ponderado){
				return "Sim. Peso: ".$this->grafo[$origem][$destino];
			}else{
				return "Sim. Sem peso";
			}
		}
    }

    public function retornarVizinhos(int $vertice) : array{
      return parent::vizinhos($vertice);
    }

    public function retornaBuscaLargura(int $origem){
      return parent::buscaLargura($this->grafo, $origem);
    }
    
}