<?php
defined('BASEPATH') or exit('No direct script access allowed');

class decoder_model extends CI_Model
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
                    chr(((ord($plaintext[$i]) - $key + 65) % 26) + 65);
            }

            // Encrypt Lowercase letters
            elseif (ctype_lower($plaintext[$i])) {
                $result =
                    $result .
                    chr(((ord($plaintext[$i]) - $key + 97) % 26) + 97);
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
            // if the letter is alpha, decrypt it
            if (ctype_alpha($plaintext[$i])) {
                // uppercase
                if (ctype_upper($plaintext[$i])) {
                    $x =
                        ord($plaintext[$i]) -
                        ord('A') -
                        (ord($key[$ki]) - ord('a'));

                    if ($x < 0) {
                        $x += 26;
                    }

                    $x = $x + ord('A');

                    $plaintext[$i] = chr($x);
                }

                // lowercase
                else {
                    $x =
                        ord($plaintext[$i]) -
                        ord('a') -
                        (ord($key[$ki]) - ord('a'));

                    if ($x < 0) {
                        $x += 26;
                    }

                    $x = $x + ord('a');

                    $plaintext[$i] = chr($x);
                }

                // update the index of key
                $ki++;
                if ($ki >= $kl) {
                    $ki = 0;
                }
            }
        }

        // return the decrypted text
        return $plaintext;
    }

    function Hill($data, $key)
    {
    }

    function Transposisi($data, $key)
    {
    }

    function Affine($plaintext, $key1, $key2)
    {
        $result = '';
        $key1_inv = 0;
        $flag = 0;

        for ($i = 0; $i < 26; $i++) {
            $flag = ($key1 * $i) % 26;
            if ($flag == 1) {
                $key1_inv = $i;
            }
        }

        // traverse text
        for ($i = 0; $i < strlen($plaintext); $i++) {
            // apply transformation to each
            // character Encrypt Uppercase letters
            if (ctype_upper($plaintext[$i])) {
                $result = $result.chr((($key1_inv * (ord($plaintext[$i]) - $key2) - 65) % 26) + 65 );
            }
            // Encrypt Lowercase letters
            elseif (ctype_lower($plaintext[$i])) {
                $result = $result.chr((($key1_inv * (ord($plaintext[$i]) - $key2) - 96) % 26) +  96 );
            } else {
                $result = $result . chr(ord($plaintext[$i]));
            }
        }

        // Return the resulting string
        return $result;
    }

    function Playfair($data, $key)
    {
    }
}
