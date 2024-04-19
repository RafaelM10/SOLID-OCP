<?php
require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

//-------------CSV----------------------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_txt = $leitorCSV->lerArquivo();

//-----------TXT---------------------------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_csv = $leitorTXT->lerArquivo();

//--------------------Juntando TXT e CSV com array_merge
echo "<pre>";
print_r(array_merge($arr_txt, $arr_csv));
echo "</pre>";

