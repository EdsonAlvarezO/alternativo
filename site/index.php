<?php
require_once './shared/header.php';
require_once './shared/db.php';
require_once './shared/sessions.php';
?>
<section class="hero is-fullheight">
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = '';
        $results = $con->runQuery('SELECT * FROM users WHERE email = $1 and password = md5($2)', [$email, $password]);
        if ($results) {
            $_SESSION['user_id'] = $results[0]['id'];
            $_SESSION['user_email'] = $results[0]['email'];
            header('Location: /curriculums.php');
            exit();
        } elseif ($email != '' || $password != '') {
            $errors = 'Invalid email or password';
        }
    }
?>
<div class="logform">
  <form class="form-lognin" method="POST">
        <h1 class="h3 mb-3 font-weight-normal" id="titlelog">PLEASE LOGIN</h1>
        <div class=form-control>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="<?= $email ?? '' ?>" required="" autofocus="">
        </div>
        <div class=form-control>
          <input type="password" name = "password" type="password" placeholder="Password" id="inputPassword" class="form-control" placeholder="Password" required="">
        </div>
        <div class="form-control">
        <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">LOG IN</button>
          <?php if(!empty($errors)){ ?>
              <div class="alert alert-danger" role="alert" id="alerta_log">
                  <?php echo $errors ?>
              </div>
          <?php } ?>
        </div>
  </form>
</div>
</section>
<?php require_once './shared/footer.php' ?>

