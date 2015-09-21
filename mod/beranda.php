<?php
if ($_SESSION['status']=='admin'){
?>
  <div class="judul_awal"><h2>Hay <?php echo $_SESSION ['username']; ?>,... Selamat Datang</h2></div>
  <p>Sekarang Anda berada pada <b>Sistem Informasi Perpustakaan</b><br />
     Anda login sebagai : <b><?php echo $_SESSION['status'];?><?php echo $_SESSION['id_user'] ; ?></b>, pada hari <b><?php echo $hari_ini.", ". tgl_indo(date("Y m d")). " | " . date("H:i:s") ." WIB "; ?></b><br />
    
     
     Perlu diperhatikan!! Apabila Anda ingin keluar pada aplikasi ini, Anda harus <a href="mod/logout.php"><b>Logout</b></a> untuk menjaga keamanan sistem.
  </p>
<?php
}
?>
