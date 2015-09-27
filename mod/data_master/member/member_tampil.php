<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION[status]=='admin'){
    $aksi="mod/data_master/member/member_aksi.php";
  ?>
    <div class="judul"><h2>Data Member</h2></div>
    <div class="tambah"><input type="button" class="button" value="Tambah Data" onclick="mem_tb()"></div>
    <div class="area_main"><!-- class area_main -->											
      <table class="judul" >
        <tr>
          <th width="20px">no.</th>
          <th width="200px">nama member</th>
          <th width="200">Alamat</th>
          <th width="200">No Hp</th>
          <th width="80px" align="center">aksi</th>
        </tr>
      </table>
      <div class="data"><!-- class data -->
      <table class="data">
      <?php
      $no=1;

      $mem = mysql_query("SELECT * FROM member");
      $cek_mem = mysql_num_rows($mem);

      if ($cek_mem > 0){
        while($y = mysql_fetch_array($mem)){
	  ?>
          <tr>
            <td width="20px" align="center"><?php echo $no; ?></td>
            <td width="200px"><?php echo $y['nama']; ?></td>
            <td width="200"><?php echo $y['alamat']; ?></td>
            <td width="200"><?php echo $y['hp']; ?></td>
            <td width="80px" align="center">
            <a href="?mod=mem_ub&id=<?php echo $y['id_']; ?>"><img src="images/edit.png" title="edit"></a>
            <a href="<?php echo "$aksi?mod=mem&aksi=hap_dt&id=$y[id_member]"; ?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $y['id_member']; ?>')"><img src="images/delete.png" title="Hapus"></a>
            </td>
          </tr>
      <?php
        $no++;
        }
      }
      else{
      ?>
        <tr><td colspan="3"><b><center>DATA KATEGORI BELUM TERSEDIA</center></b></td></tr>
      <?php
      }
      ?>
      </table>
      </div><!-- end class data -->
      <div class="jml_data">Jumlah Data : <?php echo $cek_mem; ?></div>
    </div><!-- end class area_main -->
    <?php
  }
}
?>
