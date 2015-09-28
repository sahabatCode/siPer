<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION['status']=='admin'){
    $aksi="mod/data_master/member/member_aksi.php";
	   
    $tampil = mysql_query("SELECT * FROM member WHERE id_member ='$_GET[id]'");
    $y      = mysql_fetch_array($tampil);
    ?>
    <div class="judul"><h2> Ubah Data Member</h2></div>
       <div class="area_main">
        <form method="POST" action="<?php echo "$aksi?mod=mem&aksi=ubh_dt"; ?>">
        <table class="form">
		  <tr>
            <td>ID Member</td>
            <td>:</td>
            <td>
              <input type="text" name="id_member" id="id_member" maxlength="6" value="<?php echo $y['id_member']; ?>" size="10" disabled="disabled" />
              <input type="hidden" name="id_mem" id="id_mem" value="<?php echo $y['id_member']; ?>" size="10" />            
            </td>
          </tr>
		  <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $y['nama']; ?>" size="30" /></td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tmp_lahir" id="tmp_lahir" value="<?php echo $y['tmp_lahir']; ?>" size="10" /></td>
          </tr>
		  <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $y['tgl_lahir']; ?>" size="10" maxlength="10" /></td>
          </tr>
		  <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat" value="<?php echo $y['alamat']; ?>" size="10" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id="email" value="<?php echo $y['email']; ?>" size="10" /></td>
          </tr>
		  <tr>
            <td>Telphone</td>
            <td>:</td>
            <td><input type="text" name="telphon" id="telphon" value="<?php echo $y['telphon']; ?>" size="5px" /></td>
          </tr>
          <tr>
            <td>hp</td>
            <td>:</td>
            <td><input type="text" name="hp" id="hp" value="<?php echo $y['hp']; ?>" size="5px" /></td>
          </tr>
             <tr>
               <td></td>
               <td></td>
               <td><input type="submit" class="button" value="Ubah"> <input type="button" class="button" value="Batal" onclick="mem_bat()"></td>
             </tr>
           </table>
		 </form>
       </div>
<?php
   }
}
?>