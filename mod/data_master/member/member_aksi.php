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
    if ($mod=='mem' AND $aksi=='hap_dt'){
      mysql_query("DELETE FROM barang WHERE id_brg='$_GET[id]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
    //tambah data
    elseif($mod=='mem' AND $aksi=='tb_dt'){
      mysql_query("INSERT INTO member(id_member,
									  nama,
									  tmp_lahir,
									  tgl_lahir,
									  alamat,
									  email,
									  telphon,
									  hp) 
				              VALUES ('$_POST[id_member]',
									  '$_POST[nama]',
									  '$_POST[tmp_lahir]',
									  '$_POST[tgl_lahir]',
									  '$_POST[alamat]',
									  '$_POST[email]',
									  '$_POST[telphon]',
									  '$_POST[hp]')");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
    //ubah data
    elseif($mod=='mem' AND $aksi=='ubh_dt'){
      mysql_query("UPDATE barang SET nama_brg   = '$_POST[nama_brg]',
									 id_merk    = '$_POST[merk]',
									 id_kat     = '$_POST[kategori]',
									 id_sat     = '$_POST[satuan]',
									 harga_beli = '$_POST[harga_beli]',
									 harga_jual = '$_POST[harga_jual]',
									 barcode    = '$_POST[barcode]',
									 stock      = '$_POST[stock]'
							   WHERE id_brg     = '$_POST[id_brg_h]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
  }
}
?>