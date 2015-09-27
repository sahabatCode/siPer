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
  ?>
    <div class="judul"><h2>Tambah Member</h2></div>
    <div class="area_main">
      <form method="POST" action="<?php echo "$aksi?mod=mem&aksi=tb_dt"; ?>">
        <table class="form">
		  
		  <tr>
            <td>Id Member</td>
            <td>:</td>
            <td><input type="text" name="id_member" value="" size="10" /></td>
          </tr>
		  <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="" size="10" /></td>
          </tr>
		  <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tmp_lahir" /></td>
          </tr>
		  <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tgl_lahir" value="" size="10" /></td>
          </tr>
		  <tr>
            <td>Alamat </td>
            <td>:</td>
            <td><input type="text" name="alamat" value="" size="10" /></td>
          </tr>
		  <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" value="" size="10" maxlength="10" /></td>
          </tr>
		  <tr>
            <td>Telephon</td>
            <td>:</td>
            <td><input type="text" name="telphon" value="" size="5px" /></td>
          </tr>
      <tr>
        <td>Hp</td>
        <td>:</td>
        <td><input type="text" name="hp" value="" size="10" /></td>
      </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" class="button" value="Simpan"> <input type="button" class="button" value="Batal" onclick="mem_bat()"></td>
          </tr>
        </table>
	  </form>
    </div>
<?php
   }
}
?>
