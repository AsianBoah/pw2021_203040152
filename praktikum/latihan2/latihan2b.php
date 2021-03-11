<?php
/*
    Fadhlan Maulana
    203040152
    Thursday, March 11 2021
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B</title>

    <style>
        .wrapper {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php

    $jawabanIsset = "Isset adalah = Fungsi isset memeriksa apakah sebuah variabel sudah nyala atau belum (hence the name isset, which was 'is set' without space), yang berarti ia harus dideklarasikan dan bukan NULL. Fungsi ini mengembalikan nilai true jika variabel ada dan bukan NULL, jika tidak maka nilai tersebut terbaca sebagai false. <br><br>";
    $jawabanEmpty = "Empty adalah = Fungsi empty memeriksa apakah suatu variabel kosong atau tidak. Fungsi ini akan kembali ke state false jika variabel ada dan tidak kosong, jika tidak maka variable terhitung/terbaca true.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class="wrapper">
        <?= soal(" "); ?>
    </div>

</body>

</html>
