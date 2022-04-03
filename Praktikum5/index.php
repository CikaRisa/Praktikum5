<?php
require_once "class_dispenser.php";

$awal = new Dispenser("Tidak Ada", "Cocacola", 1);
echo "<br/> Volume Awal Galon adalah ". $awal->get_volume();
echo "<br/> Harga segelasnya ". $awal->format_uang( $awal->get_hargaSegelas());
echo "<br/> Volume per gelasnya ". $awal->get_volumeGelas();
$pembeli1 = new Dispenser("Cika Risa Umaira", "Cocacola", 7);
echo "<br/> <br/> ". $pembeli1->nama. " membeli ". $pembeli1->jumlahBeli. " ". $pembeli1->namaMinuman;
echo "<br/> Sisa volume pada galon ". $pembeli1->namaMinuman. " sekarang adalah ". $pembeli1->berkurang(). " L";
echo "<br/> Total pembayaran adalah ". $pembeli1->format_uang($pembeli1->bayar());
echo "<br/> Total simpanan galon adalah ". $pembeli1->format_uang($pembeli1->penghasilan());

$pembeli2 = new Dispenser("Siska ", "Cocacola", 11);
echo "<br/> <br/> ". $pembeli2->nama. " membeli ". $pembeli2->jumlahBeli. " ". $pembeli2->namaMinuman;
echo "<br/> Sisa volume pada galon ". $pembeli2->namaMinuman. " sekarang adalah ". $pembeli1->berkurang(). " L";
echo "<br/> Total pembayaran adalah ". $pembeli2->format_uang($pembeli2->bayar());
echo "<br/> Total simpanan galon adalah ". $pembeli2->format_uang($pembeli2->penghasilan());
?>