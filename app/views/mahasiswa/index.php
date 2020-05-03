<div class="container mt-3">

    <div class="row">

        <div class="col-lg-6">
            <?php flasher::flash(); ?>
        </div>

    </div>

    <div class="row">
        <div class="col-6">
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formmodal">
            Tambah Data Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2" >Detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
            <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="DKV">DKV</option>
                <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
                <option value="Management Bisnis">Management Bisnis</option>
            </select>
        </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
    </div>