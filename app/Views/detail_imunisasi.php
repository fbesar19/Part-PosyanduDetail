<html>

<head>

</head>

<body>
    <table width="80%" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Catatan</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($detail as $d) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['nama'] ?></td>
                <td><?= $d['catatan'] ?></td>
                <td>
                    <a href="/Home/detail_imunisasi">Lihat</a>
                </td>
                <td>
                    <a href="/Home/delete_imunisasi">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>