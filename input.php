<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosesSimpan.php" method="post">
    NIM:
    <input type="text" name="nim"><br>
    Nama:
    <input type="text" name="nama"><br>
    <input type="submit" value="Simpan"> <input type="reset" value="Reset">
 </form>
 <?php
include('koneksi.php');

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

$query = mysqli_query($koneksi, "INSERT INTO oran( nama, nim) VALUES( '$nama','$nim')");
 
if($query){
 echo 'Data berhasil disimpan. Klik <a href="input.html">di sini</a> untuk input data kembali.';
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="input.php">di sini</a>';
}
 
?>
</body>
</html>