<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="../img/favicon.ico" size="any" />
  <link rel="icon" href="../img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="../img/apple-touch-icon.png" />
  <meta name="discription" content="Блог товаров написанный на PHP" />
  <link rel="stylesheet" href="../vendor/normalize.css" />
  <link rel="stylesheet" href="../vendor/bootstrap.min.css" />
  <title>Ошибка 404</title>
</head>

<body class="page">
  <div class="d-flex flex-column container py-3 vw-100 vh-100">
    <?php require '../components/header.php'; ?>
    <main class="px-3 mt-auto">
      <h1>Что-то пошло не так(</h1>
      <p class="lead">Ошибка 404 xD</p>
      <p class="lead">
        <a href="../index.php" class="btn btn-lg btn-light fw-bold border-white bg-white p-0 text-decoration-underline">Перейти на главную страницу</a>
      </p>
    </main>
    <div class="mt-auto">
      <?php require '../components/footer.php'; ?>
    </div>
  </div>
</body>

</html>