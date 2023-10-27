<div class="daftar-karyawan">
    <div class="form-card">
        <div class="panel-form">
            <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" class="btn btn-outline-success" type="button" href="#">Tambah User</a>
        </div>
        <div class="card">
            <div class="d-flex justify-content-center">
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Username</th>
                        <th>password</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";
                        $nomor = 1;

                        $ambil = $koneksi->query("SELECT * FROM daftar_karyawan");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['username']; ?></td>
                                <td><?php echo $pecah['password']; ?></td>
                                <td><?php echo $pecah['jabatan']; ?></td>
                                <td>
                                    <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" class="btn btn-outline-danger" type="button" href="admin.php?halaman=proses_hapus&id=<?php echo $pecah['id']; ?>">Delete</a>
                                </td>

                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>