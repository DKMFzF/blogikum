<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
    $website_title = 'Ошибка 404';
    $link_head = '../';
    require '../components/head.php';
  ?>
</head>

<body class="page">
  <div class="d-flex flex-column container py-3 vw-100 vh-100">
    <?php require '../components/header.php'; ?>
    <main class="px-3 mt-auto">
      <h1>Что-то пошло не так(</h1>
      <p class="lead"><?=$website_title?> xD</p>
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
