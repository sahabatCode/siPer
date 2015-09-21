<?php
if ($_SESSION['status']=='admin'){
?>
  <ul class="dropdown">
    <li><a href="?mod=beranda">Beranda</a></li>
    
	<li><a href="#">Data Master</a>
	  <ul>
        <li><a href="?mod=kat">Data Kategori</a></li>
	    <li><a href="?mod=buk">Buku</a></li>
	    <li><a href="?mod=mem">Member</a></li>
	  </ul>
	</li>
	
    <li><a href="#">Transaksi</a>
	  <ul><li><a href="#">Pinjam</a></li></ul>
	</li>		
	
    <li><a href="#">Laporan</a>
	  <ul>
	    <li><a href="">Laporan Barang</a></li>
	    <li><a href="">Laporan Penjualan</a></li>
        <li><a href="">Rincian Penjualan</a></li>										
	  </ul>
    </li>
    
    <li><a href="#">Utility</a>
	  <ul>
        <li><a href="">Profil</a></li>
		<li><a href="">Ubah Password</a></li>
	    <li><a href="">Cetak Barcode</a></li>
	  </ul>
    </li>
    
    <li><a href="mod/logout.php">Logout</a></li>		
  </ul>
<?php
}
?>
