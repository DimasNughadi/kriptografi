<?php
defined('BASEPATH') or exit('No direct script access allowed');

class encoder_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Caesar($plaintext, $key)
    {
        $result = '';

        // traverse text
        for ($i = 0; $i < strlen($plaintext); $i++) {
            // apply transformation to each
            // character Encrypt Uppercase letters
            if (ctype_upper($plaintext[$i])) {
                $result =
                    $result .
                    chr(((ord($plaintext[$i]) + $key - 65) % 26) + 65);
            }

            // Encrypt Lowercase letters
            elseif (ctype_lower($plaintext[$i])) {
                $result =
                    $result .
                    chr(((ord($plaintext[$i]) + $key - 97) % 26) + 97);
            } else {
                $result = $result . chr(ord($plaintext[$i]));
            }
        }

        // Return the resulting string
        return $result;
    }

    function Vigenere($plaintext, $key)
    {
        // change key to lowercase for simplicity
        $key = strtolower($key);

        // intialize variables
        $code = '';
        $ki = 0;
        $kl = strlen($key);
        $length = strlen($plaintext);

        // iterate over each line in plaintext
        for ($i = 0; $i < $length; $i++) {
            // if the letter is alpha, encrypt it
            if (ctype_alpha($plaintext[$i])) {
                // uppercase
                if (ctype_upper($plaintext[$i])) {
                    $plaintext[$i] = chr(
                        ((ord($key[$ki]) -
                            ord('a') +
                            ord($plaintext[$i]) -
                            ord('A')) %
                            26) +
                            ord('A')
                    );
                }

                // lowercase
                else {
                    $plaintext[$i] = chr(
                        ((ord($key[$ki]) -
                            ord('a') +
                            ord($plaintext[$i]) -
                            ord('a')) %
                            26) +
                            ord('a')
                    );
                }

                // update the index of key
                $ki++;
                if ($ki >= $kl) {
                    $ki = 0;
                }
            }
        }

        // return the encrypted code
        return $plaintext;
    }

    // function Hill($plaintext, $keyEnkrip)
    // {
    //     $mod26 = array('a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4,
    //           'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9,
    //           'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13, 'o' => 14,
    //           'p' => 15, 'q' => 16, 'r' => 17, 's' => 18,'t' => 19,
    //           'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24,
    //           'z' => 25);

    //     $_mod26 = array('0' => 'a', '1'  => 'b', '2' => 'c', '3' => 'd', '4' => 'e',
    //                 '5'  => 'f', '6'  => 'g', '7' => 'h', '8' => 'i', '9' => 'j',
    //                 '10' => 'k', '11' => 'l', '12'=> 'm', '13'=> 'n', '14'=> 'o',
    //                 '15' => 'p', '16' => 'q', '17'=> 'r', '18'=> 's', '19'=> 't',
    //                 '20' => 'u', '21' => 'v', '22'=> 'w', '23'=> 'x', '24'=> 'y',
    //                 '25' => 'z');
    //     $string = $plaintext;
    //                //pecah string nya menjadi perhuruf
    //             //   $key = trim($_POST['key']);

    //                $userInputString = $string;
    //                $jumlahPlaintext = strlen($userInputString);

    //                if ($jumlahPlaintext % 2 == 0) {
    //                  $plaintext = $userInputString;
    //                }else {
    //                  $plaintext = $userInputString."a";
    //                }

    //                $arr2 = str_split($plaintext, 2);

    //                $multiArray;

    //                foreach ($arr2 as $index =>$value) {

    //                  $multiArray[$index] =  str_split($value);
    //                }

    //                foreach ($multiArray as $coba => $value) {
    //                //  foreach($value as $index => $final){
    //                  $chipAtas = ($mod26[$value[0]] * $keyEnkrip[0][0]) + ($mod26[$value[1]] * $keyEnkrip[0][1]);
    //                  $chipBawah = ($mod26[$value[0]] * $keyEnkrip[1][0]) + ($mod26[$value[1]] * $keyEnkrip[1][1]);
    //                  echo $_mod26[$chipAtas % 26];
    //                  // echo "<br>";
    //                  echo $_mod26[$chipBawah % 26];

    //                }

    // }

    function Transposisi($plaintext, $key1, $key2)
    {
    }

    function Affine($plaintext, $key1, $key2)
    {
        $result = '';

        // traverse text
        for ($i = 0; $i < strlen($plaintext); $i++) {
            // apply transformation to each
            // character Encrypt Uppercase letters
            if (ctype_upper($plaintext[$i])) {
                $result =
                    $result .
                    chr((($key1 * ord($plaintext[$i]) + $key2 - 65) % 26) + 65);
            }

            // Encrypt Lowercase letters
            elseif (ctype_lower($plaintext[$i])) {
                $result =
                    $result .
                    chr((($key1 * ord($plaintext[$i]) + $key2 - 96) % 26) + 96);
            } else {
                $result = $result . chr(ord($plaintext[$i]));
            }
        }

        // Return the resulting string
        return $result;
    }

    function Playfair($plaintext, $key)
    {
    }
}
