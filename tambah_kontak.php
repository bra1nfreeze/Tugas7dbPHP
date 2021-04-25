<html>

<head>
    <!--Judul laman-->
    <title>Form Input</title>
</head>

<body>
    <!--Form input mengarahkan simpan.php-->
    <form method="post" action="simpan_kontak.php">
        <!--Membuat Tabel untuk form input-->
        <table>
            <tr>
                <td>Nama</td>
                <!--Teks box isi nama-->
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <!--Membuat pilihan salah satu dengan tipe radio-->
                    <input type="radio" name="jkel" value="L">Laki-Laki
                    <input type="radio" name="jkel" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <!--Membuat teks box email-->
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <!--Membuat teks box alamat-->
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <!--Membuat teks box kota-->
                <td>Kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <!--Membuat teks box pesan-->
                <td>Pesan</td>
                <td><input type="text" name="pesan"></td>
            </tr>
            <tr>
                <!--membuat tombol untuk lanjut proses-->
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>