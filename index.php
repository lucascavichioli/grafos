<?php
require_once "GrafoMatriz.php";
require_once "GrafoLista.php";

// //grafo matriz
// $grafoMatriz = new GrafoMatriz(false, true);
// $grafoMatriz->inserirVertice("A");
// $grafoMatriz->inserirVertice("B");
// $grafoMatriz->inserirVertice("C");
// $grafoMatriz->inserirVertice("D");
// $grafoMatriz->inserirVertice("E");
// // $grafoMatriz->inserirVertice("F");
// $grafoMatriz->inserirAresta(0, 1,3);
// $grafoMatriz->inserirAresta(0, 2,5);
// $grafoMatriz->inserirAresta(0, 3,6);
// $grafoMatriz->inserirAresta(0, 4,8);
// $grafoMatriz->inserirAresta(1, 3,2);
// $grafoMatriz->inserirAresta(1, 4,11);
// $grafoMatriz->inserirAresta(2, 4,2);


// // $grafoMatriz->inserirAresta(0, 1);
// // $grafoMatriz->inserirAresta(0, 2);
// // $grafoMatriz->inserirAresta(0, 3);
// // $grafoMatriz->inserirAresta(3, 4);
// // $grafoMatriz->inserirAresta(2, 5);
// // $grafoMatriz->inserirAresta(0, 1);
// // $grafoMatriz->inserirAresta(0, 2);
// // $grafoMatriz->inserirAresta(0, 3);
// // $grafoMatriz->inserirAresta(1, 3);
// // $grafoMatriz->inserirAresta(2, 4);
// // $grafoMatriz->inserirAresta(2, 5);
// // $grafoMatriz->inserirAresta(5, 4);

// print " GrafoMatriz: <br>"; 
// print_r($grafoMatriz->imprimeGrafo());
// print "<br>";
// print " Label Vertice: "; 
// print_r($grafoMatriz->labelVertice(0));
// print "<br>";
// print " Existe Aresta?: "; 
// print $grafoMatriz->existeAresta(2, 0);
// //print $grafoMatriz->existeAresta(2, 0);
// //if($grafoMatriz->existeAresta(2, 0)){print "Sim";}else{print "Não";};
// print "<br>";
// print " Vizinhos de " . $grafoMatriz->labelVertice(3) . ": "; 
// foreach($grafoMatriz->retornarVizinhos(3) as $indice){ print $grafoMatriz->labelVertice($indice)." ";}
// print "<br>";
// print "Ordem de visita (Busca em largura): ";

// foreach($grafoMatriz->retornaBuscaLargura(2) as $indice){ print $grafoMatriz->labelVertice($indice)." ";}
// print "<br>";
// print "Ordem de visita (Busca em profundidade): ";
// foreach($grafoMatriz->retornaBuscaProfundidade(2) as $indice){ print $grafoMatriz->labelVertice($indice)." ";}

// print "<br>";
// print "<br>";

// $tabelaDijkstraM = $grafoMatriz->retornaDijkstra(4); 





// for($linha = 0; $linha < 2 ; $linha++){ 
//     if($linha == 0){
//         print "&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
//         for($col = 0 ; $col < count($tabelaDijkstraM[$linha]) ; $col++ ){
//             print " ".$grafoMatriz->labelVertice($col);
//         }    
//           print "<br>";
//           print "Distancia ";    
//     }
//     if($linha == 1){
//          print "Anterior ";    
//     }

//     for($col = 0 ; $col < count($tabelaDijkstraM[$linha]) ; $col++ ){
//         if($linha == 1){
//             if($tabelaDijkstraM[$linha][$col] == -1){
//                 print "-";
//             }else{
//                 print  " ". $grafoMatriz->labelVertice($tabelaDijkstraM[$linha][$col]);
//             }
            
//         }else{
//             print  " ". $tabelaDijkstraM[$linha][$col];
//         }

//     }
//     print "<br>";
// }
// print "<br>";
// print "<br>";
// print "<br>";
// print "<br>";

// //Grafo lista
// print " GrafoLista: <br>"; 
// $grafoLista = new GrafoLista(false, true);
// $grafoLista->inserirVertice("A");
// $grafoLista->inserirVertice("B");
// $grafoLista->inserirVertice("C");
// $grafoLista->inserirVertice("D");
// $grafoLista->inserirVertice("E");
// // $grafoLista->inserirVertice("F");
// ;
// $grafoLista->inserirAresta(0, 1,3);
// $grafoLista->inserirAresta(0, 2,5);
// $grafoLista->inserirAresta(0, 3,6);
// $grafoLista->inserirAresta(0, 4,8);
// $grafoLista->inserirAresta(1, 3,2);
// $grafoLista->inserirAresta(1, 4,11);
// $grafoLista->inserirAresta(2, 4,2);

// // $grafoLista->inserirAresta(0, 1);
// // $grafoLista->inserirAresta(0, 2);
// // $grafoLista->inserirAresta(0, 3);
// // $grafoLista->inserirAresta(3, 4);
// // $grafoLista->inserirAresta(2, 5);

// $grafoLista->imprimeGrafo();
// print "<br>";
// print " Label Vertice: ";
// print $grafoLista->labelVertice(0);
// print "<br>";
// print " Existe Aresta?: ";
// print $grafoLista->existeAresta(1, 3);
// print "<br>";
// print " Vizinhos de " . $grafoLista->labelVertice(1) . ": "; 
// foreach($grafoLista->retornarVizinhos(1) as $indice){ print $grafoLista->labelVertice($indice)." ";}
// print "<br>";
// print "Ordem de visita (Busca em largura): ";
// foreach($grafoLista->retornaBuscaLargura(0) as $indice){ print $grafoLista->labelVertice($indice)." ";}
// print "<br>";
// print "Ordem de visita (Busca em profundidade): ";
// foreach($grafoLista->retornaBuscaProfundidade(0) as $indice){ print $grafoLista->labelVertice($indice)." ";}
// print "<br>";
// print "<br>";

// // print_r($grafoMatriz->retornaBuscaProfundidade(0));



// $tabelaDijkstra = $grafoLista->retornaDijkstra(4); 

// for($linha = 0; $linha < 2 ; $linha++){ 
//     if($linha == 0){
//         print "&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
//         for($col = 0 ; $col < count($tabelaDijkstra[$linha]) ; $col++ ){
//             print " ".$grafoLista->labelVertice($col);
//         }    
//           print "<br>";
//           print "Distancia ";    
//     }
//     if($linha == 1){
//          print "Anterior ";    
//     }

//     for($col = 0 ; $col < count($tabelaDijkstra[$linha]) ; $col++ ){
//         if($linha == 1){
//             if($tabelaDijkstra[$linha][$col] == -1){
//                 print "-";
//             }else{
//                 print  " ". $grafoLista->labelVertice($tabelaDijkstra[$linha][$col]);
//             }
            
//         }else{
//             print  " ". $tabelaDijkstra[$linha][$col];
//         }

//     }
//     print "<br>";
// }
/*
$grafo = new GrafoLista("trabalho-28cores.txt");
$tipoColaraco ="wp";
//$tipoColaraco ="ds";


if($tipoColaraco == "wp"){
    // Armazena o timestamp antes da execucao do script
$tm_inicio = microtime( true ); 

    $tabelaCor = $grafo->retornaWelshEPowell();  
// Armazena  o timestamp apos a execucao do script
$tm_fim = microtime( true );

// Calcula o tempo de execucao do script 
$segundos = $tm_fim - $tm_inicio;
$minutos = ($segundos / 60) % 60;

// Exibe o tempo de execucao do script em segundos
echo '<b>Tempo de Execucao:</b> '.$segundos.' Segundos </br>';
echo '<b>Tempo de Execucao:</b> '.$minutos.' Minutos </br>';
    
    ////esse é para imprimir welsh e powell
    foreach($tabelaCor as $chave => $i){
        if($chave == 0){
            print " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            foreach($tabelaCor[$chave] as $chave2 => $j ){
                print " ".$grafo->labelVertice($chave2)."";
            }    
            print "<br>";
            print "Grau ";    
        }
        if($chave == 1){
            print "Cor ";    
        }

        foreach($tabelaCor[$chave] as $j ){
            print  " (". $j.")";
        }
        print "<br>";
    }
       
    print "<br>";
    // só pra testar qual é o numero maximo de cores obtido Welsh e Powell
    print max($tabelaCor[1]);

}else if($tipoColaraco == "ds"){

$tm_inicio = microtime( true ); 
    
    $tabelaCor = $grafo->retornaDsatur();
    
$tm_fim = microtime( true );

// Calcula o tempo de execucao do script 
$segundos = $tm_fim - $tm_inicio;
$minutos = ($segundos / 60) % 60;
// Exibe o tempo de execucao do script em segundos
echo '<b>Tempo de Execucao:</b> '.$segundos.' Segundos </br>';
echo '<b>Tempo de Execucao:</b> '.$minutos.' Minutos </br>';
        //esse é para imprimir o desatur
        foreach($tabelaCor as $chave => $i){
            if($chave == 0){
                print " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                foreach($tabelaCor[$chave] as $chave2 => $j ){
                    print " ".$grafo->labelVertice($chave2)."";
                }    
                print "<br>";
                print "Grau ";    
            }
            if($chave == 1){
                print "Saturação "; 
            }
            if($chave == 2){
                print "Cor ";    
        }
        
            foreach($tabelaCor[$chave] as $j ){
                print  " (". $j.")";
            }
            print "<br>";
        }
        
        

        print "<br>";
        // só pra testar qual é o numero maximo de cores obtido Dsatur
        print max($tabelaCor[2]);
        */

$grafo = new GrafoMatriz("testeSlidePrim.txt");

$tabelaResp = $grafo->retornaPrim();

print "<pre>";
print_r($tabelaResp);
print "</pre>";














