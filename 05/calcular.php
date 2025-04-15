<?php

$vetor = array("Azul", "Vermelho", "Verde", "Amarelo", "Roxo");
$palavra = $vetor[rand(0, count($vetor)-1)];

    if ($palavra == "Azul")
    {
        echo "A cor gerada foi Azul: é a cor que representa 70% do Planeta Terra!";
    }

    else if ($palavra == "Vermelho")
    {
        echo "A cor gerada foi Vermelho: é a cor que representa paixão!";
    }

    else if ($palavra == "Amarelo")
    {
        echo "A cor gerada foi Amarelo: é a cor que representa felicidade e alegria!";
    }

    else if ($palavra == "Verde")
    {
        echo "A cor gerada foi Verde: é a cor que representa ganância e riqueza!";
    }

    else if ($palavra == "Roxo")
    {
        echo "A cor gerada foi Roxo: é a cor que representa mistério e o oculto!";
    }
?>