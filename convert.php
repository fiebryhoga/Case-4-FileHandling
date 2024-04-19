<!-- Dimas Fiebry Prayhoga Putra  – 225150600111002
Illa Fitria  – 225150607111010
Moch Zoel Reinanda – 225150607111027
Alya Andini Prasetyo – 225150600111018 -->

<?php


$inputFile = $_GET['infile'];
$outputFile = $_GET['outfile'];
$from = $_GET['from'];
$to = $_GET['to'];

$content = file_get_contents($inputFile);

$content = str_replace($from, $to, $content);

file_put_contents($outputFile, $content);

echo "Konversi kata berhasil dilakukan. Silakan cek file {$outputFile}.";
