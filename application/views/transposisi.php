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
								<input name="key" type="text" class="form-control" id="key" placeholder="key">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<textarea name="c" rows="6" class="form-control" id="c" placeholder="Pesan Anda"
									required=""></textarea>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<button onclick="processKey(), cipher()" class="filled-button form-control">Enkripsi</button>

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

<script type="text/javascript">
                                function Encrypt() {
                                    plaintext = document.getElementById("p").value.toLowerCase().replace(/[^a-z]/g, "");
                                    if (plaintext.length < 1) {
                                        alert("please enter some plaintext");
                                        return;
                                    }
                                    var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");
                                    var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
                                    if (pc == "") pc = "x";
                                    while (plaintext.length % key.length != 0) plaintext += pc.charAt(0);
                                    var colLength = plaintext.length / key.length;
                                    var chars = "abcdefghijklmnopqrstuvwxyz";
                                    ciphertext = "";
                                    k = 0;
                                    for (i = 0; i < key.length; i++) {
                                        while (k < 26) {
                                            t = key.indexOf(chars.charAt(k));
                                            arrkw = key.split("");
                                            arrkw[t] = "_";
                                            key = arrkw.join("");
                                            if (t >= 0) break;
                                            else k++;
                                        }
                                        for (j = 0; j < colLength; j++) ciphertext += plaintext.charAt(j * key.length +
                                            t);
                                    }
                                    document.getElementById("c").value = ciphertext;
                                }

                                function Decrypt(f) {
                                    ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^a-z]/g,
                                        "");
                                    if (ciphertext.length < 1) {
                                        alert("please enter some ciphertext (letters only)");
                                        return;
                                    }
                                    keyword = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");
                                    klen = keyword.length;
                                    if (klen <= 1) {
                                        alert("keyword should be at least 2 characters long");
                                        return;
                                    }
                                    // first we put the text into columns based on keyword length
                                    var cols = new Array(klen);
                                    var colLength = ciphertext.length / klen;
                                    for (i = 0; i < klen; i++) cols[i] = ciphertext.substr(i * colLength, colLength);
                                    // now we rearrange the columns so that they are in their unscrambled state
                                    var newcols = new Array(klen);
                                    chars = "abcdefghijklmnopqrstuvwxyz";
                                    j = 0;
                                    i = 0;
                                    while (j < klen) {
                                        t = keyword.indexOf(chars.charAt(i));
                                        if (t >= 0) {
                                            newcols[t] = cols[j++];
                                            arrkw = keyword.split("");
                                            arrkw[t] = "_";
                                            keyword = arrkw.join("");
                                        } else i++;
                                    }
                                    // now read off the columns row-wise
                                    plaintext = "";
                                    for (i = 0; i < colLength; i++) {
                                        for (j = 0; j < klen; j++) plaintext += newcols[j].charAt(i);
                                    }
                                    document.getElementById("p").value = plaintext;
                                }
                            </script>