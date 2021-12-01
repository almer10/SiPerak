<div class="content-wrapper">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Diklat/rencana'); ?>">Rencana</a>
        </li>
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Diklat/realisasi'); ?>">Realisasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Ebook/admin'); ?>">E-Book</a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
    </ul>

    <div class="table-responsive">
        <p>
        <div class="tabel">
            <table class="data table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Diklat</th>
                        <th>Jenis Pelatihan</th>
                        <th>Tahun</th>
                        <th>Jumlah Peserta</th>
                        <th>Realisasi Anggaran</th>
                        <th>Tempat</th>
                        <th>Tanggal</th>
                        <th>Nama Vendor</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- <?php if (is_array($list_data)) { ?>
                        <?php $no = 1; ?>
                        <?php foreach ($list_data as $dd) : ?> -->
                        <td><?= $no ?></td>
                        <td><?= $dd->id_transaksi ?></td>
                        <td><?= $dd->tanggal ?></td>
                        <td><?= $dd->tanggal_keluar ?></td>
                        <td><a type="button" class="btn btn-primary" href="<?= base_url('admin/update_barang/' . $dd->id_transaksi) ?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    </tr>
                    <!-- <?php $no++; ?>
            <?php endforeach; ?>
        <?php } else { ?> -->
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                    <!-- <?php } ?> -->
                </tbody>
            </table>
        </div>
        </p>
    </div>
</div>