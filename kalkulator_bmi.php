<?php
    include_once "atas.php";
    include_once "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container-fluid" style="max-width:1366px;">    
      <div class="card-body">
        <div class="col-16">
          <form method="GET" action="hasil_dataBMI.php">
            <!------------>
              <div class="form-group row">
                <label for="namalengkap" class="col-sm-4 col-form-label"><b>Nama Lengkap</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama__lengkap" required>
                </div>
              </div>
              <br>

              <div class="row">
              <legend class="col-form-label col-sm-4 pt-0"><b>Jenis Kelamin</b></legend>
              <div class="col-sm-8">

                <div class="form-check mr-auto">
                  <input class="form-check-input" type="radio" id="laki" name="jenis__kelamin" value="Laki-Laki" required>
                  <label class="form-check-label mr-5" for="laki">
                    Laki-Laki
                  </label>
                  <input class="form-check-input" type="radio" id="perempuan" name="jenis__kelamin" value="Perempuan" required>
                  <label class="form-check-label" for="perempuan">
                    Perempuan
                  </label>
                </div>
              </div>  <!---col-->
            </div> <!---row-->
            </br>
            <br>
            <!------------>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-4 col-form-label"><b>Umur</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="umur__" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Tahun</div>
                    </div>
                  </div>
                </div>
              </div>
              </br>
            <!------------>
              <div class="form-group row">
                <label for="namalengkap" class="col-sm-4 col-form-label"><b>Berat Badan</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="berat__" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Kg</div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

            <!------------>
              <div class="form-group row">
                <label for="namalengkap" class="col-sm-4 col-form-label"><b>Tinggi Badan</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="tinggi__" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Cm</div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            <!------------>
              <div class="offset-4 col-8">
                <input class="btn btn-primary" type="submit" value="Kirim" name="proses"/>
              </div>
          </form>
        </div> <!--col--->
    
          <?php
          class bmiPasien {
            public $nama,
                   $berat,
                   $tinggi,
                   $umur,
                   $jenisKelamin;
                  
            public function hasilBMI() {
              return "<b>Nama : $this->nama   <br><br>
                      Berat Badan : $this->berat <br><br>                  
                      Tinggi Badan : $this->tinggi <br><br>
                      Umur : $this->umur <br><br>
                      Jenis Kelamin : $this->jenisKelamin</b>"; 
            }
            public function statusBMI() {

            }
          }
          if (isset($_GET["nama__lengkap"])) {
            $bmi = new bmiPasien;
            $bmi->nama = $_GET["nama__lengkap"];
            $bmi->berat = $_GET["berat__"];
            $bmi->tinggi = $_GET["tinggi__"];
            $bmi->umur = $_GET["umur__"];
            $bmi->jenisKelamin = $_GET["jenis__kelamin"];
            echo $bmi->hasilBMI();
          }
          ?>
      </div> <!--row--->
    

    
  </div> <!---container-->
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once "bawah.php";
?>