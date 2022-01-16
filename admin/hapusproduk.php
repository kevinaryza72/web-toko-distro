<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
if (file_exists("../images/$fotoproduk")) 
{
	unlink("../images/$fotoproduk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo "<script>alert('Produk Telah Berhasil Dihapus!');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
 ?>