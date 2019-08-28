<?php
require_once "GrafoMatriz.php";

$teste = new GrafoMatriz(true, false);

$teste->inserirVertice("A");
$teste->inserirVertice("B");
$teste->inserirVertice("C");
$teste->inserirVertice("D");
$teste->inserirVertice("E");
$teste->inserirVertice("F");
print_r($teste->imprimeGrafo());


