<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION['status']=='admin'){
    $aksi="mod/data_master/buku/buku_aksi.php";
  ?>
    <div class="judul"><h2>Tambah Buku</h2></div>
    <div class="area_main">
      <form method="POST" action="<?php echo "$aksi?mod=buk&aksi=tb_buk"; ?>">
        <table class="form">
		  <tr>
            <td>ID Buku</td>
            <td></td>
            <td>
              <input type="text" name="id_buku" id="id_buku" maxlength="6" value="<?php echo kdauto("buku","BK"); ?>" size="10" disabled="disabled" />
              <input type="hidden" name="id_buku_h" id="id_buku_h" value="<?php echo kdauto("buku","BK"); ?>" size="10" />            
            </td>
          </tr>
           <tr>
            <td>Kategori</td>
            <td></td>
            <td>
              <select name="kategori" style="width:130px;">
				<option selected="selected" value="">- Pilih Kategori -</option>
				<?php
				$kat=mysql_query("SELECT * FROM kategori ORDER BY id_kat DESC");		  
				if (mysql_num_rows($kat)>0) {
				  while ($k=mysql_fetch_array($kat)){
				?>
				    <option value="<?php echo $k['id_kat']; ?>"><?php echo $k['nama_kat']; ?></option>
                <?php
				}
			  }
              ?>
		      </select>         
            </td>
          </tr>
		  <tr>
            <td>Judul</td>
            <td></td>
            <td><input type="text" name="judul" id="judul" value="" size="30" /></td>
          </tr>
          <tr>
            <td>Penulis</td>
            <td></td>
            <td><input type="text" name="penulis" id="penulis" value="" size="30" /></td>
          </tr>
          <tr>
            <td>Penerbit</td>
            <td></td>
            <td><input type="text" name="penerbit" id="penerbit" value="" size="30" /></td>
          </tr>
           <td>Negara</td>
            <td></td>
            <td><input type="text" name="negara" id="negara" value="" size="30" /></td>
          </tr>
           <td>ISBN</td>
            <td></td>
            <td><input type="text" name="isbn" id="isbn" value="" size="30" /></td>
          </tr>
          <tr>
          	<td>Tahun terbit</rd>
          	<td></rd>
          	<td><input type="text" name="tahun" id="tahun" value="" size="30"/></rd>          
          </tr>
          <tr>
            <td>Sinopsis</td>
            <td></td>
            <td><textarea name="sinopsis"></textarea></td>
          </tr>
		  <tr>
          <tr>
          	<td>Harga</rd>
          	<td></rd>
          	<td><input type="text" name="harga" id="harga" value="" size="30"/></rd>          
          </tr>
          <tr>
            <td>Stock</td>
            <td></td>
            <td><input type="text" name="stock" id="stock" value="" size="5px" /></td>
          </tr>
          <tr>
            <td>Barcode</td>
            <td></td>
            <td><input type="text" name="barcode" id="barcode" value="" size="10" maxlength="10" /></td>
          </tr>
		  
            <td></td>
            <td></td>
            <td><input type="submit" class="button" value="Simpan"> <input type="button" class="button" value="Batal" onclick="buk_bat()"></td>
          </tr>
        </table>
	  </form>
    </div>
<?php
   }
}
?>

