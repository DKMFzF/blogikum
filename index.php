<?php ?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="./img/favicon.ico" size="any" />
  <link rel="icon" href="./img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" />
  <meta name="discription" content="Блог товаров написанный на PHP" />
  <link rel="stylesheet" href="./vendor/normalize.css" />
  <link rel="stylesheet" href="./vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <title>Ideas Burner</title>
</head>

<body class="page">
  <div class="d-flex flex-column justify-content-between container py-3 vw-100 vh-100">
    <?php require 'components/header.php'; ?>
    <main>
      <div class="row">
        <div class="col-md-8 mb-4">Заглушка</div>
        <?php require 'components/aside.php'; ?>
      </div>
    </main>
    <?php require 'components/footer.php'; ?>
  </div>
</body>

</html>