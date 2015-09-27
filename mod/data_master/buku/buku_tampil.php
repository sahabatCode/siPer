<?php
session_start();
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
<?php
}
else{
  if ($_SESSION[status]=='admin'){
    $aksi="mod/data_master/buku/buku_aksi.php";
  ?>
    <div class="judul"><h2>Buku</h2></div>
    <div class="tambah"><input type="button" class="button" value="Tambah Buku" onclick="buk_tb()"></div>
    <div class="area_main"><!-- class area_main -->											
      <table class="judul" >
        <tr>
          <th width="25px" align="center">no.</th>
          <th width="225px">Judul</th>
          <th width="100px">pengarang</th>
          <th width="100px">penerbit</th>
          <th width="100px">ISBN</th>
          <th width="100px">kategori</th>
          <th width="50px">stock</th>
          <th width="60px" align="center">aksi</th>
        </tr>
      </table>
      <div class="data"><!-- class data -->
      <table class="data">
      <?php
      $no=1;
      $buk = mysql_query("SELECT b.*, k.* 
      						FROM buku b, kategori k
      						WHERE b.id_kat = k.id_kat
      						ORDER BY b.id_brg DESC");
      $cek_buk = mysql_num_rows($buk);

      if ($cek_brg > 0){
        while($y = mysql_fetch_array($buk)){
		  $harga_jual = format_number($y['harga_jual']);
		  $harga_beli = format_number($y['harga_beli']);
	  ?>
          <tr>
            <td width="25px" align="center"><?php print $no; ?></td>
            <td width="225px"><?php echo $y['nama_brg']; ?></td>
            <td width="100px"><?php echo $y['nama_merk']; ?></td>
            <td width="100px"><?php echo $y['nama_kat']; ?></td>
            <td width="100px"><?php echo $y['nama_sat']; ?></td>
            <td width="100px" align="right"><?php echo $harga_beli; ?></td>
            <td width="100px" align="right"><?php echo $harga_jual; ?></td>
            <td width="50px" align="center"><?php echo $y['stock']; ?></td>
            <td width="60px" align="center">
              <a href="?mod=buk_ub&id=<?php echo $y['id_buku']; ?>"><img src="images/edit.png" title="edit"></a> 
              <a href="<?php echo "$aksi?mod=buk&aksi=hap_bk&id=$y[id_buku]"; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $y['nama_buku']; ?>')"><img src="images/delete.png" title="Hapus"></a>
            </td>
          </tr>
      <?php
        $no++;
        }
      }
      else{
      ?>
        <tr><td colspan="9"><b><center>DATA BARANG BELUM TERSEDIA</center></b></td></tr>
      <?php
      }
      ?>
      </table>
      </div><!-- end class data -->
      <div class="jml_data">Jumlah Data : <?php echo $cek_brg; ?></div>
    </div><!-- end class area_main -->
    <?php
  }
}
?>
