<?php 
// visibility ada 3 yaitu public, protected, dan private 
// public, property nya kita bisa gunakan dimana saja 
// protected, property nya hanya kita bisa gunakan pada class terebut dan turunannya (child class)
// private, propertynya hanya bisa kita gunakan pada class tersebut 

class Produk {
	private	$judul, 
			$penulis ,
			$diskon = 0 ,
			$harga,
			$penerbit;
			
	
			
			
	// dalam penulisan sebuah property harus diawali dengan visibility (public salah satunya)

	// function constructor selalu dilakukan tampa memangggil fungsinya 

	public function __construct($judul,$penulis,$penerbit,$harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getHarga (){
		return $this->harga - ($this->harga * $this->diskon /100);
	}
	public function getLabel (){
		return "$this->judul,$this->penulis,$this->penerbit,$this->harga"  ;
		// agar method bisa mengambil property, diperlukan tambahan this->
	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon ;
	}
	public function getDiskon(){
		return $this->diskon;
	}
	public function setJudul($judul) {
		$this->judul = $judul ;
	}
	public function getJudul(){
		return $this->diskon;
	}
	public function setPenulis($penulis) {
		$this->penulis = $penulis ;
	}
	public function getpenulis(){
		return $this->penulis;
	}
	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit ;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}

	public function getInfoProduk (){
		$str = "{$this->judul}, {$this->penulis},{$this->penerbit} (Rp.{$this->harga}) ";
		return $str;
	}

}

class komik extends produk {
	public $halaman;
	public function __construct($judul,$penulis,$penerbit,$harga, $halaman){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->halaman  = $halaman;
	}
	 
	public function getInfoProduk (){
	$str = "komik : ".parent::getInfoProduk()." - {$this->halaman} halaman";
	return $str;
	}
	

}


class film extends produk {

	public $jam;
	public function __construct($judul,$penulis,$penerbit,$harga, $jam){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jam  = $jam;

	}

	public function getInfoProduk (){
	$str = "film : ". parent::getInfoProduk()."- {$this->jam} jam"; // parent untuk mengambil function di parent class nya 
	return $str;
	}
	

}

class CetakInfoProduk {

	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk = $produk ;
	}

	public function cetak () {
	
		$str = "DAFTAR PRODUK <br>";

		foreach ($this->daftarProduk as $p ) {
			$str .=
			 "- {$p->getInfoProduk()} <br>"; 

		}
		return $str;
	 }


}




$produk3 = new komik ("sasuke","dwibagus","dwik", 10000,100); // object 
$produk2 = new film ("naruto","ananta","kadek", 10000,50); // object 

$cetakProduk = new CetakInfoProduk ;
$cetakProduk->tambahProduk($produk2);
var_dump($cetakProduk->daftarProduk);
$cetakProduk->tambahProduk($produk3);
var_dump($cetakProduk->daftarProduk);
echo $cetakProduk->cetak();

 ?>