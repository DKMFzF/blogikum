<?php
  $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $email =  trim(string: filter_var(value: $_POST['email'], filter: FILTER_SANITIZE_EMAIL));
  $login =  trim(string: filter_var(value: $_POST['login'], filter: FILTER_SANITIZE_STRING));
  $pass =  trim(string: filter_var(value: $_POST['pass'], filter: FILTER_SANITIZE_STRING));

  if (
    strlen(string: $username) <= 3
    || strlen(string: $email) <= 3
    || strlen(string: $login) <= 3
    || strlen(string: $pass) <= 3
  ) exit();
  
  $hash = "@$%!bmnbvasld*(_2412Nb,";
  $pass = md5(string: $pass . $hash);

  $dbUser = "root";
  $dbPassword = "root";
  $db = "testing";
  $host = "localhost";

  $dsn = "mysql:host='.$host';dbname='.$db'";
  $pdo = new PDO(dsn: $dsn, username: $dbUser, password: $dbPassword);
  $sql = "INSERT INTRO users(name, email, login, pass) VALUES(?, ?, ?, ?)";
  $query = $pdo -> prepare(query: $sql);
  $query -> execute(params: []);
  $query -> execute(params: [$username, $email, $login, $pass]);
  
