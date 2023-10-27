<div class="form-card">
    <div class="panel-form"></div>
    <div class="card">
        <div class="d-flex justify-content-center">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php
                include "config/koneksi.php";
                if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];
                    $telepon = $_POST['telepon'];
                    $merek_motor = $_POST['merek_motor'];
                    $jenis_motor = $_POST['jenis_motor'];
                    $jenis_service = $_POST['jenis_service'];
                    $alamat = $_POST['alamat'];
                    $keluhan = $_POST['keluhan'];

                    $a = $koneksi->query("INSERT INTO daftar_pelanggan (nama, nohp, merekmotor, jenismotor, jenisservice, alamat, keluhan) VALUES ('$nama','$telepon','$merek_motor','$jenis_motor','$jenis_service','$alamat','$keluhan')");

                    if ($a) {
                        echo "<div class='alert alert-info'>Data Berhasil Terkirim</div>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=form'>";
                    }
                }
                ?>
                <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr height="46">
                        <td width="10%"> </td>
                        <td width="25%"> </td>
                        <td width="65%">
                            <font color="orange" size="2">ISI SESUAI KE INGINAN ANDA TERIMA KASIH </font>
                        </td>
                    </tr>
                    <tr height="45">
                        <td> </td>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama" size="20" maxlength="20" required />
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>No. Telp</td>
                        <td>
                            <input type="text" name="telepon" size="20" maxlength="12" required />
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>Merek Motor</td>
                        <td>
                            <input type="text" name="merek_motor" size="20" maxlength="30" required />
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>Jenis Motor</td>
                        <td>
                            <input type="text" name="jenis_motor" size="20" maxlength="30" required />
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td class="">Cek Service</td>
                        <td>
                            <select name="jenis_service" required>
                                <option value="-">- Pilih Service -
                                <option value="Service Berkala">Service Berkala
                                <option value="Service Ringan">Service Ringan
                                <option value="Service Besar">Service Besar
                            </select>
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat" id="" cols="30" rows="4" required></textarea>
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>Keluhan Tambahan</td>
                        <td>
                            <textarea name="keluhan" id="" cols="30" rows="4" required></textarea>
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td> </td>
                        <td>
                            <input class="btn btn-success" type="submit" name="simpan" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div><br>
</div>