<?php
class Dispenser {
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($har){
        $this->hargasegelas = $har;
        return $har;
    }
    public function volgel($vg){
        $this->volumegelas = $vg;
        return $vg;
    }
    function nama($nm){
        $this->namaminuman = $nm;
        return $nm;
    }
}

$gelas1 = new Dispenser();
echo '<br/>' .$gelas1 -> isi('1 L');
echo '<br/>' .$gelas1 -> harga('Rp 5000,-');
echo '<br/>' .$gelas1 -> volgel('5 L');
echo '<br/>' .$gelas1 -> nama('Aqua Danone');
?>