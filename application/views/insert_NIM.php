<?php
    require_once("config_NIM.php");
    //MASUKKAN KODE DISINI UNTUK INPUT KE DATABASE
    //NOTE : SETELAH INPUT BERHASIL MAKA AKAN DILANJUTKAN KE HALAMAN REKAP NILAI
    include 'config_NIM.php';
    $nim = $_POST['nim'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $kuis = $_POST['kuis'];
    $tubes = $_POST['tubes'];
    $query = "insert into nilai values ('$nim','$uts','$uas','$kuis','$tubes')";
    $data = mysqli_query($conn,$query);
    $cek = mysqli_num_rows($data);
    header('location:rekapNilai_NIM.php');
?>
