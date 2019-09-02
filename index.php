<?php
require_once "GrafoMatriz.php";
require_once "GrafoLista.php";

//grafo matriz
$grafoMatriz = new GrafoMatriz(true, false);
$grafoMatriz->inserirVertice("A");
$grafoMatriz->inserirVertice("B");
$grafoMatriz->inserirVertice("C");
$grafoMatriz->inserirVertice("D");
$grafoMatriz->inserirVertice("E");
$grafoMatriz->inserirVertice("F");
$grafoMatriz->inserirAresta(0, 2, 3);
$grafoMatriz->inserirAresta(0, 1, 2);
$grafoMatriz->inserirAresta(1, 2, 7);
$grafoMatriz->inserirAresta(2, 5);
$grafoMatriz->inserirAresta(3, 4);
$grafoMatriz->inserirAresta(4, 2);
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
foreach($grafoMatriz->retornarVizinhos(3) as $indice){ print $indice." ";}
print "<br>";
print "Ordem de visita (Busca em largura): ";
foreach($grafoMatriz->retornaBuscaLargura(0) as $indice){ print $indice." ";}
print "<br>";
print "<br>";

//Grafo lista
print " GrafoLista: <br>"; 
$grafoLista = new GrafoLista(true, true);
$grafoLista->inserirVertice("A");
$grafoLista->inserirVertice("B");
$grafoLista->inserirVertice("C");
$grafoLista->inserirVertice("D");
$grafoLista->inserirVertice("E");
$grafoLista->inserirVertice("F");
$grafoLista->inserirVertice("G");
$grafoLista->inserirVertice("H");
$grafoLista->inserirAresta(0, 1, 3);
$grafoLista->inserirAresta(0, 2, 2);
$grafoLista->inserirAresta(0, 3, 7);
$grafoLista->inserirAresta(0, 4);
$grafoLista->inserirAresta(1, 5);
$grafoLista->inserirAresta(2, 3);
$grafoLista->inserirAresta(4, 1);
$grafoLista->inserirAresta(4, 3);
$grafoLista->inserirAresta(4, 7);
$grafoLista->inserirAresta(3, 2);
$grafoLista->inserirAresta(3, 6);
$grafoLista->inserirAresta(6, 7);
$grafoLista->imprimeGrafo();
print "<br>";
print " Label Vertice: ";
print $grafoLista->labelVertice(2);
print "<br>";
print " Existe Aresta?: ";
print $grafoLista->existeAresta(1, 3);
print "<br>";
print " Vizinhos: "; 
foreach($grafoLista->retornarVizinhos(1) as $indice){ print $indice." ";}
print "<br>";
print "Ordem de visita (Busca em largura): ";
foreach($grafoLista->retornaBuscaLargura(2) as $indice){ print $indice." ";}
print "<br>";
print "<br>";
print "<br>";

print_r($grafoMatriz->retornaBuscaProfundidade(0));



