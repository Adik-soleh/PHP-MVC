<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 text-center p-5" style="width: 90%; max-width: 700px;">
        <div class="card-body">
            <h1 class="card-title fw-bold">🏫 Tentang Sekolah Kami 📚</h1>
            <p class="card-text mt-3" style="font-size: 18px;">
                Selamat datang di <b><?= $data['name']; ?></b>, sebuah institusi pendidikan yang berkomitmen untuk memberikan pengalaman belajar terbaik bagi siswa.
            </p>
            <p class="card-text mt-3" style="font-size: 18px;">
                Dengan tenaga pendidik yang profesional dan fasilitas lengkap, kami siap mencetak generasi yang unggul, berkarakter, dan siap menghadapi masa depan! 💡✨
            </p>
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
        height: fit-content;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
</style>
