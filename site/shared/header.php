<?php
require_once './shared/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" id="mi_nav" role="navigation" aria-label="main navigation">
  <div class="navbar-brand" >
    <a class="navbar-item" href="/">
      <img src="./imgs/hr.png" >
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

<?php
$menu = [
  ['name' => 'Curriculum Vitae', 'url' => '/curriculums.php'],
];
if (isset($_SESSION['user_id'])){
foreach ($menu as $link) {
  if (array_key_exists('sub_menus', $link)) {
    ?>
    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <?= $link['name'] ?>
        </a>

        <div class="navbar-dropdown">
          <?php
            foreach ($link['sub_menus'] as $sub_menu) {
              echo "<a class='navbar-item' href='" . $sub_menu['url'] . "'>" . $sub_menu['name'] . "</a>";
            }
           ?>
        </div>
      </div>
    <?php
  } else {
    echo "<a class='navbar-item' href='" . $link['url'] . "'>" . $link['name'] . "</a>";
  }
}
}
?>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <?php if (isset($_SESSION['user_id'])) { ?>
              <label><?= $_SESSION['user_email'] ?></label>
              <a class="button is-dark" style="margin: 2px;" href="/logout.php">
                Log out
              </a>
          <?php } else { ?>
            <a class="button is-dark" href="/register.php">
              <strong>Sign up</strong>
            </a>
            <a class="button is-dark" href="/">
              Log in
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</nav>
</body>