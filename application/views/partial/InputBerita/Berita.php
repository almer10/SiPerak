<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>

<body>
    <div class="col py-3">
        <h1 class="center">Form Berita </h1>
        <div class="row">
            <div class="form-group">
                <label for="id_transaksi" style="margin-left:15px;display:inline;">Judul Berita</label>
                <input type="text" placeholder="Gambar" name="id_transaksi" style="margin-left:150px;width:50%;display:inline;" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Gambar</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label for="id_transaksi" style="margin-left:15px;display:inline;">Deskripsi :</label>
                <textarea type="text" placeholder="Deskripsi Berita" name="id_transaksi" style="margin-left:150px;width:180%;height:280%;display:inline;" class="form-control"></textarea>
            </div>
        </div>
    </div>
</body>

</html>