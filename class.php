<?php
class luas
{

    public function segitiga($alas, $tinggi)
    {
        return 1 / 2 * $alas * $tinggi;
    }
}

$luas = new Luas();

$alas = 10;
$tinggi = 15;
echo $luas->segitiga($alas, $tinggi);
