<!-- Modal Persegi -->
<div class="modal fade" id="persegiModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Persegi</h4>
				<form action="index.php?page=persegi&method=submit" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="sisi" placeholder="Sisi">
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="cm" checked="">
						<label for="satuan" class="form-check-label">Centimeter</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="m">
						<label for="satuan" class="form-check-label">Meter</label>
					</div>
					<div class="submit-option">
						<button class="btn btn-danger" type="submit" name="luas">Luas</button>
						<button class="btn btn-info" type="submit" name="keliling">Keliling</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

<!-- Modal Persegi Panjang -->
<div class="modal fade" id="persegiPanjangModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Persegi Panjang</h4>
				<form action="index.php?page=persegiPanjang&method=submit" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="panjang" placeholder="Panjang">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="lebar" placeholder="Lebar">
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="cm" checked="">
						<label for="satuan" class="form-check-label">Centimeter</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="m">
						<label for="satuan" class="form-check-label">Meter</label>
					</div>
					<div class="submit-option">
						<button class="btn btn-danger" type="submit" name="luas">Luas</button>
						<button class="btn btn-info" type="submit" name="keliling">Keliling</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

<!-- Modal Lingkaran -->
<div class="modal fade" id="lingkaranModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Lingkaran</h4>
				<form action="index.php?page=lingkaran&method=submit" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="diameter" placeholder="Diameter">
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="cm" checked="">
						<label for="satuan" class="form-check-label">Centimeter</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="m">
						<label for="satuan" class="form-check-label">Meter</label>
					</div>
					<div class="submit-option">
						<button class="btn btn-danger" type="submit" name="luas">Luas</button>
						<button class="btn btn-info" type="submit" name="keliling">Keliling</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

<!-- Modal Belah Ketupat -->
<div class="modal fade" id="belahKetupatModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Belah Ketupat</h4>
				<form action="index.php?page=belahKetupat&method=submit" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="sisi" placeholder="Sisi" aria-describedby="sisiHelp">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="diagonal[]" placeholder="Diagonal 1">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="diagonal[]" placeholder="Diagonal 2">
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="cm" checked="">
						<label for="satuan" class="form-check-label">Centimeter</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="m">
						<label for="satuan" class="form-check-label">Meter</label>
					</div>
					<div class="form-group">
						<small><strong>Note : </strong>Jika ingin menghitung Luas, diagonal 1 dan 2 harus disisi, atau boleh cuma salah satu diagonal, tetapi sisi harus diisi. Untuk menghitung keliling bisa menggunakan sisi atau kedua diagonal</small>
					</div>
					<div class="submit-option">
						<button class="btn btn-danger" type="submit" name="luas">Luas</button>
						<button class="btn btn-info" type="submit" name="keliling">Keliling</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

<!-- Modal Segitiga -->
<script src="js/segitiga.js"></script>
<div class="modal fade" id="segitigaModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Segitiga</h4>
				<form action="index.php?page=segitiga&method=submit" method="POST" id="form-segitiga">
					<div class="form-group">
						<select name="jenis" id="jenis" class="form-control" onchange="tampilkan()">
							<option value="sama-sisi" selected>Segitiga Sama Sisi</option>
							<option value="sama-kaki">Segitiga Sama Kaki</option>
							<option value="sembarang">Segitiga Sembarang</option>
						</select>
					</div>
					<div id="opsi-segitiga">
						<!-- Opsi Default -->
						<div class='form-group'>
							<input type='number' class='form-control' name='sisi' placeholder='Sisi' required>
						</div>

						
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="cm" checked="">
						<label for="satuan" class="form-check-label">Centimeter</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="form-check-input" name="satuan" id="satuan" value="m">
						<label for="satuan" class="form-check-label">Meter</label>
					</div>
					<div class="submit-option">
						<button class="btn btn-danger" type="submit" name="luas">Luas</button>
						<button class="btn btn-info" type="submit" name="keliling">Keliling</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>