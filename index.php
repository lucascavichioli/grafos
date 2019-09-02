<?php
require_once "GrafoMatriz.php";
require_once "GrafoLista.php";


//grafo matriz
$grafoMatriz = new GrafoMatriz(false, false);
$grafoMatriz->inserirVertice("A");
$grafoMatriz->inserirVertice("B");
$grafoMatriz->inserirVertice("C");
$grafoMatriz->inserirVertice("D");
$grafoMatriz->inserirVertice("E");
$grafoMatriz->inserirVertice("F");
$grafoMatriz->inserirAresta(0, 1);
$grafoMatriz->inserirAresta(0, 2);
$grafoMatriz->inserirAresta(0, 3);
$grafoMatriz->inserirAresta(1, 3);
$grafoMatriz->inserirAresta(2, 4);
$grafoMatriz->inserirAresta(2, 5);
$grafoMatriz->inserirAresta(5, 4);
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
foreach($grafoMatriz->retornaBuscaLargura(0) as $indice){ print $grafoMatriz->labelVertice($indice)." ";}
print "<br>";
print "<br>";
foreach($grafoMatriz->retornaBuscaProfundidade(0) as $indice){ print $grafoMatriz->labelVertice($indice)." ";}
print "<br>";
print "<br>";

//Grafo lista
print " GrafoLista: <br>"; 
$grafoLista = new GrafoLista(false, false);
$grafoLista->inserirVertice("A");
$grafoLista->inserirVertice("B");
$grafoLista->inserirVertice("C");
$grafoLista->inserirVertice("D");
$grafoLista->inserirVertice("E");
$grafoLista->inserirVertice("F");
$grafoLista->inserirAresta(0, 1);
$grafoLista->inserirAresta(0, 2);
$grafoLista->inserirAresta(0, 3);
$grafoLista->inserirAresta(1, 3);
$grafoLista->inserirAresta(2, 4);
$grafoLista->inserirAresta(2, 5);
$grafoLista->inserirAresta(5, 4);
$grafoLista->imprimeGrafo();
print "<br>";
print " Label Vertice: ";
print $grafoLista->labelVertice(0);
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
foreach($grafoLista->retornaBuscaProfundidade(0) as $indice){ print $grafoLista->labelVertice($indice)." ";}
print "<br>";
print "<br>";



