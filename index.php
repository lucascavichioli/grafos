<?php
require_once "GrafoMatriz.php";
require_once "GrafoLista.php";

//grafo matriz
$grafoMatriz = new GrafoMatriz(false, true);
$grafoMatriz->inserirVertice("A");
$grafoMatriz->inserirVertice("B");
$grafoMatriz->inserirVertice("C");
$grafoMatriz->inserirVertice("C");
$grafoMatriz->inserirVertice("C");
$grafoMatriz->inserirVertice("E");
$grafoMatriz->inserirVertice("D");
$grafoMatriz->inserirVertice("S");
$grafoMatriz->inserirVertice("I");
$grafoMatriz->inserirAresta(2, 0, 3);
$grafoMatriz->inserirAresta(3, 6, 2);
$grafoMatriz->inserirAresta(5, 7, 7);
$grafoMatriz->inserirAresta(5, 3);
print " GrafoMatriz: <br>"; 
print_r($grafoMatriz->imprimeGrafo());
print "<br>";
print " Label Vertice: "; 
print_r($grafoMatriz->labelVertice(0));
print "<br>";
print " Existe Aresta?: "; 
print $grafoMatriz->existeAresta(2, 0);
//print $grafoMatriz->existeAresta(2, 0);
//if($grafoMatriz->existeAresta(2, 0)){print "Sim";}else{print "Não";};
print "<br>";
print " Vizinhos: "; 
foreach($grafoMatriz->retornarVizinhos(7) as $indice){ print $indice." ";}
print "<br>";
print "<br>";
print "<br>";
//Grafo lista
print " GrafoLista: <br>"; 
$grafoLista = new GrafoLista(true, true);

$grafoLista->inserirVertice("A");
$grafoLista->inserirVertice("B");
$grafoLista->inserirVertice("C");
$grafoLista->inserirVertice("D");
//$grafoLista->inserirVertice("E");
$grafoLista->inserirAresta(1, 2, 5);
$grafoLista->inserirAresta(3, 1, 9);
$grafoLista->inserirAresta(2, 0, 12);
$grafoLista->imprimeGrafo();
print "<br>";
print " Existe Aresta?: ";
print $grafoLista->existeAresta(1, 2);