<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="center">Form Aspirasi</h1>
                    <br>
                    <?php if ($this->session->flashdata('msg_alert')) { ?>
                        <div class="alert alert-info">
                            <label style="font-size: 13px;"><?= $this->session->flashdata('msg_alert'); ?></label>
                        </div>
                    <?php } ?>
                    <?= form_open('change_password', array('method' => 'post')); ?>
                    <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">Nama :</label>
                            <input type="text" placeholder="Nama Lengkap" name="id_transaksi" style="margin-left:150px;width:50%;display:inline;" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">N I K :</label>
                            <input type="text" placeholder="N I K" name="id_transaksi" style="margin-left:149px;width:52%;display:inline;" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">Aspirasi :</label>
                            <textarea type="text" placeholder="Aspirasi Anda"  name="id_transaksi" style="margin-left:150px;width:180%;height:280%;display:inline;" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    br
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <button type="submit" class="btn btn-success center">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>