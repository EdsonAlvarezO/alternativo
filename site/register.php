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
    }
 ?>
    <div class="hero-body">
        <div class="container">
          <div class="columns is-centered">
            <div class="column is-5-tablet is-4-desktop is-3-widescreen">
              <form method="POST" class="box">
                <h1 class="help is-danger"><?php echo $errors ?></h1>
                <div class="field">
                  <label for="" class="label">Email</label>
                  <div class="control has-icons-left">
                    <input type="email" name="email" class="input" value="<?= $email ?? '' ?>" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label for="" class="label">Password</label>
                  <div class="control has-icons-left">
                    <input name = "password" type="password" placeholder="*******" class="input" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                </div>
                 <div class="field">
                    <label class="label">Confirm password</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" name="co_password" placeholder="*******" type="password" value="">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <a class="button is-link is-light" href="/">Cancel</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
<?php require_once './shared/footer.php' ?>

