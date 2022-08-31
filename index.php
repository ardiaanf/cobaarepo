<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a href="input.php">Tambah Data</a>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>nim</th>
        </tr>
        <?php
include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM oran");
$no=1;
while($data = mysqli_fetch_array($query)){
?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['nim']?></td>    
        </tr>
        <?php
  }
        ?>
    </table>
</body>
</html>