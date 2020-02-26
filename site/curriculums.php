<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<?php $years = range(1900, strftime("%Y", time())); ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $middle_name = $_POST['middle_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';
        $birth = $_POST['birth'] ?? '';
        $about_you = $_POST['about_you'] ?? '';
        $position = $_POST['position'] ?? '';
        $location = $_POST['location'] ?? '';
        $id_user = $_SESSION['user_id'];
        var_dump($name);
        $errors = '';
        $sql = 'insert into curriculums(id_user, name_user, middle_name, last_name, birth, about_you, position_user, location_user) VALUES ($1,$2,$3,$4,$5,$6,$7,$8) returning id;';
        $results = $con->runQuery($sql,[$id_user,$name, $middle_name,$last_name,$birth,$about_you,$position,$location]);
        var_dump($results[0]['id']);
        if ($results) {
            exit();
        } elseif ($name != '' || $middle_name != '') {
            $errors = 'invalid email and password';
        }
    }
 ?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<section class="section">
	<form method="POST">
			<div class="columns is-multiline is-centered is-scrollable">
				  	<div class="column is-half">
							  <label class="label">Name</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $name ?? '' ?>" name="name" required>
							  </div>
							  <label class="label">Middle</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $middle_name ?? '' ?>" name = "middle_name">
							  </div>
							  <label class="label">Last</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $last_name ?? '' ?>" name = "last_name" required>
							  </div>
							  <label class="label">About you</label>
							  <div class="control">
							    <textarea class="textarea" rows="5" type="text" value="<?= $about_you ?? '' ?>" name = "about_you" required></textarea>
							  </div>
							  <label class="label">Position</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $position ?? '' ?>" name = "position" required></input>
							  </div>
							  <div class="control">
							  	<label class="label">Birth</label>
							  	<div class="select is-primary">
								   	<select name="birth" id="year_birth">
			 						  	<option disabled>Select Year</option>
			  							<?php foreach($years as $year) : ?>
			    						<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
		  								<?php endforeach; ?>
										</select>
									</div>	
								</div>
								<label class="label">Location</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $location ?? '' ?>" name = "location" required></input>
							  </div>
							  <div class="control has-text-right" id="btn_next"> 
							   <button class="button">Next page</button>
							  </div>
	           </div>
	          
	    </div>    
	</form>
</section>


<?php require_once './shared/footer.php' ?>