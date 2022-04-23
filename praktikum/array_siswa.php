<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4]; 
?>

<h3>DAFTAR NILAI SISWA</h3>

<table border="1" width="100%">
<thead class="table-primary">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
        $nomor = 1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$nilai['nim'].'</td>';
            echo '<td>'.$nilai['uts'].'</td>';
            echo '<td>'.$nilai['uas'].'</td>';
            echo '<td>'.$nilai['tugas'].'</td>';
            $nilai_akhir = ($nilai['uts'] + $nilai['uas']+$nilai['tugas'])/3;
            // FUNGSI NUMBER FORMAT UNTUK MEMBUAT FORMAT PENULISAN BILANGAN ANGKA, SEPERTI RIBUAN RATUSAN DAN LAINNYA
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
    ?>
<!-- tutup table -->
</tbody>
</table>