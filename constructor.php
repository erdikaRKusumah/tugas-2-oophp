<?php 

class Produk {

	public  $judul,
			$penulis, 
			$penerbit,
			$harga;

	public function __construct($judul = "juds", $penulis = "penuls", $penerbit = "Penerbits", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}


$produk1 = new Produk("Naruto", "Masashi", "Shonen", 30000);
$produk2 = new Produk("Uncharted", "Neil", "Sony", 250000);
$produk3 = new Produk("Dragon ball");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);