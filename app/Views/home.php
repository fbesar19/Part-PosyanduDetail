<html>

<head>

</head>

<body>
    <form action="/Home/tambah_imunisasi" method="POST">
        <label for="">Tanggal :</label>
        <input type="text" name="tanggal"><br><br>
        <label for="">Judul :</label>
        <input type="text" name="judul"><br><br>
        <input type="submit" value="Tambah Data">
    </form>

    <table width="80%" border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Catatan</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($imunisasi as $d) :
            $jadwal = $d['judul']
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['judul'] ?></td>
                <td><?= $d['tanggal'] ?></td>
                <td>
                    <a href="/Home/detail_imunisasi/<?= $jadwal ?>">Lihat</a>
                </td>
                <td>
                    <a href="/Home/delete_imunisasi">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>