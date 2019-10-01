<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="<?=$data['action'];?>" method="post">
                <div class="form-group">
                    <label for="NomorHP">Nomor HP</label>
                    <input type="text" class="form-control" name="nomorHP" value="<?=$data['tamu']['nomorHP'];?>">
                </div>

                <div class="form-group">
                    <label for="namaTamu">Nama</label>
                    <input type="text" class="form-control" name="namaTamu"  value="<?=$data['tamu']['nama'];?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat"  value="<?=$data['tamu']['alamat'];?>">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>        
        </div>
    </div>
</div>
