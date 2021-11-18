<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1>Profile</h1>
                    <img src="../assets/images/samples/sample.jpg" width="200 " height="200" class="center"><br>
                    <?php if ($this->session->flashdata('msg_alert')) { ?>
                        <div class="alert alert-info">
                            <label style="font-size: 13px;"><?= $this->session->flashdata('msg_alert'); ?></label>
                        </div>
                    <?php } ?>
                    <?= form_open('change_password', array('method' => 'post')); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIPP</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Umur</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Unit Kerja</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jurusan Pendidikan</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Pegawai</label>
                                <div class="col-sm-5">
                                    <p>:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <button type="submit" class="btn btn-success center">Download CV</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>