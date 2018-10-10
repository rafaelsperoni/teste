<?php

$centenas = ['', 'cento', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setescentos', 'oitocentos', 'novecentos'];
$dezenas = ['', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];
$unidades = ['', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', '', 'onze', 'doze', 'treze', 'quatorze',
			 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove'];

$texto = "novecentos e dezessete reais e trinta e cinco centavos";

$somaReal = 0;
$somaCent = 0;

$partes = explode(' reais' ,$texto);

$reais = $partes[0];

$centavos = explode(' centavos', $partes[1])[0];

$partesReal = explode(' e ', $reais);

foreach ($partesReal as $value) {
		$somaReal +=array_search($value, $centenas)*100;
		$somaReal +=array_search($value, $dezenas)*10;
		$somaReal +=array_search($value, $unidades);
}
foreach ($partesReal as $value) {
	
}

$partesCentavo = explode(' e ', $centavos);

foreach ($partesCentavo as $value) {
	$somaCent += array_search($value, $dezenas)*10;
	$somaCent += array_search($value, $unidades);
}



$total = $somaReal + ($somaCent/100);

echo $total;