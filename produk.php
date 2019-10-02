<?php 

class Produk {

	public  $judul = "Judul",
			$penulis = "Penulis",
			$penerbit = "Penerbit",
			$harga = 0;


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}


$produk3 = new Produk();
$produk3->penulis = "Erdika";
$produk3->penerbit = "Unpas";

echo $produk3->getLabel();