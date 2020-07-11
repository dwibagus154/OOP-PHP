<?php 

// cara medefine constant ada 2 yaitu dengan define dan const. define seperti membuat menjadi global, sedangkan const bisa digunakan didalam class 

define("NAMA", "dwibagus");
echo NAMA ;

class Coba {
	const NAMAP = "DWIBAGUS";

}
echo Coba::NAMAP;

// selain itu terdapat beberapa magig contant seperti __LINE__, __FUNCTION__, __FILE__ dll
 ?>