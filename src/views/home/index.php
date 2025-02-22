<div class="container mt-5 d-flex justify-content-center">
  <div class="card shadow-lg border-0 text-center p-5"
    style="width: 90%; max-width: 700px; background: linear-gradient(135deg, #2c3e50, #4ca1af); color: white; border-radius: 20px;">
    <div class="card-body">
      <h1 class="card-title fw-bold">👋 Selamat Datang, Admin! 🎓</h1>
      <p class="card-text mt-3" style="font-size: 18px;">
        Hi <b> <?= $data['name']; ?> </b>, selamat datang di <b>Budi Jawa Luhur</b>!  
        Terima kasih telah bergabung dalam sistem manajemen sekolah kami! 💼
      </p>
      <p class="card-text mt-3" style="font-size: 18px;">
        Silakan kelola data siswa, jadwal pelajaran, serta informasi sekolah dengan mudah dan cepat! 🚀
      </p>
      <a href="<?= BASEURL; ?>/siswa" class="btn btn-light mt-4 fw-bold px-4 py-2"
        style="border-radius: 30px; font-size: 18px;">Masuk ke Dashboard 📊</a>
    </div>
  </div>
</div>

<style>
  .card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    max-height: fit-content;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }
</style>
