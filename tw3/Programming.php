<?php

class Programming
{
	private $jamPelajaran;
	private $jumlahPelajaran;
	private $angka;

	public function setJamPelajaran($jamPelajaran)
	{
		$this->jamPelajaran = $jamPelajaran;
	}
	public function setJumlahPelajaran($jumlahPelajaran)
	{
		$this->jumlahPelajaran = $jumlahPelajaran;
	}
	public function setAngka($angka)
	{
		$this->angka = $angka;
	}

	public function getJamPelajaran()
	{
		echo $this->jamPelajaran;
	}
	public function getJumlahPelajaran()
	{
		echo $this->jumlahPelajaran;
	}
	public function getAngka()
	{
		echo $this->angka;
	}
	public function times()
	{
		echo 'Jumlah pelajaran dikali jam pelajaran dikali angka = '.$this->jumlahPelajaran*$this->jamPelajaran*$this->angka;
	}
}

$kelas = new Programming();
$kelas->setJumlahPelajaran(3);
$kelas->setJamPelajaran(3);
$kelas->setAngka(3);

echo $kelas->getJumlahPelajaran();
echo $kelas->getJamPelajaran();
echo "<br>";
echo $kelas->times();

?>