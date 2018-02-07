<?php

class mobil
{
	public $warna;
	public $jumlah_ban;
	public $merk;

	private $kecepatan;
	private $arah;
	private $speedometer;

	function __construct(){
		$this->warna = "putih";
		$this->jumlah_ban = "4";
		$this->merk = "Suzuki Swift";

		$this->kecepatan = 0;
		$this->arah = "N";
		$this->speedometer = 0;
	}

	function getWarna(){
		return $this->warna;
	}

	public function getJumlahBan(){
		return $this->jumlah_ban;
	}

	public function getMerk(){
		return $this->merk;
	}

	public function setWarna($warna){
		$this->warna = $warna;
	}

	public function setJumlahBan($jumlah_ban){
		$this->jumlah_ban = $jumlah_ban;
	}
	public function setMerk($merk){
		$this->merk = $merk;
	}

	public function getArah(){
		return $this->arah;
	}

	public function setArah($arah){
		$this->arah = $arah;
	}

	public function getKecepatan(){
		return $this->kecepatan;
	}

	public function tambahKecepatan($percepatan){
		$this->kecepatan = $this->kecepatan + $percepatan;
	}
	public function kurangiKecepatan($percepatan){
		$this->kecepatan = $this->kecepatan - $percepatan;
	}

	public function getSpeedometer(){
		return $this->speedometer;
	}
	public function tambahSpeedometer($meter){
		$this->speedometer = $this->speedometer + $meter;
	}

	public function jalan($meter, $waktu){
		if($this->getArah()=="F"){
			for($i=0;$i<$waktu;$i++){
				$this->tambahKecepatan(($meter/$waktu));
			}
			$this->tambahSpeedometer($meter); 
			echo "mobil maju ".$meter." meter";      
		}else if ($this->getArah()=="B"){
			for($i=0;$i<$waktu;$i++){
				$this->kurangiKecepatan(($meter/$waktu));
			}
			$this->tambahSpeedometer($meter);
			echo "mobil mundur ".$meter." meter";  
		}else{
			echo "mobil dalam keadaan netral";
		}
	}
}

$mobil = new Mobil();
echo "Warna : ".$mobil->getWarna()."<br>";
echo "Jumlah Ban : ".$mobil->getJumlahBan()."<br>";
echo "Merk : ".$mobil->getMerk()."<br>";

$mobil->setWarna('biru');
$mobil->setMerk('Mitsubitshi Lancer Evo');
echo "<br><br>Setelah diubah properti nya <br>";

echo "Warna : ".$mobil->getWarna()."<br>";
echo "Jumlah Ban : ".$mobil->getJumlahBan()."<br>";
echo "Merk : ".$mobil->getMerk()."<br>";

$mobil->setArah('F');
$mobil->jalan(10,1);
echo "<br>Speedometer : ".$mobil->getSpeedometer()."m<br>";

$mobil->jalan(100,5);
echo "<br>Speedometer : ".$mobil->getSpeedometer()."m<br>";

$mobil->setArah('B');
$mobil->jalan(500,10);
echo "<br>Speedometer : ".$mobil->getSpeedometer()."m<br>";