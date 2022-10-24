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

			<script>
				// Javascript code to implement Hill Cipher

				// Following function generates the
				// key matrix for the key string
				function getKeyMatrix(key, keyMatrix) {
					let k = 0;
					for (let i = 0; i < 3; i++) {
						for (let j = 0; j < 3; j++) {
							keyMatrix[i][j] = (key[k]).charCodeAt(0) % 65;
							k++;
						}
					}
				}

				// Following function encrypts the message
				function encrypt(cipherMatrix, keyMatrix, messageVector) {
					let x, i, j;
					for (i = 0; i < 3; i++) {
						for (j = 0; j < 1; j++) {
							cipherMatrix[i][j] = 0;

							for (x = 0; x < 3; x++) {
								cipherMatrix[i][j] +=
									keyMatrix[i][x] * messageVector[x][j];
							}

							cipherMatrix[i][j] = cipherMatrix[i][j] % 26;
						}
					}
				}

				// Function to implement Hill Cipher
				function HillCipher(message, key) {
					// Get key matrix from the key string
					let keyMatrix = new Array(3);
					for (let i = 0; i < 3; i++) {
						keyMatrix[i] = new Array(3);
						for (let j = 0; j < 3; j++)
							keyMatrix[i][j] = 0;
					}
					getKeyMatrix(key, keyMatrix);

					let messageVector = new Array(3);
					for (let i = 0; i < 3; i++) {
						messageVector[i] = new Array(1);
						messageVector[i][0] = 0;
					}

					// Generate vector for the message
					for (let i = 0; i < 3; i++)
						messageVector[i][0] = (message[i]).charCodeAt(0) % 65;

					let cipherMatrix = new Array(3);
					for (let i = 0; i < 3; i++) {
						cipherMatrix[i] = new Array(1);
						cipherMatrix[i][0] = 0;
					}

					// Following function generates
					// the encrypted vector
					encrypt(cipherMatrix, keyMatrix, messageVector);

					let CipherText = "";

					// Generate the encrypted text from
					// the encrypted vector
					for (let i = 0; i < 3; i++)
						CipherText += String.fromCharCode(cipherMatrix[i][0] + 65);

					// Finally print the ciphertext
					document.getElementById("printValue").innerHTML = CipherText;
		      return CipherText;
				}

				// Driver code
				// Get the message to be encrypted
				let message = document.getElementById("String").value;

				// Get the key
				let key = return document.getElementById("key").value;

				HillCipher(message, key);

				// This code is contributed by rag2127

			</script>

			<div class="col-md-8">
				<div class="contact-form">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4" id="div1">
							<fieldset>
								<label for="key">Kunci: </label>
								<input name="key" type="text" class="form-control" id="key" placeholder="key">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<textarea name="String" rows="6" class="form-control" id="String" placeholder="Pesan Anda"
									required=""></textarea>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<button onclick="HillCipher()" class="filled-button form-control">Enkripsi</button>

							</fieldset>
						</div><br><br>
						<div class="col-lg-12">
							<fieldset>
								<label>Hasil Enkripsi: </label><br><br>
								<h2 id="printValue"></h2>
							</fieldset>
							<button onclick="deCodeCipher()" class=" form-control btn-primary">dekripsi</button>
							<fieldset>
								<label>Hasil Dekripsi: </label><br><br>
								<h2 id="printDeCode"></h2>
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
