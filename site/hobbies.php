<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php  
	$id_curriculum = $_GET['id_curriculum'];

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_hobbie'])) {
			$name = $_POST['name'] ?? '';
			$URL = $_POST['URL'] ?? '';
			$errors = '';
			$sql = 'insert into hobbies (id_curriculum, name_hobbie,URL) VALUES ($1,$2,$3)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$name,$URL]);
			    if ($results) {
			        $name = '';
					$URL = '';
			    } 
		}else{
			 header("Location: ./contributions.php?id_curriculum=$id_curriculum");
		}	    
	}
?>
<section class="section">
	<form method="POST">
			<div class="container" >
  				<div class="row" id="exp">
  					<div class ="col">
					  		 	  <h1 id="title">Hobbies</h1>
								  <label class="label">Name</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $name ?? '' ?>" name="name" required>
								  </div>
								  <label class="label">URL</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $URL ?? '' ?>" name = "URL" required></input>
								  </div>
								  <div class="col has-text-right"> 
								  	<div  id="btn_add">
								  		 <button class="btn btn-primary" name='add_hobbie'>Add hobbie</button>
								  	</div>
								  </div>
		        </div> 
		    </div>    
	</form>
	<div id="btn_next_edu">
		<form method="POST">
			<div >
				<button class="btn btn-success" name="go_contri" >Next page
					<i class="fas fa-angle-double-right"></i>
				</button>
			</div>
		</form>
	</div>
</section>