<h2>Detail Pembelian</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
				 ON pembelian.id_pelanggan=pelanggan.id_pelanggan
				 WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();

?>

<strong> Nama Pelanggan :<?php echo $detail['nama_pelanggan']; ?></strong> <br>
<p>
	Nomor Pelanggan :<?php echo $detail['telepon_pelanggan']; ?> <br>
	Email Pelanggan :<?php echo $detail['email_pelanggan']; ?>
</p>

<p>
	Tanggal Pembelian :<?php echo $detail['tanggal_pembelian']; ?> <br>
	Total Pembelian :<?php echo $detail['total_pembelian']; ?>
</p>

