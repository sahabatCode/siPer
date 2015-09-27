<?php
include "library/koneksi.php";
include "library/fungsi_tgl.php";
include "library/fungsi_indotgl.php";
include "library/fungsi_jam.php";
include "library/rupiah.php";
include "library/fungsi_kdauto.php";
include "library/fungsi_transaksi.php";
include "library/bar128.php";

if ($_GET['mod']=='beranda'){ if ($_SESSION['status']=='admin'){ include "mod/beranda.php"; }}

//---Kategori
else if ($_GET['mod']=='kat'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/kategori/kategori_tampil.php"; }}
else if ($_GET['mod']=='kat_tb'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/kategori/kategori_tambah.php"; }}
else if ($_GET['mod']=='kat_ub'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/kategori/kategori_ubah.php"; }}

//---Buku
else if ($_GET['mod']=='buk'){if ($_SESSION['status']=='admin'){include "mod/data_master/buku/buku_tampil.php";}}
else if ($_GET['mod']=='buk_tb'){if ($_SESSION['status']=='admin'){include "mod/data_master/buku/buku_tambah.php";}}
else if ($_GET['mod']=='buk_ub'){if ($_SESSION['status']=='admin'){include "mod/data_master/buku/buku_ubah.php";}}

//---Barang
else if ($_GET['mod']=='brg'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/barang/barang_tampil.php"; }}
else if ($_GET['mod']=='brg_tb'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/barang/barang_tambah.php"; }}
else if ($_GET['mod']=='brg_ub'){ if ($_SESSION['status']=='admin'){ include "mod/data_master/barang/barang_ubah.php"; }}

//---Member
else if ($_GET['mod']=='mem'){if($_SESSION['status']=='admin'){include "mod/data_master/member/member_tampil.php";}}
else if ($_GET['mod']=='mem_tb'){if($_SESSION['status']=='admin'){include "mod/data_master/member/member_tambah.php";}}
else if ($_GET['mod']=='mem_ub'){if($_SESSION['status']=='admin'){include "mod/data_master/member/member_ubah.php";}}

//---Transaksi
else if ($_GET['mod']=='pj'){ if ($_SESSION['status']=='admin'){ include "mod/transaksi/penjualan/penjualan.php"; }}
else if ($_GET['mod']=='bayar'){ if ($_SESSION['status']=='admin'){ include "mod/transaksi/bayar/bayar.php"; }}
else if ($_GET['mod']=='ctk_str'){ if ($_SESSION['status']=='admin'){ include "mod/transaksi/cetak_struk/cetak_struk.php"; }}

//---Laporan
else if ($_GET['mod']=='lap_brg'){ if ($_SESSION['status']=='admin'){ include "mod/laporan/lap_barang/lap_barang.php"; }}
else if ($_GET['mod']=='lap_pj'){ if ($_SESSION['status']=='admin'){ include "mod/laporan/lap_penjualan/lap_penjualan.php"; }}
else if ($_GET['mod']=='rin_pj'){ if ($_SESSION['status']=='admin'){ include "mod/laporan/rincian_penjualan/rincian_penjualan.php"; }}

//---Privasi
else if ($_GET['mod']=='tok'){ if ($_SESSION['status']=='admin'){ include "mod/utility/profil_toko/profil_toko.php"; }}
else if ($_GET['mod']=='pass'){ if ($_SESSION['status']=='admin'){ include "mod/utility/ubah_pass/ubah_pass.php"; }}
else if ($_GET['mod']=='bar'){ if ($_SESSION['status']=='admin'){ include "mod/utility/cetak_barcode/barcode.php"; }}
else if ($_GET['mod']=='ctk_bar'){ if ($_SESSION['status']=='admin'){ include "mod/utility/cetak_barcode/cetak_barcode.php"; }}

else{ echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>"; }
?>
