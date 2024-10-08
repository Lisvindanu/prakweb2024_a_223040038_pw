<?php

//define('NAMA', 'Lisvindanu');
//
//echo NAMA;
//
//echo '<br>';
//const UMUR = 20;
//echo UMUR;

//const bisa dipake didalam kelas
//define ('A', 'put any here') gabisa didalam kelas
//mirip enum 😜😜😜

class Coba {
    const NAMA = "Lisvindanu";
}

echo Coba::NAMA;

echo __FILE__;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function methodCoba() {
    return __FUNCTION__;
}
echo methodCoba();
echo "<br>";
class magicConstant {
    public $kelas = __CLASS__;
}

$obj = new magicConstant();
echo $obj->kelas;
?>