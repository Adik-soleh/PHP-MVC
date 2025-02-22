<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <link href="<?= BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .navbar {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .nav-link {
      transition: 0.3s;
    }

    .nav-link:hover {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    }

    body {
      background: linear-gradient(135deg, #1c1f2b, #3a3f58);
      color: white;
      font-family: 'Arial', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding-top: 70px; /* Supaya konten tidak tertutup navbar */
    }

    .container {
      flex: 1;
      padding: 20px;
    }

    .navbar-toggler {
      border: none;
      background-color: transparent;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      filter: invert(1);
    }

    @media (max-width: 768px) {
      .nav-link {
        text-align: center;
        padding: 10px;
      }

      .navbar-nav {
        width: 100%;
      }

      .navbar-collapse {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        border-radius: 10px;
        padding: 10px;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg p-3 shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-bold" href="<?= BASE_URL; ?>">PHP MVC</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light active fw-semibold px-3" href="<?= BASE_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-semibold px-3" href="<?= BASE_URL; ?>/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-semibold px-3" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>