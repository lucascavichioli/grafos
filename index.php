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
var_dump($grafoMatriz->existeAresta(2, 0));
print "<br>";
print " Vizinhos: "; 
print_r($grafoMatriz->retornarVizinhos(7));
print "<br>";
print "<br>";
print "<br>";
//Grafo lista
print " GrafoMatriz: <br>"; 
$grafoLista = new GrafoLista(false, false);

$grafoLista->inserirVertice("A");
$grafoLista->inserirVertice("B");
$grafoLista->inserirVertice("C");
$grafoLista->inserirVertice("D");
$grafoLista->inserirAresta(1, 2, 5);
$grafoLista->inserirAresta(1, 4, 7);
$grafoLista->inserirAresta(1, 1, 8);
$grafoLista->inserirAresta(3, 1, 9);
$grafoLista->inserirAresta(2, 4, 12);
$grafoLista->imprimeGrafo();
print "<br>";
print " Existe Aresta?: "; 
if($grafoLista->existeAresta(2, 4)){print "Sim";}else{print "Não";};