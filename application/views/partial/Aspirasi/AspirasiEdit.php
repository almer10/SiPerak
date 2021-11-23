<div class="content-wrapper">
    <h3>Edit Aspirasi</h3>
    <form action="<?php echo base_url('Aspirasi/fungsiEdit') ?>" method="post">
        <table>
            <tr>

                <td><input type="text" name="id" value="<?php echo $queryAspDetail->id ?>" hidden></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" value="<?php echo $queryAspDetail->nik ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $queryAspDetail->nama ?>"></td>
            </tr>
            <tr>
                <td>Aspirasi</td>
                <td>:</td>
                <td><textarea class="form-control" name="aspirasi" value="<?php echo $queryAspDetail->aspirasi ?>"></textarea></td>
            </tr>


            <tr>
                <td colspan="5"><br><button type="submit" class="btn btn-success center">Update </button></td>
            </tr>
        </table>
    </form>
</div>