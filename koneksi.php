<?php
$host= "localhost";
$user= "root";
$pass= "";
$db= "latihan_pplgx";
$koneksi= mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die ("koneksi database gagal: ".mysqli_connect_error());
} 

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahData($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $id = htmlspecialchars($data["id"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $barang = htmlspecialchars($data["barang"]);

    $query = "INSERT INTO aas_project VALUES ('$nama', '$id', '$paket', '$kategori', '$barang')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>