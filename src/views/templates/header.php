<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <link href="<?= BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-dark p-3 shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-bold" href="#">PHP MVC</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light active fw-semibold px-3" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-semibold px-3" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .navbar {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
    }

    .nav-link {
      transition: 0.3s;
    }

    .nav-link:hover {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    }
  </style>