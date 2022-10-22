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

    function Hill($data, $key)
    {
    }

    function Transposisi($data, $key1, $key2)
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
                    chr((($key1 * ord($plaintext[$i]) + $key2 - 97) % 26) + 97);
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
