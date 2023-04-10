<?php
// Buat class
class persegipanjang
{
    // membuat property
    public $panjang, $lebar;

    // bikin contrak : data di set user
    function __construct($panjang, $lebar)
    {
        // MASUKAN DATA ke property
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    // membuat method
    public function hasilkeliling($panjang, $lebar) 
    {
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
      }
    // membuat method status bmi
    public function hasilluas($panjang, $lebar) 
    {
        $luas = $panjang * $lebar;
        return $luas;
      }
}
