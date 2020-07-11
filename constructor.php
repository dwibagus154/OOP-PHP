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


$produk3 = new Produk ("sasuke","dwibagus","dwik", "10000"); // object 


echo "komik :". $produk3->judul;
echo "<br>";
echo "komik : ". $produk3->getLabel();
 ?>