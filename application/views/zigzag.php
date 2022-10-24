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


                <!-- <section role="main" class="content-body">

    <h2>Rail Fence Cipher </h2>
    <p>Enter the word that you want to ENCRYPT, then put "NUMBER" in a key form to make how many rail you need</p>

    Plaintext
    <BR>
    <TEXTAREA id="p" name="p" rows="4" cols="50"></TEXTAREA>
    <P>line =
        <INPUT id="key" name="key" size="5" value=" " type="text">
    </P>
    <P>
        <INPUT name="btnEn" value="Encrypt" onclick="Encrypt()" type="button">
        <INPUT name="btnDe" value="Decrypt" onclick="Decrypt(this.form)" type="button">
    </P>
    <P>Ciphertext
        <BR>
        <TEXTAREA id="c" name="c" rows="4" cols="50"></TEXTAREA>
    </P>
</section> -->

					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4" id="div1">
							<fieldset>
								<label for="key">Kunci: </label>
								<input name="key" type="number" max="25" class="form-control" id="key"
									placeholder="0">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<textarea name="p" rows="6" class="form-control" id="p" placeholder="Pesan Anda"
									required=""></textarea>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset>
								<button name="btnEn" onclick="Encrypt()" class="filled-button form-control">Enkripsi</button>
								<!-- <p><input name="btnEn" value="Encrypt" onclick="encrypt()" type="button"></p>  -->
							</fieldset>
						</div><br><br>
						<div class="col-lg-12">
							<fieldset>
								<label>Hasil Enkripsi: </label><br><br>
								<textarea name='c' id="c"></textarea>
							</fieldset><br>
							<button name="btnDe" onclick="Decrypt(this.form)" class="btn-primary form-control">Dekripsi</button>
							<fieldset>
								<label>Hasil Dekripsi: </label><br><br>
								<textarea name='z' id="z"></textarea>
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
        plaintext = document.getElementById("p").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (plaintext.length < 1) {
            alert("please enter some plaintext");
            return;
        }
        var key = parseInt(document.getElementById("key").value);
        if (key > Math.floor(2 * (plaintext.length - 1))) {
            alert("key is too large for the plaintext length.");
            return;
        }
        ciphertext = "";
        for (line = 0; line < key - 1; line++) {
            skip = 2 * (key - line - 1);
            j = 0;
            for (i = line; i < plaintext.length;) {
                ciphertext += plaintext.charAt(i);
                if ((line == 0) || (j % 2 == 0)) i += skip;
                else i += 2 * (key - 1) - skip;
                j++;
            }
        }
        for (i = line; i < plaintext.length; i += 2 * (key - 1)) ciphertext += plaintext.charAt(i);
        document.getElementById("c").value = ciphertext;
    }

    function Decrypt() {
        ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (ciphertext.length < 1) {
            alert("please enter some ciphertext (letters only)");
            return;
        }
        var key = parseInt(document.getElementById("key").value);
        if (key > Math.floor(2 * (ciphertext.length - 1))) {
            alert("please enter 1 - 22.");
            return;
        }
        pt = new Array(ciphertext.length);
        k = 0;
        for (line = 0; line < key - 1; line++) {
            skip = 2 * (key - line - 1);
            j = 0;
            for (i = line; i < ciphertext.length;) {
                pt[i] = ciphertext.charAt(k++);
                if ((line == 0) || (j % 2 == 0)) i += skip;
                else i += 2 * (key - 1) - skip;
                j++;
            }
        }
        for (i = line; i < ciphertext.length; i += 2 * (key - 1)) pt[i] = ciphertext.charAt(k++);
        document.getElementById("z").value = pt.join("");
    }
</script>
