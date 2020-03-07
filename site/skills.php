<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php  
	$id_curriculum = $_GET['id_curriculum'];
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_skill'])) {
			$name = $_POST['name'] ?? '';
			$level = $_POST['level'] ?? '';
			$errors = '';
			$sql = 'insert into skills (id_curriculum, name, level) VALUES ($1,$2,$3)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$name,$level]);
			    if ($results) {
			        $name = '';
					$level =  '';
			    } 
		}else{
			 header("Location: ./projects.php?id_curriculum=$id_curriculum");
		}	    
	}
?>
<section class="section">
	<form method="POST">
			<div class="container" id="skilsall">
  				<div class="row" id="skills">
  					<div class ="col" >
					  		<h1 id="title">Skills</h1>
					  		<div class="col">
							<label class="label">Name</label>
								<input class="form-control" type="text" value="<?= $name ?? '' ?>" name="name" required>
							</div>
							<div class="col">
								<label class="label">Level (0-100)</label>
  								<input  class="form-control" type="range" id="level" name="level" min="0" max="100">
  							</div>
							<div class="col has-text-right"> 
								<div  id="btn_add">
									 <button class="brn btn-primary" name='add_skill'>Add skill</button>
								</div>
							</div>
						</div>
		        </div> 
		    </div>    
	</form>
	<div id="btn_next_ex">
		<form method="POST">
			<div >
				<button class="btn btn-success" name="next_page">Next page
					<i class="fas fa-angle-double-right"></i>
				</button>
			</div>
		</form>
	</div>
</section>