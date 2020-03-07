<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php  
	$id_curriculum = $_GET['id_curriculum'];

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		 	$email = $_SESSION['user_email'];
			$phone = $_POST['phone'] ?? '';
			$street = $_POST['street'] ?? '';
			$city = $_POST['city'] ?? '';
			$website = $_POST['website'] ?? '';
			$github = $_POST['github'] ?? '';
			$errors = '';
			$sql = 'insert into contact (id_curriculum,email, phone, street, city, website,github) VALUES ($1,$2,$3,$4,$5,$6,$7)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$email,$phone,$street,$city,$website,$github]);
			    if ($results) {
					$phone = '';
					$street = '';
					$city = '';
					$website = '';
					$github = '';
					header("Location: ./picture.php?id_curriculum=$id_curriculum");
			    } 
	}
?>
<section class="section">
	<form method="POST">
			<div class="container" >
  				<div class="row" id="exp">
  					<div class ="col">
					  		 	  <h1 id="title">Contact</h1>
								  <label class="label">Phone</label>
								  <div class="col">
								    <input class="form-control" rows="5" type="number" value="<?= $phone ?? '' ?>" name = "phone" required></input>
								  </div>
								  <label class="label">Street</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $street ?? '' ?>" name = "street" required></input>
								  </div>
								  <label class="label">City</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $city ?? '' ?>" name = "city" required></input>
								  </div>
								  <label class="label">Website</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $website ?? '' ?>" name = "website" required></input>
								  </div>
								  <label class="label">Github</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $github ?? '' ?>" name = "github" required></input>
								  </div>
								  <div class="control has-text-right" id="btn_next_cu"> 
									   <button class="btn btn-success">Next page
											   	<span>
											    	<i class="fas fa-angle-double-right"></i>
											    </span>
									  </button>
								  </div>
					</div>
		        </div> 
		    </div>    
	</form>
</section>