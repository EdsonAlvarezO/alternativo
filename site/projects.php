<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php  
	$id_curriculum = $_GET['id_curriculum'];

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_project'])) {
			$name = $_POST['name'] ?? '';
			$plataform = $_POST['plataform'] ?? '';
			$description = $_POST['description'] ?? '';
			$URL = $_POST['URL'] ?? '';
			$errors = '';
			$sql = 'insert into projects (id_curriculum, name_project, plataform, description, URL) VALUES ($1,$2,$3,$4,$5)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$name,$plataform,$description,$URL]);
			    if ($results) {
			        $name = '';
					$plataform =  '';
					$description =  '';
					$URL = '';
			    } 
		}else{
			 header("Location: ./hobbies.php?id_curriculum=$id_curriculum");
		}	    
	}
?>
<section class="section">
	<form method="POST">
			<div class="container" >
  				<div class="row" id="exp">
  					<div class ="col">
					  		 	  <h1 id="title">Projects</h1>
								  <label class="label">Name</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $name ?? '' ?>" name="name" required>
								  </div>
								  <label class="label">Plataform</label>
								  <div class="col">
								    <input class="form-control" rows="5" type="text" value="<?= $plataform ?? '' ?>" name = "plataform" required></input>
								  </div>
								  <label class="label">Description</label>
								  <div class="col">
								    <textarea class="form-control" type="text" value="<?= $description ?? '' ?>" name = "description" required></textarea>
								  </div>
								  <label class="label">URL</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $URL ?? '' ?>" name = "URL" required></input>
								  </div>
								  <div class="col has-text-right"> 
								  	<div  id="btn_add">
								  		 <button class="btn btn-primary" name='add_project'>Add Project</button>
								  	</div>
								  </div>
		        </div> 
		    </div>    
	</form>
	<div id="btn_next_edu">
		<form method="POST">
			<div >
				<button class="btn btn-success" name="go_hobbies" >Next page
					<i class="fas fa-angle-double-right"></i>
				</button>
			</div>
		</form>
	</div>
</section>