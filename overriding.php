<?php 

class Produk {
	public 	$judul, 
			$penulis ,
			$penerbit,
			$harga;
			
			
	// dalam penulisan sebuah property harus diawali dengan visibility (public salah satunya)

	// function constructor selalu dilakukan tampa memangggil fungsinya 

	public function __construct($judul,$penulis,$penerbit,$harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	
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



 ?>