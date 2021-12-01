<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="center">Form Aspirasi</h1>
                    <tbody>
                        <?php
                        if ($c_mhs > 0) {
                            $no = 0;
                            foreach ($mhs as $list) {
                        ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$no; ?></td>
                                    <td class="text-center"><?php echo $list->nim; ?></td>
                                    <td class="text-center"><?php echo $list->nama; ?></td>
                                    <td class="text-center"><?php echo $list->jurusan; ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-xs" href="<?php echo site_url('mahasiswa/edit_data/' . $list->id) ?>" title="Edit">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-danger btn-xs" href="<?php echo site_url('mahasiswa/hapus_data/' . $list->id) ?>" title="Edit">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">
                                    <center>Data Mahasiswa Kosong</center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>