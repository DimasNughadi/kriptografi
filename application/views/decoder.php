    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Artikan Pesan</h4>
              <h2>DECODER</h2>
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
              <h2>Artikan Pesan</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="<?= base_url(
                  'decoder/decode'
              ) ?>" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label for="algo">Algoritma: </label>
                     <select name="algo" id="algo" onchange="showDiv('div', this)"required="">
                        <option selected disabled hidden><?php echo $algokey; ?></option>
                        <option value="Caesar">Caesar Cipher</option>
                        <option value="Vigenere">Vigenere Cipher</option>
                        <option value="Affine">Affine</option>
                      </select>
                    </fieldset><br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div1" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <input name="key1" type="number" class="form-control" id="key1" placeholder="0">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div2" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <input name="key2" type="text" class="form-control" id="key2" placeholder="text">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div3" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <!-- <input name="key3" type="number" class="form-control" id="key3" placeholder="0"> -->
                      <div class="row">
                        <div class = "col">
                          <input name="key3" type="number" class="form-control" id="key3" placeholder="0">
                          <input name="key33" type="number" class="form-control" id="key33" placeholder="0">
                        </div>
                        <div class = "col">
                          <input name="key333" type="number" class="form-control" id="key333" placeholder="0">
                          <input name="key3333" type="number" class="form-control" id="key3333" placeholder="0">
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div4" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <input name="key4" type="number" class="form-control" id="key4" placeholder="0">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div5" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <div class="row">
                        <div class="col">
                          <input name="key5" type="number" class="form-control" id="key5" placeholder="0">
                        </div>
                        <div class="col">
                          <input name="key55" type="number" class="form-control" id="key55" placeholder="0">
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4" id="div6" style="display:none;">
                    <fieldset>
                      <label for="key">Kunci: </label>
                      <input name="key6" type="number" class="form-control" id="key6" placeholder="0">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="ciphertext" rows="6" class="form-control" id="ciphertext" placeholder="Pesan Anda" required=""><?php echo $ciphertext; ?></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="Encode" value="Simpan" class="filled-button form-control">Enkripsi</button>
                    </fieldset>
                  </div><br><br>
                  <div class="col-lg-12">
                    <fieldset>
                      <label>Hasil Dekripsi: </label><br><br>
                      <h2><?php echo $hasil; ?></h2>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4" id="div0">
            <ul class="accordion">
              <li>
                  <a>Dekripsi</a>
                  <div class="content">
                      <p>Dekripsi adalah proses teknis yang mengonversikan Ciphertext menjadi kode Plaintext, sehingga memunculkan data yang Anda kirim, terima, atau simpan. Pada dasarnya, sebuah algoritme digunakan untuk mengacak data, sebelum pihak penerima memulihkan kembali data yang diacak tersebut menggunakan kunci dekripsi. Pesan yang telah dipulihkan di dalam file yang tidak terenkripsi ini disebut sebagai "plaintext", sementara dalam bentuk terenkripsi pesan itu disebut sebagai "ciphertext".</p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div1.1" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Caesar Chiper</a>
                  <div class="content">
                      <p>Caesar Chiper adalah algoritma kriptografi klasik yang dahulu digunakan oleh Julius Caesar untuk mengirimkan pesan rahasia atau taktik militer. Caesar Chiper disebut juga Sandi Geser sebab huruf-huruf dalam plainteks digantikan oleh huruf lainnya dalam posisi tertentu dalam susunan alfabet.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>C = E (P) = (P + K) mod 26<br><br>Jadi huruf chiper pada algoritma Caesar adalah hasil pergeseran sekian huruf dari huruf asli.<br><br>Contohnya "A" dengan kunci 3 akan berubah menjadi "D"</p>
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
                      <p>Caesar cipher mudah dipecahkan dengan exhaustive key search karena jumlah kuncinya sangat sedikit (hanya ada 26 kunci).</p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div2.2" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Vigenere Cipher</a>
                  <div class="content">
                      <p>Menganalisa himpunan deret huruf yang memiliki index kemunculan paling sering dalam ciphertext.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>Menganalisa himpunan deret huruf yang memiliki index kemunculan paling sering dalam ciphertext.<br><br>ci= (pi + kr)mod 26<br><br>pi = (ci - kr) mod 26</p>
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
                      <p>Algoritma Vigenere Cipher memiliki kelemahan yaitu adanya perulangan karakter sehingga mudah diserang dengan analisis frekuensi dan metode kaskisi.</p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div3.3" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Hill Cipher</a>
                  <div class="content">
                      <p>Hill Cipher menggunakan teknik perkalian matriks dan teknik invers terhadap matriks. Kunci pada Hill Cipher adalah matriks n x n dengan n merupakan ukuran blok.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>Hill Cipher menggunakan teknik perkalian matriks dan teknik invers terhadap matriks. Kunci pada Hill Cipher adalah matriks n x n dengan n merupakan ukuran blok.<br><br>Matriks K yang menjadi kunci ini harus merupakan matriks yang invertible, yaitu memiliki inverse K-1 sehingga:<br>Kunci harus memiliki invers karena matriks K-1 tersebut adalah kunci yang digunakan untuk melakukan dekripsi.</p>
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
                      <p>Hill Cipher merupakan algoritma yang hanya bisa bekerja pada 26 karakter alfabet. Selain itu, jumlah karakter cipherteks sama<br><br>Dengan jumlah karakter plainteks dan juga cipherteks yang dihasilkan hanya dalam karakter abjad, sehingga mudah bagi kriptanalis untuk memecahkannya.</p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div4.4" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Transposisi</a>
                  <div class="content">
                      <p>Caesar Chiper adalah algoritma kriptografi klasik yang dahulu digunakan oleh Julius Caesar untuk mengirimkan pesan rahasia atau taktik militer. Caesar Chiper disebut juga Sandi Geser sebab huruf-huruf dalam plainteks digantikan oleh huruf lainnya dalam posisi tertentu dalam susunan alfabet.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>- Menggunakan permutasi huruf.<br><br>- Kunci dibentuk dari penukaran satu huruf dengan huruf lain pada plaintext<br><br>- Dalam 1 kalimat, huruf-huruf dibagi terlabuh dahulu menjadi beberapa kelompok, dimana masing-masing kelompok memiliki jumlah huruf yang sama yaitu sesuai dengan nilai kunci.</p>
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
                      <p>Cipher Transposisi, serumit apapun kita melakukan transposisi atau permutasi pada karakter-karakter dalam plainteks, kita hanya melakukan mengacak urutan dari plainteks, tidak merubahnya. </p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div5.5" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Affine</a>
                  <div class="content">
                      <p>Affine Cipher adalah algoritma kriptografi yang dikembangkan dari metode Caesar Cipher. Algoritma ini merupakan contoh dari kriptografi pertukaran monoalfabet. Affine Cipher melakukan proses enkripsi dengan cara pergeseran karakter dengan substansial matematis.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>E(x)=D(x)= (-x mod m) + 1<br><br>Keterangan :<br>E(x): Proses Enkripsi<br>D(x): Proses Dekripsi<br>x : Plainteks atau Cipherteks<br>m : Jumlah Alfabet dari A-Z</p>
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
                      <p>Algoritma ini memiliki kelemahan karena hanya memanfaatkan proses membalikkan posisi karakter yang akan diamankan, hal ini cenderung dapat dengan mudah diretas dan keamanan dat amenjadi kurang maksimal.</p>
                  </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4" id="div6.6" style="display:none;">
            <ul class="accordion">
              <li>
                  <a>Playfair</a>
                  <div class="content">
                      <p>Playfair cipher atau sering disebut Playfair Square merupakan teknik enkripsi simetrik yang termasuk dalam sistem substitusi digraph. Playfair Cipher Termasuk ke dalam polygram cipher.</p>
                  </div>
              </li>
              <li>
                  <a>Aturan</a>
                  <div class="content">
                      <p>- Terdapat 25 buah huruf kunci Kriptografi yang terdapat dalam Playfair Chiper, kunci tersebut disusun didalam bujursangkar 5x5 dengan menghilangkan huruf J dari abjad.<br><br>- Kemudian Susunan kunci (Cipher) dalam bujursangkar diperluas dengan menambahkan baris keenam dan kolom keenam.<br><br>- Kemudian untuk melakukan Enkripsi, Pesan yang akan dienkripsi diatur terlebih dahulu sesuai ketentuan sebagai berikut:<br>* Ganti huruf J (jika ada) dengan huruf I<br>* Tulis pesan dalam pasangan huruf (huruf berpasangan dua-dua / bigram).<br>* Jangan ada pasangan huruf yang sama (misal AA / BB). Jika ada, sisipkan Z di tengahnya<br>* Jika jumlah huruf ganjil (sehingga ada yang tidak punya pasangan), tambahkan huruf Z di akhir</p>
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
                      <p>Kelemahan dari Playfair Cipher yaitu tingkat keamanannya dapat diserang dengan menggunakan teknik frekuensi distribusi huruf ganda pada suatu bahasa.<br><br>Selain itu, Playfair Cipher tidak menyertakan huruf J sehingga bisa menimbulkan ambiguitas pada saat dekripsi.</p>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<script>
     function showDiv(prefix, chooser)
     {
      var selectedOption = (chooser.options[chooser.selectedIndex].value);
      if(selectedOption == "Caesar")
        {
          var div = document.getElementById(prefix+"1");
          div.style.display = 'block';
          document.getElementById("key1").setAttribute('required', "");
          document.getElementById("key2").removeAttribute('required');
          document.getElementById("key3").removeAttribute('required');
          document.getElementById("key4").removeAttribute('required');
          document.getElementById("key5").removeAttribute('required');
          document.getElementById("key6").removeAttribute('required');
          document.getElementById(prefix+"2").style.display = "none";
          document.getElementById(prefix+"3").style.display = "none";
          document.getElementById(prefix+"4").style.display = "none";
          document.getElementById(prefix+"5").style.display = "none";
          document.getElementById(prefix+"6").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "block";
          document.getElementById(prefix+"2.2").style.display = "none";
          document.getElementById(prefix+"3.3").style.display = "none";
          document.getElementById(prefix+"4.4").style.display = "none";
          document.getElementById(prefix+"5.5").style.display = "none";
          document.getElementById(prefix+"6.6").style.display = "none";
          document.getElementById(prefix+"0").style.display = "none";
        }
      else if(selectedOption == "Vigenere")
        {
          var div = document.getElementById(prefix+"2");
          div.style.display = 'block';
          document.getElementById("key2").setAttribute('required', "");
          document.getElementById("key1").removeAttribute('required');
          document.getElementById("key3").removeAttribute('required');
          document.getElementById("key4").removeAttribute('required');
          document.getElementById("key5").removeAttribute('required');
          document.getElementById("key6").removeAttribute('required');
          document.getElementById(prefix+"1").style.display = "none";
          document.getElementById(prefix+"3").style.display = "none";
          document.getElementById(prefix+"4").style.display = "none";
          document.getElementById(prefix+"5").style.display = "none";
          document.getElementById(prefix+"6").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "none";
          document.getElementById(prefix+"2.2").style.display = "block";
          document.getElementById(prefix+"3.3").style.display = "none";
          document.getElementById(prefix+"4.4").style.display = "none";
          document.getElementById(prefix+"5.5").style.display = "none";
          document.getElementById(prefix+"6.6").style.display = "none";
          document.getElementById(prefix+"0").style.display = "none";
        }
      else if(selectedOption == "Hill")
        {
          var div = document.getElementById(prefix+"3");
          div.style.display = 'block';
          document.getElementById("key3").setAttribute('required', "");
          document.getElementById("key2").removeAttribute('required');
          document.getElementById("key1").removeAttribute('required');
          document.getElementById("key4").removeAttribute('required');
          document.getElementById("key5").removeAttribute('required');
          document.getElementById("key6").removeAttribute('required');
          document.getElementById(prefix+"2").style.display = "none";
          document.getElementById(prefix+"1").style.display = "none";
          document.getElementById(prefix+"4").style.display = "none";
          document.getElementById(prefix+"5").style.display = "none";
          document.getElementById(prefix+"6").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "none";
          document.getElementById(prefix+"2.2").style.display = "none";
          document.getElementById(prefix+"3.3").style.display = "block";
          document.getElementById(prefix+"4.4").style.display = "none";
          document.getElementById(prefix+"5.5").style.display = "none";
          document.getElementById(prefix+"6.6").style.display = "none";
          document.getElementById(prefix+"0").style.display = "none";
      }
      else if(selectedOption == "Transposisi")
        {
          var div = document.getElementById(prefix+"4");
          div.style.display = 'block';
          document.getElementById("key4").setAttribute('required', "");
          document.getElementById("key2").removeAttribute('required');
          document.getElementById("key3").removeAttribute('required');
          document.getElementById("key1").removeAttribute('required');
          document.getElementById("key5").removeAttribute('required');
          document.getElementById("key6").removeAttribute('required');
          document.getElementById(prefix+"2").style.display = "none";
          document.getElementById(prefix+"3").style.display = "none";
          document.getElementById(prefix+"1").style.display = "none";
          document.getElementById(prefix+"5").style.display = "none";
          document.getElementById(prefix+"6").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "none";
          document.getElementById(prefix+"2.2").style.display = "none";
          document.getElementById(prefix+"3.3").style.display = "none";
          document.getElementById(prefix+"4.4").style.display = "block";
          document.getElementById(prefix+"5.5").style.display = "none";
          document.getElementById(prefix+"6.6").style.display = "none";
          document.getElementById(prefix+"0").style.display = "none";
        }
      else if(selectedOption == "Affine")
        {
          var div = document.getElementById(prefix+"5");
          div.style.display = 'block';
          document.getElementById("key5").setAttribute('required', "");
          document.getElementById("key2").removeAttribute('required');
          document.getElementById("key3").removeAttribute('required');
          document.getElementById("key4").removeAttribute('required');
          document.getElementById("key1").removeAttribute('required');
          document.getElementById("key6").removeAttribute('required');
          document.getElementById(prefix+"2").style.display = "none";
          document.getElementById(prefix+"3").style.display = "none";
          document.getElementById(prefix+"4").style.display = "none";
          document.getElementById(prefix+"1").style.display = "none";
          document.getElementById(prefix+"6").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "none";
          document.getElementById(prefix+"2.2").style.display = "none";
          document.getElementById(prefix+"3.3").style.display = "none";
          document.getElementById(prefix+"4.4").style.display = "none";
          document.getElementById(prefix+"5.5").style.display = "block";
          document.getElementById(prefix+"6.6").style.display = "none";
          document.getElementById(prefix+"0").style.display = "none";
        }
      else if(selectedOption == "Playfair")
        {
          var div = document.getElementById(prefix+"6");
          div.style.display = 'block';
          document.getElementById("key6").setAttribute('required', "");
          document.getElementById("key2").removeAttribute('required');
          document.getElementById("key3").removeAttribute('required');
          document.getElementById("key4").removeAttribute('required');
          document.getElementById("key5").removeAttribute('required');
          document.getElementById("key1").removeAttribute('required');
          document.getElementById(prefix+"2").style.display = "none";
          document.getElementById(prefix+"3").style.display = "none";
          document.getElementById(prefix+"4").style.display = "none";
          document.getElementById(prefix+"5").style.display = "none";
          document.getElementById(prefix+"1").style.display = "none";
          document.getElementById(prefix+"1.1").style.display = "none";
          document.getElementById(prefix+"2.2").style.display = "none";
          document.getElementById(prefix+"3.3").style.display = "none";
          document.getElementById(prefix+"4.4").style.display = "none";
          document.getElementById(prefix+"5.5").style.display = "none";
          document.getElementById(prefix+"6.6").style.display = "block";
          document.getElementById(prefix+"0").style.display = "none";
        }
     }
</script>