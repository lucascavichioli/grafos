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
        
    protected function welshEPowell() : array {
        $grau ;
        $corVertice ;
        $corAtual= 1;
        $corIgual= false;
       

        foreach ( $this->nomeVertices  as  $chave => $v ){
            $grau[$chave] =  count($this->vizinhos($chave));
            
        }
        arsort($grau);
        foreach($grau as  $chave => $v  ){
           $corVertice[$chave] = 0;
        }
        $Q = $corVertice;
        while(!empty($Q)){
            
        
            foreach($Q as $chave => $ver){
                $corIgual = false;
                foreach($this->vizinhos($chave) as  $v){
                        if( $corVertice[$v] == $corAtual ){
                              $corIgual = true;
                        }
                }
                if(! $corIgual  ){
                   $corVertice[$chave] =  $corAtual;  
                    
                }
                
            }
            foreach($this->nomeVertices as $chave => $ver){
                if($corVertice[$chave] != 0){
                    unset($Q[$chave]);   
                }
            }
            $corAtual++; 
        }

        return [$grau,$corVertice];
    }

    protected function atulizaSaturacao (  $corVertices) : array{
        $satura;
        $cores = [];
        foreach($corVertices as $chave => $v){
           $cores = [];//$corVertices[ $chave];
           $satura[$chave] =  0;
            foreach($this->vizinhos( $chave) as $v2){
                if($corVertices[$v2] != 0 && !in_array($corVertices[$v2], $cores)  ){
                    $satura[$chave]++; 
                    $cores[] = $corVertices[$v2];
                   }
                   
                //    print "<br>".$anterior;
            } 
        }
        
        // se diferente 0 e não conter no vetor de cores
        
        

        return $satura;
    }


    protected function retornaProxVertice ( $grau , $saturacao , $Q ) : int{

        $aux;
        $qtdSatur=array_count_values($saturacao);
        $maximo = array_search(max($saturacao),$saturacao); 
        if($qtdSatur[max(array_keys($qtdSatur))]  <= 1 ){
            return  $maximo;
        }else{ 
            foreach($Q as $chave =>  $v){
                if($chave == $maximo){
                    $aux[$chave]  = $grau[$chave];    
                }
            }
            return array_search(max($aux),$aux);
        }
    }

    protected function dsatur() : array {
        $grau;
        $saturacao;
        $corVertice;
        $verticeAtual;
        $corIgual = false;
        $corAtual = 1; 
        foreach ( $this->nomeVertices  as  $chave => $v ){
            $grau[$chave] =  count($this->vizinhos($chave));          
        }
        arsort($grau);
        $Q = $grau;
        foreach($Q as  $chave => $v  ){

           $corVertice[$chave] = 0;
           $saturacao[$chave] = 0;
        }
         $Q = $corVertice;  
         $QG =  $grau;
         $QS;
         $cont;
        while(!empty($Q)){

                    $corIgual= false;
                    $QS = $saturacao;
                    foreach($this->nomeVertices as $chave => $ver){
                        if($corVertice[$chave] != 0){
                            unset($QS[$chave]);  
                            unset($QG[$chave]);   
                        }
                    }
                    $verticeAtual = $this->retornaProxVertice($QG,$QS,$Q);
                    foreach($this->vizinhos($verticeAtual) as  $v){
                      
                            if( $corVertice[$v] == $corAtual ){
                                
                                $corIgual = true;
                            }
                          
                    }
                    if(!$corIgual){
                        $corVertice[$verticeAtual] =  $corAtual;   
                        $saturacao = $this->atulizaSaturacao($corVertice);
                        unset($Q[$verticeAtual]);
                        $corAtual = 1;
                    }else {
                        $corAtual++;       
                    }      
        }
        return [$grau, $saturacao, $corVertice];
    }
    
    
    protected function prim(){
        //inicia um conjunto S vazio de arestas para a solução
        $S = [];
        $valArvore = 0;
        $aresta ;
        $ori;
        $dest;
        //inicia um conjunto Q com todos os vértices do grafo para o controle
        $Q = [] ;
        foreach($this->nomeVertices as $chave =>  $v){
            $Q[$chave] = $chave;    
        }
        
        //remove vertice arbitrário do conjunto Q
        unset($Q[0]);
        
        //Enquanto Q não estiver vazio
        while(!empty($Q)){ 
            $aresta = [];
                $ori =[];
                $dest =[];
            foreach($this->nomeVertices as  $chave => $u){
                // print "<pre>";
                // print_r($this->grafo );
                // print "</pre>";
                
                foreach($this->vizinhos($chave) as $v){
                    
                    if((in_array($chave,$Q) && !in_array($v,$Q)) || (!in_array($chave,$Q) && in_array($v,$Q)) ){
                       
                        $aresta[] = $this->grafo[$chave][$v];
                        $ori[] = $chave;
                        $dest[] = $v;
                        // print "<pre> ".$chave;
                        // print_r($aresta);
                        // print "</pre>";
                    }   
               }

            //    print"<br>";
            }   

            $indiceMin = array_search(min($aresta),$aresta);
            print "<pre>";
            print_r($indiceMin);
            print "</pre>";
            $valArvore = $valArvore + $aresta[$indiceMin]; 
            $S[] = [$ori[$indiceMin],$dest[$indiceMin]];
            print "<pre>";
            print_r($aresta);
            print "</pre>";
            unset($Q[$dest[$indiceMin]]);
        }
        return [$S,$valArvore];
    }

}
   
