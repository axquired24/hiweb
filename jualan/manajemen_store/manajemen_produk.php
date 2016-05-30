<div class="container">
	<h2>Manajemen Produk</h2>
	<table class="table table-stripped">
		<thead>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Kategori</th>
			<th>URL Gambar</th>
			<th>Opsi</th>
			<tbody>
			<?php
				$sql = "SELECT produk.*, all_kategori.nama_kategori FROM produk INNER JOIN all_kategori ON produk.kategori_produk=all_kategori.id_kategori";
				$exe = mysql_query($sql);
				while($produk=mysql_fetch_array($exe))
				{
					// Keluarin isi tabel disini				
			?>
				<tr>
					<td><?php echo $produk[id_produk]; ?></td>
					<td><?php echo $produk[nama_produk]; ?></td>
					<td><?php echo $produk[harga_produk]; ?></td>
					<td><?php echo $produk[nama_kategori]; ?></td>
					<td><?php echo $produk[gambar_produk]; ?></td>
					<td><a href="./?ur=manajemen_store/edit_produk&idproduk=<?php echo $produk[id_produk]; ?>">Edit</a> - <a href="#">Hapus</a></td>
				</tr>
			<?php }; // Tutupnya While
			?>
			</tbody>
		</thead>
	</table>
</div>