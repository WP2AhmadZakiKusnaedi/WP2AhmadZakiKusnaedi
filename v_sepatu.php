<!DOCTYPE html>
<html>

<head>
    <title>TRANSAKSI</title>
</head>

<body>
    <center>
        <table bgcolor="#F0F8FF" width="480px">
            <tr>
                <th colspan="5">JUMLAH PEMBELIAN

                    <h3>STORE SHOES JAYA RAYA</h3>

                    <hr>
                </th>
            </tr>
            <tr>

                <td align="center">NAMA KONSUMEN</td>

                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">NO HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/sepatu' ?>">KEMBALI</a></button></p>
    </center>
</body>

</html>