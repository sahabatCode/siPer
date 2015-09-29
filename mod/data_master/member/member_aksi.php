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
      mysql_query("DELETE FROM member WHERE id_member='$_GET[id]'");
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
				                      VALUES ('$_POST[id_mem]',
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
      mysql_query("UPDATE member SET nama 		  ='$_POST[nama]',
      								               tmp_lahir	='$_POST[tmp_lahir]',
      								               tgl_lahir	='$_POST[tgl_lahir]',
      								               alamat		  ='$_POST[alamat]',
      								               email 		  ='$_POST[email]',
      								               telphon 	  ='$_POST[telphon]',
      								               hp 		    ='$_POST[hp]'
							                 WHERE id_member  ='$_POST[id_mem]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
  }
}
?>