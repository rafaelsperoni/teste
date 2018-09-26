<?php

use PHPUNIT\Framework\TestCase;
require "Cheque.php";

class TestaCheque extends TestCase{
	private $cheque;

	public function setUp(){
		$this->cheque = new Cheque();
	}
	public function tearDown(){
		$this->cheque = NULL;
	}

	public function testaValorExtenso(){
		$this->assertEquals('um Real', $this->cheque->valorPorExtenso(1));
		$this->assertEquals('dois Reais', $this->cheque->valorPorExtenso(2));
		$this->assertEquals('três Reais', $this->cheque->valorPorExtenso(3));
		$this->assertEquals('quatro Reais', $this->cheque->valorPorExtenso(4));
		$this->assertEquals('cinco Reais', $this->cheque->valorPorExtenso(5));
		$this->assertEquals('seis Reais', $this->cheque->valorPorExtenso(6));
		$this->assertEquals('sete Reais', $this->cheque->valorPorExtenso(7));
		$this->assertEquals('oito Reais', $this->cheque->valorPorExtenso(8));
		$this->assertEquals('nove Reais', $this->cheque->valorPorExtenso(9));
		$this->assertEquals('dez Reais', $this->cheque->valorPorExtenso(10));
		$this->assertEquals('onze Reais', $this->cheque->valorPorExtenso(11));
		$this->assertEquals('dezesseis Reais', $this->cheque->valorPorExtenso(16));
		$this->assertEquals('dezessete Reais', $this->cheque->valorPorExtenso(17));
		$this->assertEquals('dezenove Reais', $this->cheque->valorPorExtenso(19));
		$this->assertEquals('vinte Reais', $this->cheque->valorPorExtenso(20));
		$this->assertEquals('vinte e três Reais', $this->cheque->valorPorExtenso(23));	
		$this->assertEquals('trinta Reais', $this->cheque->valorPorExtenso(30));
		$this->assertEquals('trinta e cinco Reais', $this->cheque->valorPorExtenso(35));
		$this->assertEquals('sessenta Reais', $this->cheque->valorPorExtenso(60));
		$this->assertEquals('setenta e oito Reais', $this->cheque->valorPorExtenso(78));
		$this->assertEquals('um Real e cinco centavos', $this->cheque->valorPorExtenso(1.05));
		$this->assertEquals('dois Reais e trinta e dois centavos', $this->cheque->valorPorExtenso(2.32));
		$this->assertEquals('noventa e nove Reais e noventa e nove centavos', $this->cheque->valorPorExtenso(99.99));
	}
}