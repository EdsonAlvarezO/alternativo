<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<?php  
	$id_curriculum = $_GET['id_curriculum'];
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_degree'])) {
			$degree = $_POST['degree'] ?? '';
			$time_period = ((string)$_POST['timeperiod_1'] ."/". (string)$_POST['timeperiod_2']) ?? '';
			$description = $_POST['description'] ?? '';
			$website = $_POST['website'] ?? '';
			$errors = '';
			$sql = 'insert into degrees (id_curriculum, degree, time_period, description, website) VALUES ($1,$2,$3,$4,$5)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$degree,$time_period,$description,$website]);
			    if ($results) {
			        $degree = '';
					$time_period =  '';
					$description =  '';
					$website = '';
			    } 
		}else{
			 header("Location: ./skills.php?id_curriculum = $id_curriculum");
		}	    
	}
?>
<section class="section">
	<form method="POST">
			<div class="columns is-multiline is-centered is-scrollable">
				<div class="column is-half">
					  		 	  <h1 id="title">Education</h1>
								  <label class="label">Degree</label>
								  <div class="control">
								  	<p><?php $curriculum_id ?></p>
								    <input class="input" type="text" value="<?= $degree ?? '' ?>" name="degree" required>
								  </div>
								  <label class="label">Time-period</label>
								  <div class="control" id="fechas">
								  	<div>
								  		<label class="label">De:</label>
								  		<div class= "is-half">
								  		 	<input class="input" type="date" name = "timeperiod_1" required>
								  		</div>
								  		<label class="label">A:</label>
								  		<div class= "is-half">
								  			<input class="input" type="date" name = "timeperiod_2" required>
								  		</div>
									</div>
								  </div>
								  <label class="label">Description</label>
								  <div class="control">
								    <textarea class="textarea" rows="5" type="text" value="<?= $description ?? '' ?>" name = "description" required></textarea>
								  </div>
								  <label class="label">Website</label>
								  <div class="control">
								    <input class="input" type="text" value="<?= $website ?? '' ?>" name = "website" required></input>
								  </div>
								  <div class="control has-text-right"> 
								  	<div  id="btn_add">
								  		 <button class="button" name='add_degree'>Add</button>
								  	</div>
								  </div>
		        </div> 
		    </div>    
	</form>
	<div id="btn_next_ex">
		<form method="POST">
			<div >
				<button class="button" name="go_skills" >Next page</button>
			</div>
		</form>
	</div>
</section>