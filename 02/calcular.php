<?php

$n1 = $_POST['$n1'];

$vetor = array(rand(0,$n1));
$palavra = $vetor[rand(0, count($vetor)-1)];
echo "O número aleatório gerado foi: $palavra";
?>