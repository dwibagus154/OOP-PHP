<?php 

class Produk {
	public 	$judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = "harga";
	// dalam penulisan sebuah property harus diawali dengan visibility (public salah satunya)

	public function getLabel (){
		return "$this->judul,$this->penulis" ;
		// agar method bisa mengambil property, diperlukan tambahan this->
	}
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->tambahProperty = "tambah"; // bisa juga menambah property di object 
// var_dump($produk2);

$produk3 = new Produk (); // object 
$produk3->judul = "sasuke";
$produk3->penulis = "dwibagus";

echo "komik :". $produk3->judul;
echo "<br>";
echo "komik : ". $produk3->getLabel();
 ?>