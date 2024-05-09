<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <td>:</td>
                <td>
                    <?= $kode; ?>
                    <!-- Memanggil value dari variable $kode -->
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td><?= $nama; ?></td>
                <!-- Memanggil value dari variable $nama -->
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                    <!-- Memanggil value dari variable $sks -->
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">
                    <!-- Merubah base_url menjadi matakuliah untuk memanggil file view-form-matakuliah -->
                    Kembali
                    </a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>