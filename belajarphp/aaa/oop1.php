<?php

class Mobil {
	private $jumlahRoda;
	private $jumlahKursi;
	// public $sopir = 'Kruhd';
	private $sopir = 'Kruhd';

	public function setJumlahRoda($jumlahRoda)
	{
		$this->jumlahRoda =$jumlahRoda;
		// ini haus sm dgn prpdt//harus sam dhn prmter
	}

	public function setJumlahKursi($jumlahKursi)
	{
		$this->jumlahKursi =$jumlahKursi;
	}

	public function cetak()
	{
		echo 'Mobil punya '.$this->jumlahRoda. ' roda dan '.$this->jumlahKursi.' kursi.';
	}

	public function getSopir()
	{
		echo $this->sopir;
	}
}


$sedan = new Mobil();
// echo $sedan->sopir;
$sedan->getSopir();

// $sedan = new Mobil();
// $sedan->setJumlahRoda(4);
// $sedan->setJumlahKursi(4);
// $sedan->cetak();
// echo PHP_EOL;
// ?>

<!-- buatkan konstruktor dan destruktor dan
pemgginannan visibilty protected 
cont adn inheritance
overloading -->