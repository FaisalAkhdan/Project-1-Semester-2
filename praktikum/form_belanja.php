<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Belanja Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
    <!-- Button trigger modal -->
        <div class="col-md-4">
            <table>
                <thead>
                    <h4>Daftar Harga</h4>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Televisi
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp.4.200.000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kulkas
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp.3.100.000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mesin Cuci
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp.3.800.000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container col-12"> 

        <div class="container-fluid">
            <h1> Belanja Online</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                        <form method="POST" action="praktikum2.php">
        <div class="form-group row">
            <label for="nama_customer" class="col-2 col-form-label">Customer:</label> 
            <div class="col-10">
            <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2">Pilih Produk:</label> 
            <div class="col-10">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="nama_produk" id="nama_produk_0" type="radio" class="custom-control-input" value="Televisi"> 
                <label for="nama_produk_0" class="custom-control-label">Televisi</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="nama_produk" id="nama_produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                <label for="nama_produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="nama_produk" id="nama_produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                <label for="nama_produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-2 col-form-label">Jumlah:</label> 
            <div class="col-10">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-2 col-10">
            <input type="submit" class="btn btn-primary" value="kirim" name="proses"/>
            </div>
        </div>
        </form>    
    </body>
</html>

<?php

 error_reporting(0);
 $customer = $_POST['nama_customer'];
 $produk = $_POST['nama_produk'];
 $jumlah = $_POST['jumlah'];
 $kirim = $_POST['kirim'];
 
 if ($produk == 'Televisi') {
   $total = $jumlah * 4200000;
 }
 elseif ($produk == 'Kulkas') {
   $total = $jumlah * 3100000;
 }
 elseif ($produk == 'Mesin Cuci') {
   $total = $jumlah * 3800000;
 }
   
 
 echo 'Nama Customer : '.$customer;
 echo '<br/>Produk Pilihan : '.$produk;
 echo '</br>Jumlah Beli : '.$jumlah;
 echo '</br>Total Belanja : '.$total;

?>