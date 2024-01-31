<?php 

$abjad1 = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
$abjad2 = ["J", "K", "L", "M", "N", "O", "P", "Q", "R"];
$abjad3 = ["S", "T", "U", "v", "W", "X", "Y", "Z"];


$pelajaran1 = ["Pendidikan Agama dan Budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia"];
$pelajaran2 = ["Matematika", "Bahasa Inggris", "Dasar dasar Kejuruan RPL"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas php</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background: red;
            border-radius: 50%;
            color: white;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 5px
        }

        .clear{
            clear: both;
        }

        .bentuk{
            width: 230px;
            height: 100px;
            border-radius: 10px 0 10px 0;
            background: orange;
            color: white;
            text-align: center;
            float: left;
            margin: 5px;
            line-height: 100px;
        }

        .mapel{
            margin: 10px 0;
        }
    </style>
</head>
<body>

<h3>Abjad A-Z</h3>
<?php for($i = 0; $i < count($abjad1); $i++) : ?>
        <div class="kotak"><?= $abjad1[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php for($i = 0; $i < count($abjad2); $i++) : ?>
        <div class="kotak"><?= $abjad2[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php for($i = 0; $i < count($abjad3); $i++) : ?>
        <div class="kotak"><?= $abjad3[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <h3 class="mapel">Mata Pelajaran - X RPL</h3>

    <?php foreach($pelajaran1 as $mapel1) : ?>
        <div class="bentuk"><?= $mapel1; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>


    <?php foreach($pelajaran2 as $mapel2) : ?>
        <div class="bentuk"><?= $mapel2; ?></div>
    <?php endforeach; ?>
</body>
</html>