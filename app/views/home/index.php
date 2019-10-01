<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
        <h1>Buku Tamu</h1>
        <a href="<?=BASEURL;?>/Home/tambah">Tamu Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nomor HP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontrol</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach($data['tamu'] as $tamu {} )-->
                <?php foreach($data['tamu'] AS $tamu ): ?>
                <tr>
                    <td><?=$tamu['nomorHP'];?></td>
                    <td><?=$tamu['nama'];?></td>
                    <td><?=$tamu['alamat'];?></td>
                    <td>
                        <a href="<?=BASEURL;?>/Home/Edit/<?=$tamu['nomorHP'];?>">Edit</a> | 
                        <a href="<?=BASEURL;?>/Home/Hapus/<?=$tamu['nomorHP'];?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</div>

<!-- bootstrap script -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
