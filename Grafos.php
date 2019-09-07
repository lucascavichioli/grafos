<?php

abstract class Grafos {
    
    // 1 para sim
    protected  $direcionado;
    protected  $ponderado;
    //propriedades de um grafo
    protected $grafo = [];
    protected $nomeVertices = [];
    protected $listaVizinhos = [];
	
    function __construct(bool $ehdirecionado, bool $ehponderado){
        $this->direcionado = $ehdirecionado;
        $this->ponderado = $ehponderado;
    }

    protected function vizinhos(int $vertice) : array { //vector<int>
        $this->listaVizinhos = []; //limpa lista de vizinhos
        foreach($this->grafo[$vertice] as $chave => $valor){
            if($valor != 0){
                $this->listaVizinhos[] = $chave;
            }
        }
        return $this->listaVizinhos;
    }
    
    protected function buscaLargura(int $origem) : array{ //removemos o parâmetro "array $grafo" .
        $saida = [];
        $fila = [];
        $visitados = [];

        $visitados[$origem] = true; //marca vertice de origem
        
        array_push($fila, $origem); //adiciona a origem no inicio da fila

        while(!empty($fila)){   
            $verticeIni = array_shift($fila);
            $saida[] = $verticeIni;
            foreach ($this->vizinhos($verticeIni) as $v) { //para cada vizinho
               if(!isset($visitados[$v])){                        //que não está marcado
                    $visitados[$v] = true; //marca vizinho
                    array_push($fila, $v); //adiciona vizinho na fila
               }
            }
        }
        
        return $saida;

    }


    protected function buscaProfundidade(int $origem ,array $visitados) : array{
        $visitados[$origem] = true;
        $saida[$origem] = $origem;
            foreach ($this->vizinhos($origem) as $v) { //para cada vizinho
                if(!isset($visitados[$v])){                        //que não está marcado
                    $saida = $saida + $this->buscaProfundidade($v,$visitados);
                }  
            }
        return $saida; 
    }

    protected function dijkstra(int $inicio) : array{
        $distancia=[];
        $anterior=[];
        $Q =[];

        for( $i= 0; $i < count($this->nomeVertices);$i++ ) {
            $distancia[]= INF; // distancia infinita
            $anterior[]=-1; // sem vertice anterior
            $Q[]= INF; //todos abertos
        } 
        $v_atual = $inicio;
        $distancia[$v_atual]=0;
        

        while(!empty($Q)){
            
            $v_atual = array_search(min($Q),$Q);
            
            foreach($this->vizinhos($v_atual) as $v){
                
                if( ($distancia[$v] > ($distancia[$v_atual] + $this->grafo[$v_atual][$v]))){
                    
                    $distancia[$v]= $distancia[$v_atual] + $this->grafo[$v_atual][$v];
                    $anterior[$v]=$v_atual;
                    $Q[$v]  = $distancia[$v_atual] + $this->grafo[$v_atual][$v];
                    
                }
   
            }
            
                    
            unset($Q[$v_atual]);
            

         }

        return [$distancia ,$anterior];
    }
        
}


/* Inicializar todos os vértices como aberto

Inicializar todos os vértices como sem vértice anterior

Inicializar todos os vértices como distância infinita

Definir o vértice inicial como vértice atual

Definir a distância do vértice atual como zero

    Enquanto existir algum vértice aberto com distância não infinita

        Para cada vizinhos do vértices atual

            Se a distância do vizinho é maior que a distância do vértice atual mais o peso da aresta que os une

                Atribuir esta nova distância ao vizinho

                Definir como vértice anterior deste vizinho o vértice atual

Marcar o vértice atual como fechado

Definir o vértice aberto com a menor distância (não infinita) como o vértice atual */