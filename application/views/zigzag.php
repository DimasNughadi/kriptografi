<script type="text/javascript">
	function encrypt() {
		let plaintext = document.getElementById("ui").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
		if (plaintext.length < 1) {
			alert("please enter some plaintext");
			return;
		}
		var row = parseInt(document.getElementById("width").value);
		console.log(plaintext);
		console.log(row);
		console.log(plaintext.length);
		let col = 0;
		if ((plaintext.length) % row == 0) {
			col = (plaintext.length) / row;
		} else {
			col = Math.floor((plaintext.length) / row) + 1;
		}
		var tempString = "";
		console.log("col : " + col);
		let k = 0;
		for (var i = 0; i < row; i++) {
			k = i;
			for (var j = 0; j < col; j++) {

				console.log(plaintext[k]);
				if (plaintext[k] != null) {
					tempString += plaintext[k];
					k += row;
				} else if (plaintext[k] == null) {
					tempString += '';
				}
			}
		}
		document.getElementById("encT").innerHTML = tempString;
	}

	function decrypt() {
		let cipherText = document.getElementById("encT").value.toLowerCase();
		if (cipherText.length < 1) {
			alert("please enter some ciphertext");
			return;
		}
		var row = parseInt(document.getElementById("width").value);
		let col = 0;
		if ((cipherText.length) % row == 0) {
			col = (cipherText.length) / row;
		} else {
			col = Math.floor((cipherText.length) / row) + 1;
		}
		var tempString = "";
		let k = 0;
		for (var i = 0; i < col; i++) {
			k = i;
			for (var j = 0; j < row; j++) {

				if (cipherText[k] != null) {
					tempString += cipherText[k];
					k += col;
				} else if (cipherText[k] == '.') {
					tempString += ' ';
				}
			}
		}
		document.getElementById("decT").innerHTML = tempString;
	}

</script>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-content">
					<h4>Buat Pesan</h4>
					<h2>ENCODER</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="send-message">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Kirim Pesan</h2>
				</div>
			</div>
			<div class="col-md-8">
				<div class="contact-form">

					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4" id="div1">
							<fieldset>
								<label for="key">Kunci: </label>
								<input name="mult" type="number" max="25" class="form-control" id="width"
									placeholder="0">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<textarea name="p" rows="6" class="form-control" id="ui" placeholder="Pesan Anda"
									required=""></textarea>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<button onclick="encrypt()" class="filled-button form-control">Enkripsi</button>
								<!-- <p><input name="btnEn" value="Encrypt" onclick="encrypt()" type="button"></p>  -->
							</fieldset>
						</div><br><br>
						<div class="col-lg-12">
							<fieldset>
								<label>Hasil Enkripsi: </label><br><br>
								<textarea name='c' id="encT"></textarea>
							</fieldset><br>
							<button onclick="decrypt()" class="btn-primary form-control">Dekripsi</button>
							<fieldset>
								<label>Hasil Dekripsi: </label><br><br>
								<textarea name='c' id="decT"></textarea>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4" id="div0">
				<ul class="accordion">
					<li>
						<a>Enkripsi</a>
						<div class="content">
							<p>Enkripsi adalah proses teknis yang mengonversikan informasi menjadi kode rahasia,
								sehingga
								mengaburkan data yang Anda kirim, terima, atau simpan. Pada dasarnya, sebuah algoritme
								digunakan
								untuk mengacak data, sebelum pihak penerima memulihkan kembali data yang diacak tersebut
								menggunakan
								kunci dekripsi. Pesan yang telah dipulihkan di dalam file yang tidak terenkripsi ini
								disebut sebagai
								"plaintext", sementara dalam bentuk terenkripsi pesan itu disebut sebagai "ciphertext".
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-4" id="div6.6" style="display:none;">
				<ul class="accordion">
					<li>
						<a>Playfair</a>
						<div class="content">
							<p>Playfair cipher atau sering disebut Playfair Square merupakan teknik enkripsi simetrik
								yang
								termasuk dalam sistem substitusi digraph. Playfair Cipher Termasuk ke dalam polygram
								cipher.</p>
						</div>
					</li>
					<li>
						<a>Aturan</a>
						<div class="content">
							<p>- Terdapat 25 buah huruf kunci Kriptografi yang terdapat dalam Playfair Chiper, kunci
								tersebut
								disusun didalam bujursangkar 5x5 dengan menghilangkan huruf J dari abjad.<br><br>-
								Kemudian Susunan
								kunci (Cipher) dalam bujursangkar diperluas dengan menambahkan baris keenam dan kolom
								keenam.<br><br>- Kemudian untuk melakukan Enkripsi, Pesan yang akan dienkripsi diatur
								terlebih
								dahulu sesuai ketentuan sebagai berikut:<br>* Ganti huruf J (jika ada) dengan huruf
								I<br>* Tulis
								pesan dalam pasangan huruf (huruf berpasangan dua-dua / bigram).<br>* Jangan ada
								pasangan huruf yang
								sama (misal AA / BB). Jika ada, sisipkan Z di tengahnya<br>* Jika jumlah huruf ganjil
								(sehingga ada
								yang tidak punya pasangan), tambahkan huruf Z di akhir</p>
						</div>
					</li>
					<li>
						<a>Komponen</a>
						<div class="content">
							<p>Plaintext<br><br>Ciphertext<br><br>Key</p>
						</div>
					</li>
					<li>
						<a>Kelemahan</a>
						<div class="content">
							<p>Kelemahan dari Playfair Cipher yaitu tingkat keamanannya dapat diserang dengan
								menggunakan teknik
								frekuensi distribusi huruf ganda pada suatu bahasa.<br><br>Selain itu, Playfair Cipher
								tidak
								menyertakan huruf J sehingga bisa menimbulkan ambiguitas pada saat dekripsi.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
