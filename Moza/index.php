<?php
include '../config/Database.php';
include '../classes/Siswa.php';

$db       = new Database();
$conn     = $db->connect();
$siswaObj = new Siswa($conn);

$data = $siswaObj->read();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa (OOP + PDO)</h2>

<a href="tambah.php">+ Tambah Data</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['no_hp']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
            <a href="../proses/hapus_proses.php?id=<?= $row['id']; ?>"
               onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
