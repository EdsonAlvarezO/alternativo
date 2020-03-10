<?php
require_once './shared/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mi_nav">
  <a class="navbar-brand" href="/" >
    <img src="./logos/hr.png" id="logo">
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Curriculum Vitae <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
    <?php if (isset($_SESSION['user_id'])) { ?>
            <label><?= $_SESSION['user_email'] ?></label>
            <a class="btn btn-dark" href="/logout.php">
                Log out
            </a>
          <?php } else { ?>
            <a class="btn btn-dark"  href="/register.php">
              Sign up
            </a>
            <a class="btn btn-dark"  href="/">
              Log in
            </a>
          <?php } ?>
  </form>
</nav>
</body>