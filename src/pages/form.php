<div class="">
    <div class="panel-form"></div>
    <div class="card">
        <div class="d-flex justify-content-center">
            <form method="POST" role="form">
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
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Nama</p>
                        <input type="text" name="username" class="form-control" placeholder="Name" required="">
                        <small id="emailHelp" class="form-text text-muted">Masukan username dengan baik dan benar</small>
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">No. Telp</p>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Merek Motor</p>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Jenis Motor</p>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <br>
                        <p for="exampleInputPassword1">Cek Servicer</p>
                        <select name="jenis_service" required>
                            <option value="-">- Pilih Service -
                            <option value="Service Berkala">Service Berkala
                            <option value="Service Ringan">Service Ringan
                            <option value="Service Besar">Service Besar
                        </select>
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Alamat</p>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <p class="form-check-label" for="exampleCheck1">Check me out</p>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr height="46">
                        <td width="10%"> </td>
                        <td width="25%"> </td>
                        <td width="65%">
                            <font color="orange" size="2">ISI SESUAI KE INGINAN ANDA TERIMA KASIH </font>
                        </td>
                    </tr>
                    <tr height="46">
                        <td> </td>
                        <td>Alamat</td>
                        <td>

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