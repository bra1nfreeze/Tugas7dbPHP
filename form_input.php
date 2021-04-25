<html>

<head>
    <!--Judul laman-->
    <title>Form Input</title>
</head>

<body>
    <!--Form input mengarahkan simpan.php-->
    <form method="post" action="simpan.php">
        <!--Membuat Tabel untuk form input-->
        <table>
            <tr>
                <td>NIM</td>
                <!--Teks box isi nim, onkeyup= berdasarkan js-->
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <!--Membuat teks box nama-->
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <!--Membuat pilihan salah satu dengan tipe radio-->
                    <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>

                <td>JURUSAN</td>
                <!--Membuat pilihan lebih dari satu dengan tipe select-->
                <td><select name="jurusan">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <!--Membuat teks box alamat-->
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <!--membuat tombol untuk lanjut proses-->
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>