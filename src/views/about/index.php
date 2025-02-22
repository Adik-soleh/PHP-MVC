<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 text-center p-5" style="width: 90%; max-width: 700px;">
        <div class="card-body">
            <h1 class="card-title fw-bold">🖥️ Tentang Sistem Sekolah 📊</h1>
            <p class="card-text mt-3" style="font-size: 18px;">
                Selamat datang di **Sistem Manajemen Sekolah Budi Jawa Luhur**! 🎓  
                Aplikasi ini dirancang untuk mempermudah administrasi dan pengelolaan data sekolah secara digital, 
                sehingga lebih efisien dan akurat.
            </p>
            
            <h4 class="fw-bold mt-4">📌 Fitur Utama:</h4>
            <ul class="list-unstyled mt-3" style="font-size: 18px; text-align: left; display: inline-block;">
                <li>✅ Manajemen Data Siswa</li>
            </ul>
            <p class="card-text mt-3" style="font-size: 18px;">
                Dengan antarmuka yang ramah pengguna, sistem ini siap mendukung efisiensi dan transparansi dalam dunia pendidikan! 📚✨
            </p>
            <a href="<?= BASE_URL; ?>/siswa" class="btn btn-light mt-4 fw-bold px-4 py-2"
                style="border-radius: 30px; font-size: 18px;">Masuk ke Sistem 🔗</a>
        </div>
    </div>
</div>

<style>
    .container {
        flex: 1;
    }

    .card {
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        color: white;
        border-radius: 20px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        height: max-content;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
</style>
