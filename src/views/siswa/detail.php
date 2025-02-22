<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4 p-4 text-center" 
        style="max-width: 500px; background: linear-gradient(135deg, #34495e, #2c3e50); color: white;">
        <div class="card-header border-0">
            <h2 class="fw-bold"><?= $data['siswa']['name'] ?></h2>
            <p class="text-light-50 fst-italic"><?= $data['siswa']['jurusan'] ?></p>
        </div>
        <div class="card-body">
            <div class="mb-3 detail-item">
                <strong class="d-block">📌 NIS</strong>
                <p><?= $data['siswa']['nis'] ?></p>
            </div>
            <div class="mb-3 detail-item">
                <strong class="d-block">✉️ Email</strong>
                <p><?= $data['siswa']['email'] ?></p>
            </div>
            <div class="mt-4">
                <a href="<?= BASEURL; ?>/siswa" class="btn btn-outline-light fw-bold px-4 py-2" style="border-radius: 30px;">
                    🔙 Kembali
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        text-align: center;
        padding: 40px 20px;
        max-height: fit-content;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    .detail-item p {
        background: rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-radius: 8px;
        margin: 5px 0;
        font-weight: bold;
    }

    .btn-outline-light {
        border: 2px solid white;
        transition: 0.3s ease-in-out;
    }

    .btn-outline-light:hover {
        background-color: white;
        color: #2c3e50;
    }
</style>
