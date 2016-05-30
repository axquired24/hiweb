<div class="row">
	<div class="container">
		<form class="form-horizontal" action="./?ur=manajemen_store/tambah_produk" method="post">
			<fieldset>

			<!-- Form Name -->
			<legend>Edit Produk</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="namaproduk">Nama Produk</label>  
			  <div class="col-md-4">
			  <input id="namaproduk" name="namaproduk" type="text" placeholder="Isi Nama Produk" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="hargaproduk">Harga Produk</label>  
			  <div class="col-md-4">
			  <input id="hargaproduk" name="hargaproduk" type="text" placeholder="Isi harga produk" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="urlgambar">URL Gambar</label>  
			  <div class="col-md-4">
			  <input id="urlgambar" name="urlgambar" type="text" placeholder="Isi URL Gambar" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="kategoriproduk">Kategori Produk</label>
			  <div class="col-md-4">
			    <select id="kategoriproduk" name="kategoriproduk" class="form-control">
			      <option value="batiksini">Batik Sini</option>
			      <option value="batiksitu">Batik Situ</option>
			    </select>
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-8">
			    <button id="submit" name="submit" class="btn btn-primary">Simpan</button>
			    <button id="reset" name="reset" class="btn btn-default">Cancel</button>
			  </div>
			</div>

			</fieldset>			
		</form>
	</div>
</div>