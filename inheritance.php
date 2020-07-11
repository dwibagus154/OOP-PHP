<?php 

class Produk {
	public 	$judul, 
			$penulis ,
			$penerbit,
			$harga,
			$halaman,
			$jam,
			$tipe;
	// dalam penulisan sebuah property harus diawali dengan visibility (public salah satunya)

	// function constructor selalu dilakukan tampa memangggil fungsinya 

	public function __construct($judul,$penulis,$penerbit,$harga, $halaman, $jam, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->halaman = $halaman;
		$this->jam = $jam;
		$this->tipe = $tipe;
	}

	public function getLabel (){
		return "$this->judul,$this->penulis,$this->penerbit,$this->harga"  ;
		// agar method bisa mengambil property, diperlukan tambahan this->
	}

	public function cetakProduk (){
		$str = "{$this->tipe} : {$this->judul}, {$this->penulis},{$this->penerbit} (Rp.{$this->harga}) ";
		
	}
}

class komik extends produk {
	public function cetakProduk (){
	$str = "komik : {$this->judul}, {$this->penulis},{$this->penerbit} (Rp.{$this->harga}) - {$this->halaman} halaman";
	return $str;
	}
	

}

class film extends produk {
	public function cetakProduk (){
	$str = "film : {$this->judul}, {$this->penulis},{$this->penerbit} (Rp.{$this->harga}) - {$this->jam} jam"; 
	return $str;
	}
	

}

class CetakInfoProduk {
	public function cetak (Produk $produk) { // diisikan class produk agar yang dimasukkan hanya bisa dari class produk, bolek diisikan boleh enggak
		$str = "{$produk->judul} | {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
		return $str ;
	}
}




$produk3 = new komik ("sasuke","dwibagus","dwik", 10000,100,0, "komik"); // object 
$produk2 = new film ("naruto","ananta","kadek", 10000,0,50,"film"); // object 

// cetak 

echo $produk3->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk();



 ?>