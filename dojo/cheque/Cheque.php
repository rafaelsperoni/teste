<?php

class Cheque{
	public function valorPorExtenso($valor){
		$inteira = NULL;
		$decimal = NULL;
		$centavos = NULL;
		$unidades = ['zero', 'um', 'dois', 'três', 'quatro', 
					 'cinco', 'seis', 'sete', 'oito', 'nove',
					 'dez','onze', 'doze', 'treze', 'quatorze', 'quinze',
					 'dezesseis', 'dezessete', 'dezoito', 'dezenove'];
		$dezenas = ['dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta',
					'setenta', 'oitenta', 'noventa'];
		$centenas = ['cento', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos',
					 'seiscentos', 'setescentos', 'oitocentos', 'novecentos', 'mil']					

		$partes = explode(".", $valor);
		$inteira = $partes[0];
		if (sizeof($partes)>1){
			$decimal = (int)$partes[1];
		}

		if ($inteira<20){			
			$texto = $unidades[$inteira];
		}else{
			$dzn = floor($inteira / 10);
			$texto = $dezenas[$dzn - 1];
			$resto = $inteira % 10;
			if ($resto != 0){
				$texto .= " e ".$unidades[$resto];
			}
		}

		if ($inteira == '1'){
			$texto .= " Real";
		}else{
			$texto .= " Reais";
		}


		if (isset($decimal)){
 			if($decimal<20){			
				$centavos = $unidades[$decimal];
			}else{
				$dzn = floor($decimal / 10);
				$centavos = $dezenas[$dzn - 1];
				$resto = $decimal % 10;
				if ($resto != 0){
					$centavos .= " e ".$unidades[$resto];
				}
			}
		}

		if ($centavos){
			$texto .= " e ".$centavos." centavos";
		}
		return $texto;
	}
}