<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Merubah Data Siswa
</div>

  <div class="card-body">
      <?php if (validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
      <?= validation_errors()?>
      </div>
      <?php endif ?> 

      <form action="" method="post">
      <input type="hidden" name="id" value="<?= $siswa['id'];?>">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $siswa['nama'];?>">
    </div>
    <div class="form-group">
      <label for="nim">Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" value="<?= $siswa['alamat'];?>">
    </div>
    <div class="form-group">
      <label for="nim">Nim</label>
      <input type="text" class="form-control" id="nim" placeholder="nim" name="nim" value="<?= $siswa['nim'];?>">
    </div>
</div>

  <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>