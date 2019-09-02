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
    
    protected function buscaLargura(array $grafo, int $origem){
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

    protected function buscaProfundidade(array $grafo, int $origem){
          /*  $pilha = [];
            //$visitado = []; // 1: visitado, 2: naoVisitado, 3: final e sem vizinhos disponiveis
            foreach($grafo as $vv ){
                $visitado[$vv] = 2;
            }
            $visitado[$origem] = 1;
            array_push($pilha, $origem);
            while(!empty($pilha)){


            }*/

        /* 
            1  para  u ← 1  até  n  faça
            2  cor[u] ← branco
            3  cor[r] ← cinza
            4  P ← Cria-Pilha (r)
            5  enquanto  P  não estiver vazia faça
            6  u ← Copia-Topo-da-Pilha (P)
            7  se  Adj[u]  contém  v  tal que  cor[v] = branco
            10  então  cor[v] ← cinza
            11  Coloca-na-Pilha (v, P)
            12  senão  cor[u] ← preto
            13  Tira-da-Pilha (P)
            14  devolva  cor[1..n] 
        */
        /*
            Defina um nó inicial
            Enquanto este não for um nó objetivo ou final(nó cuja adjacência já tenha sido toda visitada)
                Escolha um de seus adjacentes ainda não visitados
                Visite-o
            Se nó final não objetivo:
                Volte ao pai deste
                Se houver pai, repita. 
                Senão escolha outro nó inicial

            Implementação:
            void visitaP(GRAFO, nó inicial){
                nóinicial = amarelo;
                array adjacencia de nóinicial(v) = vizinhos(nóinicial);
                while(v (existir adjacencia)){
                    if(cor do vertice == branco){
                        visitaP(grafo, v->vertice);
                    }
                    v = v->prox;
                }
                cor[u] = vermelho;
            }
        */

    }

    protected function dijkstra(){


    }
}