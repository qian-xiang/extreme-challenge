<?php 

echo 'this is test...';

// // Super Secure Data Encryption Service! 

// $data = $_GET['d'] ?? NULL; 
// define('KEY', md5('besb66.com'.$_SERVER['REMOTE_ADDR'])); 
// define('METHOD', 'AES-256-CBC'); 

// if ($data) { 
//     if (!isset($_GET['dec'])) { 
//         if (shouldShowFlag($data)) die('not supported.'); 
//         echo '<pre>'.bin2hex(encrypt($data)).'</pre>'; 
//     } else { 
//         $text = decrypt(hex2bin($data)); 
//         echo '<pre>'.(htmlspecialchars($text) ?: bin2hex($text)).'</pre>'; 
//         if (shouldShowFlag($text)) echo require_once 'congratulations.php'; 
//     } 
// } else { 
//     highlight_file(__FILE__); 
// } 

// function shouldShowFlag($data) { 
//     return strpos($data, 'besb66.com') !== false; 
// } 

// function encrypt($text) { 
//     $text = $text.str_repeat(chr(0), 16 - strlen($text) % 16); 
//     $ciphertext = openssl_encrypt($text, METHOD, KEY, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv = openssl_random_pseudo_bytes(16)); 
//     return $iv.$ciphertext; 
// } 

// function decrypt($data) { 
//     if (strlen($data) < 32) return 'error.'; 
//     $iv = substr($data, 0, 16); 
//     $ciphertext = substr($data, 16); 
//     $text = openssl_decrypt($ciphertext, METHOD, KEY, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv); 
//     return $text; 
// }