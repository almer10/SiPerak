<div class="content-wrapper">
    <h3>Dokumen SDM</h3>
    <div class="table-responsive">
        <p>
        <div class="tabel">
            <table class="data table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Regulasi</th>
                        <th>Judul</th>
                        <th>Tahun Terbit</th>
                        <th>Sub Kategori</th>
                        <th>Download</th>
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