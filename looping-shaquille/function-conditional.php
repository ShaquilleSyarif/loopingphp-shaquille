<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    /*Soal No 1
    Greetings Buatlah sebuah function greetings() yang menerima satu parameter berupa string. contoh: greetings("abduh"); Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!" */
    
    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!";
    }
    
    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    echo "<br>";
    greetings("Wahyu");
    echo "<br>";
    greetings("nama peserta");
    
    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";
    /*Soal No 2
    Reverse String
    Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while). Function reverseString menerima satu parameter berupa string. NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING! */
    
    function reverseString($str) {
        $reversed = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        echo $reversed;
    }
    
    // Hapus komentar di bawah ini untuk jalankan Code
    echo "<br>";
    reverseString("nama peserta");
    echo "<br>";
    reverseString("Garuda Cyber Institute");
    echo "<br>";
    reverseString("We Are GC-Ins Developer");
    
    echo "<br>";
    echo "<h3>Soal No 3 Palindrome </h3>";
    /*Soal No 3
    Palindrome Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. */
    
    function palindrome($str) {
        $reversed = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed === $str ? "true" : "false";
    }
    
    // Hapus komentar di bawah ini untuk jalankan code
    echo palindrome("civic") . " ; // true<br>";
    echo palindrome("nababan") . " ; // true<br>";
    echo palindrome("jambaban") . " ; // false<br>";
    echo palindrome("racecar") . " ; // true<br>";
    
    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*Soal 4
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter berupa integer. */
    
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }
    
    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98) . " ; //Sangat Baik<br>";
    echo tentukan_nilai(76) . " ; //Baik<br>";
    echo tentukan_nilai(67) . " ; //Cukup<br>";
    echo tentukan_nilai(43) . " ; //Kurang<br>";
    ?>
</body>

</html>
    