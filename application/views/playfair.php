<script>
	var isChet = false;
	var isEnd = false;
	var flag = false;
	var flagX = false;
	var flagAdd = false;

	function getKeyword(key) {
		var key = document.getElementById("key").value;
		return document.getElementById("key").value;
	}

	function getString() {
		return document.getElementById("String").value;
	}

	function processKey() {
		var key = getKeyword();
		key = key.toUpperCase().replace(/\s/g, '').replace(/J/g, "I");
		var result = [];
		var temp = '';
		var alphabet = 'ABCDEFGHIKLMNOPQRSTUVWXYZ';
		for (var i = 0; i < key.length; i++) {
			if (alphabet.indexOf(key[i]) !== -1) {
				alphabet = alphabet.replace(key[i], '');
				temp += key[i];
			}
		}
		temp += alphabet;
		var result = [];
		temp = temp.split('');
		while (temp[0]) {
			result.push(temp.splice(0, 5));
		}
		return result;
	}

	function cipher() {
		var keyresult = processKey();
		var res = [];
		var error = 'Warning!!! String is empty';
		var str = getString();
		if (str === '') {
			document.getElementById('printValue').innerHTML = error;
		}
		// var err = 'ERRORX';
		var textPhrase, separator;
		str = str.toUpperCase().replace(/\s/g, '').replace(/J/g, "I");
		if (str.length === 0) {
			//document.getElementById("printValue").innerHTML = err.toUpperCase().replace(/\s/g, '').replace(/J/g, "I");
		} else {
			textPhrase = str[0];
		}
		var help = 0;
		flagAdd = false;
		for (var i = 1; i < str.length; i++) {
			if (str[i - 1] === str[i]) {
				if (str[i] === 'X') {
					separator = 'Q';
				} else {
					separator = 'X';
				}
				textPhrase += separator + str[i];
				help = 1;
			} else {
				textPhrase += str[i];
			}
			if (help === 1) {
				flagAdd = true;
			}
		}

		if (textPhrase.length % 2 !== 0) {
			if (textPhrase[textPhrase.length - 1] === 'X') {
				textPhrase += 'Q';
				isEnd = true;
				flagX = false;
			} else {
				textPhrase += 'X';
				isEnd = true;
				flagX = true;
			}
		}

		var t = [];
		var enCodeStr = '';
		for (var i = 0; i < textPhrase.length; i += 2) {
			var pair1 = textPhrase[i];
			var pair2 = textPhrase[i + 1];
			var p1i, p1j, p2i, p2j;
			for (var stroka = 0; stroka < keyresult.length; stroka++) {
				for (var stolbec = 0; stolbec < keyresult[stroka].length; stolbec++) {
					if (keyresult[stroka][stolbec] == pair1) {
						p1i = stroka;
						p1j = stolbec;
					}
					if (keyresult[stroka][stolbec] == pair2) {
						p2i = stroka;
						p2j = stolbec;
					}
				}
			}
			var coord1 = '',
				coord2 = '';

			if (p1i === p2i) {
				if (p1j === 4) {
					coord1 = keyresult[p1i][0];
				} else {
					coord1 = keyresult[p1i][p1j + 1];
				}
				if (p2j === 4) {
					coord2 = keyresult[p2i][0];
				} else {
					coord2 = keyresult[p2i][p2j + 1]
				}
			}
			if (p1j === p2j) {
				if (p1i === 4) {
					coord1 = keyresult[0][p1j];
				} else {
					coord1 = keyresult[p1i + 1][p1j];
				}
				if (p2i === 4) {
					coord2 = keyresult[0][p2j];
				} else {
					coord2 = keyresult[p2i + 1][p2j]
				}
			}
			if (p1i !== p2i && p1j !== p2j) {
				coord1 = keyresult[p1i][p2j];
				coord2 = keyresult[p2i][p1j];
			}
			enCodeStr = enCodeStr + coord1 + coord2;
		}
		document.getElementById("printValue").innerHTML = enCodeStr;
		return enCodeStr;
	}

	function deCodeCipher() {
		var deCodeStr = '';
		var text = '';
		var error = "Warning!!! String is empty";
		var text1 = cipher();
		if (text1 === '') {
			document.getElementById('printDeCode').innerHTML = error;
		}
		var keyresult = processKey();
		for (var i = 0; i < text1.length; i += 2) {
			var pair1 = text1[i];
			var pair2 = text1[i + 1];
			var p1i, p1j, p2i, p2j;
			for (var stroka = 0; stroka < keyresult.length; stroka++) {
				for (var stolbec = 0; stolbec < keyresult[stroka].length; stolbec++) {
					if (keyresult[stroka][stolbec] == pair1) {
						p1i = stroka;
						p1j = stolbec;
					}
					if (keyresult[stroka][stolbec] == pair2) {
						p2i = stroka;
						p2j = stolbec;
					}
				}
			}
			var coord1 = '',
				coord2 = '';

			if (p1i === p2i) {
				if (p1j === 0) {
					coord1 = keyresult[p1i][4];
				} else {
					coord1 = keyresult[p1i][p1j - 1];
				}
				if (p2j === 0) {
					coord2 = keyresult[p2i][4];
				} else {
					coord2 = keyresult[p2i][p2j - 1]
				}
			}
			if (p1j === p2j) {
				if (p1i === 0) {
					coord1 = keyresult[4][p1j]
				} else {
					coord1 = keyresult[p1i - 1][p1j];
				}
				if (p2i === 0) {
					coord2 = keyresult[4][p2j];
				} else {
					coord2 = keyresult[p2i - 1][p2j]
				}
			}
			if (p1i !== p2i && p1j !== p2j) {
				coord1 = keyresult[p1i][p2j];
				coord2 = keyresult[p2i][p1j];
			}
			text = text + coord1 + coord2;
		}
		text = text.split('');

		for (var i = 0; i < text.length; i++) {
			var count;
			if (flagAdd) {
				if (text[i] === text[i + 2] && (text[i + 1] === 'X' || text[i + 1] ===
						'Q')) {
					count = i + 1;
					text.splice(count, 1);
				}
			} else if (flagAdd && isEnd && (flagX || !flagX)) {
				if (text[i - 2] === text[i] && (text[i - 1] === 'X' || text[i - 1] === 'Q'))
					count = i + 1;
				text.splice(count, 1);
			} else if (!flagAdd) {
				break;
			}
		}
		if (flagX) {
			text.pop();
		}
		if (isEnd && !flagX) {
			text.pop();
		}
		text = text.join('');
		console.log(text);
		document.getElementById('printDeCode').innerHTML = text;
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
					<form action="#" method="">
						<div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4" id="div1">
                                <fieldset>
                                <label for="key">Kunci: </label>
                                <input name="key" type="text" class="form-control" id="key" placeholder="key">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                <textarea name="String" rows="6" class="form-control" id="String" placeholder="Pesan Anda" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                <button onclick="processKey(), cipher()" class="filled-button form-control">Enkripsi</button>
                                </fieldset>
                            </div><br><br>
                            <div class="col-lg-12">
                                <fieldset>
                                <label>Hasil Dekripsi: </label><br><br>
                                <h2 id="printValue"></h2>
                                </fieldset>
                            </div>
						</div>
					</form>
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
