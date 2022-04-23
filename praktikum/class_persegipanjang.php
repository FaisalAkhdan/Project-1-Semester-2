<?php
class persegipanjang{
    public $panjang;
    public $lebar;

    public function luasp(){
        $luas=$this->panjang*$this->lebar;
        return "Luas :".$luas;
    }
    public function kelilingp(){
        $keliling=2*($this->panjang+$this->lebar);
        return "Keliling :".$keliling;
    }

    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$LuasPersegi=new persegipanjang();
echo "Panjang :".$LuasPersegi->setPanjang(30);
echo "<br>";
echo "Lebar :".$LuasPersegi->setLebar(10);
echo "<br>";
echo $LuasPersegi->luasp();
echo "<br>";
echo $LuasPersegi->kelilingp();

?>