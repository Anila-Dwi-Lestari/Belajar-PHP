<?php
    $nama1=[
        [
            "nama" => "Satria",
            "kelas" => "XI RPL 1"],
        [
            "nama" => "Arsyi",
            "kelas" => "XI RPL 2"],
        [
            "nama" => "Dhika",
            "kelas" => "XI RPL 3"],
        [
            "nama" => "Evan",
            "kelas" => "XI RPL 4"],
        [
            "nama" => "Fabian",
            "kelas" => "XI RPL 5"],
        [
            "nama" => "Irfan",
            "kelas" => "XI RPL 6"],
        ];

    print_r($nama1);
    foreach($nama1 as $post){
        echo "Nama : ".$post["nama"]." Kelas : ".$post["kelas"];
        echo "<br>";
    }
?>
