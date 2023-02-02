<br>
<center>
    <h2>Tambah Data Pasien</h2>
</center><br><br>
<hr><br>

<form action="code/proses/input/input_pasien.php" method="POST">

    <table id="tabel-pendaftaran">
        <tr>
            <td><b>ID-Pasien</b></td>
        </tr>

        <tr>
            <td>

                <?php include "koneksi.php";
                $tampilkan_isi = "select count(KodePasien) as jumlah from pasien;";
                $tampilkan_isi_sql = mysqli_query($connect, $tampilkan_isi);
                $no = 1;

                while ($isi = mysqli_fetch_array($tampilkan_isi_sql)) {
                    $jumlah = $isi['jumlah'];
                ?>

                    <input type="text" name='KodePasien' size="25px" maxlength="11" style="background-color:#E0DFDF" value="<?php echo $no + $jumlah ?>" readonly>

            </td>
        </tr>
    <?php
                } ?>

    <tr>
        <td><b>Registrasion Code</b></td>
    </tr>

    <tr>
        <td><input type="text" name="no_registrasi" size="25px" maxlength="40" placeholder="Registrasion Code.." required></td>
    </tr>

    <tr>
        <td><b>Nama</b></td>
    </tr>

    <tr>
        <td><textarea name="NamaPasien" size="25px" maxlength="50" placeholder="ketikkan Nama pasien.." required></textarea>
        </td>
    </tr>

    <tr>
        <td><b>Jenis Kelamin</b></td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="GenderPasien" value="P" required>&nbsp;Perempuan&nbsp;&nbsp;
            <input type="radio" name="GenderPasien" value="L">&nbsp;Laki-Laki</td>
    </tr>

    <tr>
        <td><b>Birthday</b></td>
    </tr>

    <tr>
        <td><input type="text" name="UmurPasien" size="25px" maxlength="4" placeholder="ketikkan umur.." required></td>
    </tr>
    
    <tr>
        <td><b>Policlnic_id</b></td>
    </tr>
    <tr>
        <td>

            <select name="KodePoli" required>
                <option value="" disabled selected>Pilih Poliklinik</option>

                <?php include "koneksi.php";
                $tampilkan_isi = "select * from `poli`";
                $tampilkan_isi_sql = mysqli_query($connect, $tampilkan_isi);

                while ($isi = mysqli_fetch_array($tampilkan_isi_sql)) {
                    $KodePoli = $isi['KodePoli'];
                    $NamaPoli = $isi['NamaPoli'];
                ?>
                    <option value="<?php echo $KodePoli ?>"><?php echo $KodePoli ?> | <?php echo $NamaPoli ?>
                    <?php
                }
                    ?>
                    </option>
        </td>
    </tr>

    <tr>
        <td><b>Docter_id</b></td>
    </tr>

    <tr>
        <td><input type="text" name="docter_id" size="25px" maxlength="13" placeholder="ketik nama dokter.." required>&nbsp;&nbsp;&nbsp; <input class="button" type="submit" value="Simpan"></td>
    </tr>




    </table>

</form>