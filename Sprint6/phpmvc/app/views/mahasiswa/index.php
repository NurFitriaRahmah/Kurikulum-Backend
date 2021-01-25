<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
        
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item">
                <?= $mhs['nama']; ?>

                        <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="d-flex justify-content-end">detail</a>

                        <a href="<?= BASEURL; ?>/Mahasiswa/ubah/<?= $mhs['id']; ?>" class="d-flex justify-content-end tampilModalUbah" style="color: green" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>

                        <a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id']; ?>" style="color: red" onclick="return confirm('yakin?')">hapus</a>

                </li>
                <?php endforeach; ?> 
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="<?= BASEURL; ?>/Mahasiswa/tambah/" method="post">
         <input type="hidden" name="id" id="id">
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
         </div>
         <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
                <option selected>Pilih Jurusan</option>
                <option value="Fashion Design">Fashion Design</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Psikologi">Psikologi</option>
            </select>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

