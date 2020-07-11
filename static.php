<?php 

// class cobaStatic {
// 	public static $angka = 1;

// 	public static function coba(){
// 		return "halo.". self::$angka++." kali";
// 	}
// }

// echo cobaStatic::$angka ;
// echo "<br>";
// echo cobaStatic::coba(); 
// echo "<hr>";
// echo cobaStatic::coba(); 

// penggunaan yang lebih komplex 

class Coba {
	public static $angka = 0;

	public function coba(){
		return "halo.". self::$angka++ ." kali";
	}
}
$str = new Coba ;

echo $str->coba();
echo "<br>"; 
echo $str->coba();
echo "<br>";  
echo $str->coba(); 
 
echo "<hr>";
$str1 = new Coba ;

echo $str1->coba();
echo "<br>";  
echo $str1->coba(); 
echo "<br>"; 
echo $str1->coba(); 
 


 ?>
