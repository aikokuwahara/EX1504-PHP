<?php

$n1 = $_POST['$n1'];

$h = array("Você tem pipi", "As mina aê tio", "Por que Deus odeia o Vasco?", "É o egoísta é");
$m = array("Estou confusa", "Preciso de um tempo", "É só um amigo", "O problema sou eu, não é você");

    if ($n1 == 2)
    {
        $palavra = $h[rand(0, count($h)-1)];
        echo "Frases másculas: $palavra";
    }

    else if ($n1 == 1) 
    {
        $palavra = $m[rand(0, count($m)-1)];
        echo "Frases prikitas: $palavra";
    }

    else
    {
        echo "Você não digitou nenhum gênero.";
    }
    
?>