<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION['status']=='admin'){
    include "../../../library/koneksi.php";

    $mod  = $_GET['mod'];
    $aksi = $_GET['aksi'];

    //hapus data
    if ($mod=='buk' AND $aksi=='hap_bk'){
      mysql_query("DELETE FROM buku WHERE id_buku='$_GET[id]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
    //tambah data
    else($mod=='buk' AND $aksi=='tb_buk'){
      mysql_query("INSERT INTO buku(  id_buku,
									  id_kat,
									  jd_buku,
									  penulis,
									  penerbit,
									  negara,
									  ISBN,
									  tahun,
									  sinopsis,
									  harga,
									  stock,
									  barcode) 
				              VALUES ('$_POST[id_buku_h]',
									  '$_POST[kategori]',
									  '$_POST[judul]',
									  '$_POST[penulis]',
									  '$_POST[penerbit]',
									  '$_POST[negara]',
									  '$_POST[isbn]',
									  '$_POST[tahun]',
									  '$_POST[sinopsis]',
									  '$_POST[harga]',
									  '$_POST[stock]',
									  '$_POST[barcode]')");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
    //ubah data 
    elseif($mod=='buku' AND $aksi=='ubh_buk'){
      mysql_query("UPDATE barang SET nama_buku  = '$_POST[nama_buku]',
									 id_kat     = '$_POST[kategori]',
									 jd_buku	= '$_POST[judul]',
									 penulis	= '$_POST[]',
									 penerbit	= '$_POST[]',
									 negara		= '$_POST[]',
									 isbn		= '$_POST[]',
									 tahun		= '$_POST[]',
									 sinopsis	= '$_POST[]',
									 stock      = '$_POST[stock]',
									 barcode    = '$_POST[barcode]'
							   WHERE id_buku    = '$_POST[id_buku_h]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
  }
}
?>
