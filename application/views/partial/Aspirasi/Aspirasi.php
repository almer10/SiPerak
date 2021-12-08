<!-- <div class="content-wrapper"> -->

<body>
    <div class="col py-3">
        <h1 class="center" style="color:white;">Form Aspirasi</h1>
        <br>
        <?php echo form_open_multipart('Aspirasi/fungsiTambah'); ?>
        <div class="row">

            <table>
                <div class="form-group">
                    <label for="id_transaksi" style="margin-left:15px;display:inline;color:white;">Nama :</label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" style="margin-left:150px;width:50%;display:inline;" class="form-control">
                </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label for="id_transaksi" style="margin-left:15px;display:inline;color:white;">N I K :</label>
                <input type="text" placeholder="N I K" name="nik" style="margin-left:155px;width:52%;display:inline;" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label for="id_transaksi" style="margin-left:15px;display:inline;color:white;">Aspirasi :</label>
                <textarea type="text" placeholder="Aspirasi Anda" name="aspirasi" style="margin-left:135px;width:60%;height:280%;display:inline;" class="form-control"></textarea>
            </div>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <?= form_close(); ?>
    </div>
</body>
<!-- </div> -->