<?php
require_once "GrafoMatriz.php";

$teste = new GrafoMatriz(false, true);

$teste->inserirVertice("A");
$teste->inserirVertice("B");
$teste->inserirVertice("C");
$teste->inserirVertice("D");
$teste->inserirVertice("E");
$teste->inserirVertice("F");
$teste->inserirVertice("G");
$teste->inserirVertice("H");
$teste->inserirVertice("I");
$teste->inserirAresta(2, 0);
$teste->inserirAresta(3, 6);
$teste->inserirAresta(5, 7);
print_r($teste->imprimeGrafo());
print "<br>";
print_r($teste->labelVertice(0));

var_dump($teste->existeAresta(2, 0));

print_r($teste->retornarVizinhos(6));


