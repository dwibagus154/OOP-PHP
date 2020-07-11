<?php 
// visibility ada 3 yaitu public, protected, dan private 
// public, property nya kita bisa gunakan dimana saja 
// protected, property nya hanya kita bisa gunakan pada class terebut dan turunannya (child class)
// private, propertynya hanya bisa kita gunakan pada class tersebut 

class Produk {
	public 	$judul, 
			$penulis ,
			$penerbit;
			
	protected $diskon = 0;
			
	private $harga;
			
			
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

	public function cetakProduk (){
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
	
	public function setDiskon($diskon) {
		$this->diskon = $diskon ;
	}

	public function cetakProduk (){
	$str = "komik : ".parent::cetakProduk()." - {$this->halaman} halaman";
	return $str;
	}
	

}

class film extends produk {

	public $jam;
	public function __construct($judul,$penulis,$penerbit,$harga, $jam){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jam  = $jam;

	}

	public function cetakProduk (){
	$str = "film : ". parent::cetakProduk()."- {$this->jam} jam"; // parent untuk mengambil function di parent class nya 
	return $str;
	}
	

}

class CetakInfoProduk {
	public function cetak (Produk $produk) { // diisikan class produk agar yang dimasukkan hanya bisa dari class produk, bolek diisikan boleh enggak
		$str = "{$produk->judul} | {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
		return $str ;
	}
}




$produk3 = new komik ("sasuke","dwibagus","dwik", 10000,100); // object 
$produk2 = new film ("naruto","ananta","kadek", 10000,50); // object 

// cetak 

echo $produk3->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk();

echo "<hr>";
$produk3->setDiskon(50);
echo $produk3->getHarga();


 ?>