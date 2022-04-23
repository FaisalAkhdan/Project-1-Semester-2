<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Inheretance dan Encapsulation</title>
</head>
<body>
    <h1 class="h1 text-center">BANK BERSAMA</h1>
<?php
class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }
    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }
    public function witdrawl($uang){
        $this->saldo = $this->saldo - $uang;
    }
    public function cetak(){
        echo 'Nomor Account : '.$this->nomor;
        echo '<br>Saldonya : '.$this->saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}
class AccountBank extends Account{
    public $customer;
    // static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$pemilik){
        parent::__construct($nomor,$saldo);
        $this->pemilik = $pemilik;
    }
    public function transfer($pmlk_tujuan,$uang){
        $pmlk_tujuan->deposit($uang);
        $this->witdrawl($uang);
        // $this->witdrawl(self::$biaya_admin);
    }
    public function cetak(){
        parent::cetak();
        echo '<br>Pemilik : '.$this->pemilik;
    }
}
    $pmlk1 = new AccountBank("C001", 6000000, "Ahmad");
    $pmlk2 = new AccountBank("C002", 5350000, "Budi");
    $pmlk3 = new AccountBank("C003", 2500000, "Kurniawan");
    
    // $ab->cetak();
    // echo '<hr>';
    // $bc->cetak();
    // echo '<br>ronaldo transfer uang ke rooney 1250000';
    
    // $ab->cetak();
    // echo '<hr>';
    // $bc->cetak();

    $ar_pmlk = [$pmlk1,$pmlk2,$pmlk3];
?>
<table class="table">
    <thead class="table-primary">
        <tr>
            <th>No</th><th>No.Rekening</th><th>Pemilik</th><th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_pmlk as $obj){
        ?>    
            <tr>
                <td><?= $nomor?></td>
                <td><?=$obj->nomor?></td>
                <td><?=$obj->pemilik?></td>
                <td><?=$obj->getSaldo()?></td>
            </tr>
        <?php
            $nomor++;    
            }
        ?>
    </tbody>
</table>
<?php
$pmlk1->deposit(1000000);
$pmlk1->transfer($pmlk3, 1500000);
$pmlk1->transfer($pmlk2, 500000);
$pmlk2->witdrawl(2500000);
echo "<hr>Ahmad nabung 1.000.000";
echo "<br>Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi";
echo "<br>Budi tarik uang 2.500.000";
?>
<table class="table">
    <thead class="table-primary">
        <tr>
            <th>No</th><th>No.Rekening</th><th>Customer</th><th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_pmlk as $obj){
        ?>    
            <tr>
                <td><?= $nomor?></td>
                <td><?=$obj->nomor?></td>
                <td><?=$obj->pemilik?></td>
                <td><?=$obj->getSaldo()?></td>
            </tr>
        <?php
            $nomor++;    
            }
        ?>
    </tbody>
</table>
</body>
</html>