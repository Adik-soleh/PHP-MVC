<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
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
                                    <th>NIS</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['siswa'] as $siswa): ?>
                                    <tr>
                                        <td><?= $siswa['nama'] ?></td>
                                        <td><?= $siswa['nis'] ?></td>
                                        <td><?= $siswa['email'] ?></td>
                                        <td><?= $siswa['jurusan'] ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning text-white me-2">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
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

    .btn-warning {
        background-color: #f39c12;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e67e22;
    }

    .btn-danger {
        background-color: #c0392b;
        border: none;
    }

    .btn-danger:hover {
        background-color: #e74c3c;
    }
</style>
