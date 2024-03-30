<?php

class sampah {
    private $jenis;
    private $berat;

    public function __construct($jenis,$berat) {
        $this->jenis = $jenis;
        $this->berat = $berat;
    }

    public function getJenis() {
        return  $this->jenis;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function Harga() {
        if ($this->jenis == 'plastik'){
            return $this->berat * 10000;
            } elseif ($this->jenis == 'kertas'){
                return $this->berat *  6500;
            }elseif ( $this->jenis == 'kayu'){
                return  $this->berat * 10000;
            }elseif ( $this->jenis == 'kain'){
                return $this->berat * 10000;
            }elseif ( $this->jenis == 'kaca'){
                return  $this->berat * 15000;
            }else{
                return  "Jenis Sampah tidak terdaftar!";
            }
    }
}
