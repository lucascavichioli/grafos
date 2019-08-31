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
        if(empty($this->grafo[$origem][$destino])){
			return false;
		}else{
			if($this->grafo[$origem][$destino] > 0){
				return true;
			}
				return false;  
		}
    }
    
    public function retornarVizinhos(int $vertice) : array { //vector<int>
        
        return $this->$grafo[$vertice]  ;
    }
    
}