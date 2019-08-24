<?php
require_once "GrafoMatriz.php";

$teste = new GrafoMatriz(true, false);

$teste->inserirVertice("A");
$teste->inserirVertice("B");
$teste->inserirVertice("C");
print_r($teste->imprimeGrafo());


