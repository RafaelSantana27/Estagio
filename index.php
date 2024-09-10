<h1>Rafael Silva - Teste técnico</h1>
<p> 1) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.</p>
<p>IMPORTANTE: Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;</p>

<h3>Respota:</h3>
	<?php

	$faixa1 = 0;
	$faixa2 = 1;
    $numeroInformado = 2;

    while(true) {
        $proximaFaixa = $faixa1 + $faixa2;

        if($proximaFaixa == $numeroInformado) {
            echo "$numeroInformado pertence à sequencia...";
            break;
        }elseif($proximaFaixa > $numeroInformado){
            echo "$numeroInformado Não pertence à sequência...";
            break;
        }

        $faixa1 = $faixa2;
        $faixa2 = $proximaFaixa;
    }
	?>

<hr>

<p> 2) Escreva um programa que verifique, em uma string, a existência da letra ‘a’, seja maiúscula ou minúscula, além de informar a quantidade de vezes em que ela ocorre.</p>
<p>IMPORTANTE: Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;</p>

<h3>Respota:</h3>
	<?php
	$texto = 'RafAel SantAna da Silva';
	$letra = 'a';

	$textoMinusculo = strtolower($texto);
	$letraMinuscula = strtolower($letra);
	
	if(str_contains($textoMinusculo, $letraMinuscula)) {
		echo "Existe a letra '". $letra . "' na string. <br>";
		$cont = substr_count($textoMinusculo, $letraMinuscula);
		echo "A String possui: " . $cont . " letras";
	}
	?>

<hr>

<p>3) Observe o trecho de código abaixo: int INDICE = 12, SOMA = 0, K = 1; enquanto K < INDICE faça { K = K + 1; SOMA = SOMA + K; } imprimir(SOMA);</p>
<p>Ao final do processamento, qual será o valor da variável SOMA?</p>

<h3>Respota:</h3>
    <?php
        $indice = 12;
        $soma = 0;
        $k = 1;
        for($i = $i; $k < $indice; $i++) {
            $k += 1;
            // echo 'Valor de K: ' .$k . '<br>';
            $soma += $k;
            // echo'Valor de soma: ' . $soma . '<br>';
        }
         echo "SOMA: $soma";
	?>

<hr>

<p>4) Descubra a lógica e complete o próximo elemento:</p>

<p>a) 1, 3, 5, 7, ___</p>
<h5>Respota: 9
    <br>
    <?php
        $numero = 0;
        for($i = $i; $numero < 10; $i++) {
            if($numero % 2 != 0){
                echo "$numero, ";
            }
            $numero++;
        }
	?> 
</h5>

<p>b) 2, 4, 8, 16, 32, 64, ____</p>
<h5>Respota: 128
    <br>
    <?php
        $numero = 1;
        for($i = $i; $numero < 100; $i++) {
            $numero *= 2;
            echo "$numero, ";
        }
	?> 
</h5>

<p>c) 0, 1, 4, 9, 16, 25, 36, ____</p>
<h5>Respota: 49
    <br>
    <?php
        $numero = 0;
        for($i = $i; $numero < 10; $i++) {

            $result = pow($numero, 2);
            echo "$result, ";
            $numero++;
        }
    ?> 
</h5>

<p>d) 4, 16, 36, 64, ____</p>
<h5>Respota: 100
    <br>
    <?php
        $entrada = 1;
        // $multiplicacao = 1;
        // for($i = $i; $entrada < 50; $entrada++) {

        //     if($entrada %2 == 0) {
        //         $result = pow($entrada, 2);
        //         echo "$result, ";
        //     }
        //     // $entrada++;
        // }

        while($result <= 64) {

            if($entrada %2 == 0) {
                $result = pow($entrada, 2);
                echo "$result, ";
            }
            $entrada++;
        }
	?> 
</h5>

<p>e) 1, 1, 2, 3, 5, 8, ____</p>
<h5>Respota: 13
    <br>
    <?php
       echo "Mesma logica da sequência de Fibonacci. Primeira questão";
	?> 
</h5>

<p>f) 2,10, 12, 16, 17, 18, 19, ____</p>
<h5>Respota: 22
    <br>
    <?php
       echo "Não encontrei logica nos numeros.";
	?> 
</h5>


<p>5) Você está em uma sala com três interruptores, cada um conectado a uma lâmpada em salas diferentes. Você não pode ver as lâmpadas da sala em que está, mas pode ligar e desligar os interruptores quantas vezes quiser. Seu objetivo é descobrir qual interruptor controla qual lâmpada. Como você faria para descobrir, usando apenas duas idas até uma das salas das lâmpadas, qual interruptor controla cada lâmpada?  </p>
<h5>Respota:
    Eu deixaria inicialmente desligado apenas um dos interruptores. Mantendo dois ligados.
    
    Depois de 5 minutos, eu desligaria os dois interruptores e iria até uma das salas verificar a temperatura da lampada. Se estivesse quente, eu saberia identificar que é um daqueles dois primeiros que deixei ligado. Caso estive fria, também identificaria que é o terceiro interruptor que não liguei.
    
    Após identificar a sala com lampada fria, eu repetiria o processo com os dois iniciais interruptores, onde eu ligaria apenas um deles e esperaria novamente uns minutos e retornaria para umas das outras salas.
    
    Caso quente, eu identifico o interruptor ligado, caso não, o interruptor desligado.
</h5>




