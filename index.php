<?php ?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
  <?php 
    $website_title = 'Homepage | Ideas Burner';
    $link_head = './';
    require 'components.blok/head.php';
  ?>
</head>

<body class="page">
  <div class="d-flex flex-column justify-content-between container py-3 vw-100 vh-100">
    <?php require 'components.blok/header.php'; ?>
    <main>
      <div class="row">
        <div class="col-md-8 mb-4">Заглушка</div>
        <?php require 'components.blok/aside.php'; ?>
      </div>
    </main>
    <?php require 'components.blok/footer.php'; ?>
  </div>
</body>

</html>