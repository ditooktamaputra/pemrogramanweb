<?php
include "koneksi.php";
?>
<!DOCTYPE htlm>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biodata Mahasiswa</title>
    </head>
    <body>
        <table border="1">
            <caption>
                Biodata Mahasiswa
                <a href="form-tambah.php">Tambah Mahasiswa</a>
            </caption>
            <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM biodata order by npm ASC";
            $result = $mysqli->query($query);
            $id=0;
            while ($row = $result->fetch_assoc()){
                $id++;
                ?>
                <tr>
                    <td><?= $id;?></td>
                    <td><?= $row['npm'];?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['prodi'];?></td>
                    <td>
                        <a href="<?= ' form-edit.php?id='.$row['id'];?>">Edit</a>

                        <a href="">Hapus</a>

                    </td>
                </tr>
                <?php
             }
            ?>
        </table>
    </body>
</html>