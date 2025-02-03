<?php ?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
  <?php
  $website_title = 'Регистрация';
  $link_head = '../';
  require '../components.blok/head.php';
  ?>
</head>

<body class="page">
  <div class="d-flex flex-column justify-content-between container py-3 vw-100 vh-100">
    <header>
      <div
        class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a
          href="/"
          class="d-flex align-items-center link-body-emphasis text-decoration-none">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="32"
            class="me-2"
            viewBox="0 0 118 94"
            role="img">
            <title>Bootstrap</title>
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
              fill="currentColor"></path>
          </svg>
          <span class="fs-4">Ideas Burner</span>
        </a>
      </div>
    </header>

    <main class="form-signin w-100 m-auto" style="max-width: 240px;">
      <form action="reg/reg.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

        <div class="form-floating mb-1">
          <input type="text" class="form-control" id="floatingUserName" placeholder="Иван">
          <label for="username">Ваше Имя</label>
        </div>
        <div class="form-floating mb-1">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="email">Email адресс</label>
        </div>
        <div class="form-floating mb-1">
          <input type="login" class="form-control" id="floatingLogin" placeholder="Login">
          <label for="text">Ваш Логин</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
          <label for="pass">Пароль</label>
        </div>

        <!-- TODO: потом добавить функцию повторения пароля -->
        <!-- <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div> -->

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Запомнить меня
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      </form>
    </main>

    <?php require '../components.blok/footer.php'; ?>
  </div>
</body>

</html>