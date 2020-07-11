<?php 

class Produk {
	public 	$judul, 
			$penulis ,
			$penerbit,
			$harga ;
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
}

class CetakInfoProduk {
	public function cetak (Produk $produk) { // diisikan class produk agar yang dimasukkan hanya bisa dari class produk, bolek diisikan boleh enggak 
		$str = "{$produk->judul} | {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
		return $str ;
	}
}


$produk3 = new Produk ("sasuke","dwibagus","dwik", "10000"); // object 


// cetak 
echo "komik :". $produk3->judul;
echo "<br>";
echo "komik : ". $produk3->getLabel();

$cetakinfo = new CetakInfoProduk ; 

//  cetak info 
echo "<br>";
echo $cetakinfo->cetak($produk3);


 ?>