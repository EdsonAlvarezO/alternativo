<?php
require_once './shared/header.php';
require_once './shared/db.php';
?>
<section class="hero is-dark is-fullheight">

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $co_password = $_POST['co_password'] ?? '';
        $errors = '';
        $results = $con->runQuery('SELECT * FROM users WHERE email = $1', [$email]);
        if(!$results){
          if($password == $co_password){
              if (strlen($password) >= 5) {
                  $sql = "INSERT INTO users(email, password) VALUES ($1, md5($2))";
                  $con->runStatement($sql, [$email, $password]);
                  header('Location: /');
                  exit();
              }else{
                  $errors = 'Password must have 5 characters';
              }
          }else{
              $errors = 'Passwords do not match';
          }
      }else{
        $errors = 'Existing user';
      }
    }
 ?>
 <div class="logform">
  <form class="form-lognin" method="POST">
        <h1 class="h3 mb-3 font-weight-normal" id="titlelog">SIGN IN</h1>
        <div class=form-control>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="<?= $email ?? '' ?>" required="" autofocus="">
        </div>
        <div class=form-control>
          <input type="password" name = "password" type="password" placeholder="Password" id="inputPassword" class="form-control" placeholder="Password" required="">
        </div>
        <div class=form-control>
          <input type="password" name = "co_password" type="password" placeholder="Confirm password" id="inputPassword" class="form-control" placeholder="Password" required="">
        </div>
        <div class=form-control>
          <button class="btn btn-lg btn-success btn-block btn-sm" type="submit">SIGN IN</button>
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

