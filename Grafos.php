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
    
    protected function buscaLargura(int $origem){ //removemos o parâmetro "array $grafo" .
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


    protected function buscaProfundidade( int $origem ,array $visitados) : array{
        $visitados[$origem] = true;
        //$tempo = $tempo + 1;
        $saida[$origem] = $origem;
            foreach ($this->vizinhos($origem) as $v) { //para cada vizinho
                if(!isset($visitados[$v])){                        //que não está marcado
                    $saida = $saida + $this->buscaProfundidade($v,$visitados);
                }  
            }
        return $saida; 
    }

    protected function dijkstra(int $origem){
        foreach ($this->grafo as $chave => $valor) {
            $abertos[$chave] = true;   
            $distancia[$chave] = 99999999999999999999999999999999; //infinito
            $semVerticeAnterior[$chave] = -1;
        }   
        $distancia[$origem] = 0;
        $verticeAtual = $origem;

        while($abertos[$verticeAtual] != false && $distancia[$verticeAtual] != 99999999999999999999999999999999){
            foreach ($this->vizinhos($verticeAtual) as $v) {
                if($distancia[$v] > $verticeAtual + $this->grafo[$verticeAtual][$v]){
                    $distancia[$v] = $verticeAtual + $this->grafo[$verticeAtual][$v];
                    $semVerticeAnterior[$v] = $verticeAtual;   
                }
            }
            $abertos[$verticeAtual] = false;
            $abertos[$i] = false;
            //Definir o vértice aberto com a menor distância (não infinita) como o vértice atual */
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

    }
}