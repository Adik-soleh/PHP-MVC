<div class="container mt-5 d-flex justify-content-center">
  <div class="card shadow-lg border-0 text-center p-5"
    style="width: 90%; max-width: 700px; background: linear-gradient(135deg, #2c3e50, #4ca1af); color: white; border-radius: 20px;">
    <div class="card-body">
      <h1 class="card-title fw-bold">📚 Selamat Datang di Website Sekolah Kami! 🏫</h1>
      <p class="card-text mt-3" style="font-size: 18px;">
      Hi <b> <?= $data['name']; ?> </b>  Selamat datang di <b>Budi Jawa Luhur</b>, tempat di mana pendidikan dan karakter dibangun untuk masa depan yang lebih baik!
      </p>
      <p class="card-text mt-3" style="font-size: 18px;">
        Kami berkomitmen untuk memberikan pengalaman belajar terbaik bagi siswa dengan tenaga pendidik profesional dan fasilitas modern. Mari jelajahi berbagai informasi tentang sekolah kami! 🌟
      </p>
      <a href="<?= BASE_URL; ?>/about" class="btn btn-light mt-4 fw-bold px-4 py-2"
        style="border-radius: 30px; font-size: 18px;">Pelajari Lebih Lanjut 🏆</a>
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
