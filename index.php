<?php
require_once "GrafoMatriz.php";

$teste = new GrafoMatriz(true, false);

$teste->inserirVertice("A");
$teste->inserirVertice("B");
$teste->inserirVertice("C");
$teste->inserirVertice("D");
$teste->inserirVertice("E");
$teste->inserirVertice("F");
$teste->inserirVertice("G");
$teste->inserirVertice("H");
$teste->inserirVertice("I");
print_r($teste->imprimeGrafo());
print "<br>";
print_r($teste->labelVertice(0));


