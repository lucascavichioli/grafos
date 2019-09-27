<?php
require_once "Grafos.php";

class GrafoMatriz extends Grafos{

  function __construct(bool $ehdirecionado, bool $ehponderado){
    parent::__construct($ehdirecionado, $ehponderado);
  }

  
  function __construct(string $nomeArquivo){
		$arq = file($nomeArquivo);
		$parametros = explode(" ",$arq[0]);
		 parent::__construct((int)$arq[2],(int)$arq[3]);
		 
		 for($i = 1 ; $i <= ((int)$parametros[0]); $i++){
		   $this->inserirVertice($arq[$i]);
		 }
		 $aresta;
		 for($i = ((int)$parametros[0])+1 ; $i < ((int)$parametros[0]+1)+((int) $parametros[1]); $i++){
       $aresta = explode(" ",$arq[$i]);
    
		   if( ((int)$parametros[3]) === 1 ){
			   $this->inserirAresta( (int) $aresta[0],(int) $aresta[1],(int) $aresta[2]);
		   }else{
       
        $this->inserirAresta( (int) $aresta[0],(int) $aresta[1]);   
		   }
		 }
 
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
    
    public function imprimeGrafo() : void {

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
    
    public function existeAresta(int $origem, int $destino) : string{ // : bool {
      if($this->grafo[$origem][$destino] != 0 ){
          if($this->ponderado){
            return "Sim. Peso: ".$this->grafo[$origem][$destino];
          }else{
            return "Sim. Sem peso";
          }
      }else{
        return "Não";
      }
    }

    public function retornarVizinhos(int $vertice) : array{
      return parent::vizinhos($vertice);
    }

    public function retornaBuscaLargura(int $origem){
      return parent::buscaLargura($origem);
    }
    
    public function retornaBuscaProfundidade(int $origem){
      $visitados = [];
      return parent::buscaProfundidade($origem,$visitados);
    }

    
    public function retornaDijkstra(int $origem){
      return parent::dijkstra($origem);
    }


    public function retornaWelshEPowell(){
      return parent :: welshEPowell();
    }

    public function retornaDsatur(){
      return parent :: dsatur();
    }
}