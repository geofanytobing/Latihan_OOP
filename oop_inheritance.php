<?php

class sepeda
{
	 public $warna;
	 private $merk;
	 protected $jenis;

	 function __construct(){
	 	$this->warna = "";
	 	$this->merk = "";
	 	$this->jenis = "";
	 }
	 public function getWarna(){
	 	return $this->warna;
	 }
	 public function getMerk(){
	 	return $this->merk;
	 }
	 public function getJenis(){
	 	return $this->jenis;
	 }

	 public function setWarna($warna){
	 	$this->warna = $warna;
	 }

	 public function setMerk($merk){
	 	$this->merk = $merk;
	 }

	 public function setJenis($jenis){
	 	$this->jenis = $jenis;
	 }

	 function __destruct(){

	 }
}

class pixi extends sepeda{

	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'Pixi';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "ini sepeda ".$this->jenis." dengan merk ".$this->getMerk()." berwarna ".$this->warna;
	}
}

class bmx extends sepeda{

	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'BMX';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "ini sepeda ".$this->jenis." dengan merk ".$this->getMerk()." berwarna ".$this->warna;
	}
}

$sepeda_pixi = new pixi();
$sepeda_pixi->set_spesifikasi('Toyota','Hijau');
echo $sepeda_pixi->summary();

echo "<br>";
$sepeda_bmx = new bmx();
$sepeda_bmx->set_spesifikasi('Yamaha','Kuning');
echo $sepeda_bmx->summary();
?>
