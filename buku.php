<?php
//tes git
class buku {
	// properties
	public $judulbuku;
	public $pengarang ="yusuf";
	public $penerbit;
	public $tahunterbit;
	public $cetakan;
	
	 // method = hello
	public function buku()
	{
		return "hasil buku";
	}
}

//Membuat instance
$rpl = new buku ();

// Get values
echo $rpl -> buku();
echo "<br />";
echo "<hr />";

// Get values
echo $rpl -> judulbuku = "RPL";
echo "<br />";
echo $rpl -> pengarang; 
echo "<br />";
echo $rpl -> penerbit = "Gramedia";
echo "<br />";
echo $rpl -> tahunterbit = "2019";
echo"<br />";
echo $rpl -> cetakan ="New";
echo "<br/>";

?>
?
?