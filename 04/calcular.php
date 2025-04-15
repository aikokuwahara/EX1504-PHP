<?php

$n1 = $_POST['$n1'];

$p = array("Avante palestra", "É o time da virada", "É o time do amor", "Cabeça fria coração quente");
$c = array("Gaviões da fiel", "É o Coringão", "Na vitória ou na derrota, sempre timão", "No estádio ou no sofá, meu amor pelo Corinthians é onde o meu coração está");
$sp = array("É o trikas", "Vamos tricolor", "Ó tricolor, eu amo você", "Respeite o passado, honre o presente");
$s = array("Hoje quem dá a bola é o Santos", "Caiu na vila o peixe fuzila", "Nascer, viver e pelos Santos morrer", "Quero tchu quero tchá, quero tchutchátchá");

    if ($n1 == 1)
    {
        $palavra = $p[rand(0, count($p)-1)];
        echo "Palmeiras: $palavra";
    }

    else if ($n1 == 2) 
    {
        $palavra = $c[rand(0, count($c)-1)];
        echo "Corinthians: $palavra";
    }
    
    else if ($n1 == 3) 
    {
        $palavra = $sp[rand(0, count($sp)-1)];
        echo "São Paulo: $palavra";
    }

    else if ($n1 == 4) 
    {
        $palavra = $s[rand(0, count($s)-1)];
        echo "Santos: $palavra";
    }

    else 
    {
        echo "Você não digitou nenhum time.";
    }
?>