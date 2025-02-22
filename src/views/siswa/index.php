<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary mb-5 tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Siswa
            </button>

            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="mb-4 d-flex">
                    <input type="text" class="form-control me-2" id="keyword" placeholder="🔍 Cari siswa..." name="keyword" autocomplete="off">
                    <button class="btn btn-secondary" id="tombolCari" type="submit" >Cari</button>
                </div>

            </form>
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header text-white text-center fw-bold"
                    style="background: linear-gradient(135deg, #1e3799, #4a69bd);">
                    📋 Daftar Siswa
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center align-middle">
                            <thead class="text-white" style="background: linear-gradient(135deg, #3c6382, #82ccdd);">
                                <tr>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['siswa'] as $siswa): ?>
                                    <tr>
                                        <td><?= $siswa['name'] ?></td>
                                        <td>
                                            <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id'] ?>"
                                                class="btn btn-sm btn-primary">Detail</a>
                                            <a href="<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id'] ?>"
                                                class="btn btn-sm btn-success modalEdit" data-bs-toggle="modal"
                                                data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>">Edit</a>
                                            <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id'] ?>"
                                                class="btn btn-sm btn-danger btn-delete">
                                                Hapus
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade text-black" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama siswa">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Keperawatan">Keperawatan</option>
                            <option value="Teknik Jaringan">Teknik Jaringan</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Dkv">DKV</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>




<style>
    .card {
        border-radius: 12px;
        overflow: hidden;
    }

    .card-header {
        font-size: 1.3rem;
        padding: 15px;
        border-radius: 10px 10px 0 0;
    }

    .table {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        font-weight: bold;
    }

    .table tbody tr:hover {
        background: rgba(60, 99, 130, 0.15);
        transition: 0.3s ease-in-out;
    }

    .btn-primary {
        background-color: #2980b9;
        border: none;
    }

    .btn-primary:hover {
        background-color: #3498db;
    }
</style>