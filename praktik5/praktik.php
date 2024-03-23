<?php

class Manusia {
    public $nama;
    public $umur;


    public function setNama ($name)
    {
        $this->nama = $name;
    }

    public function setUmur ($umur) 
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . ", Umur :" .$this->umur ;
    }

}

//membuat objek
$mikail = new Manusia();
$mikail->setNama("mikail");
$mikail->setUmur(19);
echo $mikail->getInfo(). "<br>";

$ahmad = new Manusia();
$ahmad->setNama("Ahmad");
$ahmad->setUmur(20);
echo $ahmad->getInfo();
?>