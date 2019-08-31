<?php 
require_once "Grafos.php";

class GrafoLista extends Grafos {
    
    public $grafo = [];
    public $nomeVertices=[];


    function __construct(bool $ehdirecionado, bool $ehponderado){
        parent::__construct($ehdirecionado, $ehponderado);
    }
 
    public function inserirVertice(string $vertice) : bool {
        $this->grafo[] = [];
        $this->nomeVertices[]=$vertice;
		return true;
    }
    
    public function labelVertice(int $indice) : string{
        return $this->nomeVertices[$indice];
    }
    
    public function imprimeGrafo() : void {
		print "<pre>";
		print_r($this->grafo);
		print "</pre>";
		
		for ($linha = 0; $linha < count($this->grafo) ; $linha++) {
			print " ".$this->nomeVertices[$linha].": ";
			foreach($this->grafo[$linha] as $indices => $valor){
				if($this->ponderado){
					print $indices . ":" . $valor . " ";
				}else{
					print $indices;
				}
				
			}
            print "<br>";
        }
    }
    
    public function inserirAresta(int $origem, int $destino, int $peso = 1) : bool {
        if($this->ponderado){
            $this->grafo[$origem][$destino] = $peso;
			return true;
        }else{
            $this->grafo[$origem][$destino] = 1;
			return true;
        }
        
    }
    
    public function existeAresta(int $origem, int $destino) : bool {
        
        if($this->ponderado){
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
        
        return $this->$grafo[$vertice]  ;
    }
    
}