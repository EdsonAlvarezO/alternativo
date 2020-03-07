<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php  
	$id_curriculum = $_GET['id_curriculum'];
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_company'])) {
			$company = $_POST['company'] ?? '';
			$position_work = $_POST['position_work'] ?? '';
			$time_period = ((string)$_POST['timeperiod_1'] ."/". (string)$_POST['timeperiod_2']) ?? '';
			$description = $_POST['description'] ?? '';
			$website = $_POST['website'] ?? '';
			$errors = '';
			$sql = 'insert into companys(id_curriculum, company_name, position_company, time_period, description_company, website) VALUES ($1,$2,$3,$4,$5,$6)';
			$results = $con->runStatement($sql,[(int)$id_curriculum,$company, $position_work,$time_period,$description,$website]);
			    if ($results) {
			        $company = '';
					$position_work = '';
					$time_period =  '';
					$description =  '';
					$website = '';
			    } 
		}else if(isset($_POST['next_page'])){
			 header("Location: ./education.php?id_curriculum=$id_curriculum");
		}	    
	}
?>
<section class="section">
	<form method="POST">
			<div class="container" >
  				<div class="row" id="exp">
  					<div class ="col" >
					  		 	  <h1 id="title">Experience</h1>
								  <label class="label">Company</label>
								  <div class="col">
								    <input class="form-control" type="text" value="<?= $company ?? '' ?>" name="company" required>
								  </div>
								  <label class="label">Position</label>
								  <div class="col">
								    <input class="form-control"  type="text" value="<?= $position_work ?? '' ?>" name = "position_work" required>
								  </div>
								  <label class="label">Time period</label>
								  <div class="col" id="fechas">
								  	<div>
								  		<label class="label">Start year:</label>
								  		<div class= "is-half">
								  		 	<input class="form-control"  type="date" name = "timeperiod_1" required>
								  		</div>
								  		<label class="label">Finish year:</label>
								  		<div class= "is-half">
								  			<input class="form-control"  type="date" name = "timeperiod_2" required>
								  		</div>
									</div>
								  </div>
								  <label class="label">Description</label>
								  <div class="col">
								    <textarea class="form-control"  rows="5" type="text" value="<?= $description ?? '' ?>" name = "description" required></textarea>
								  </div>
								  <label class="label">Website</label>
								  <div class="col">
								   <input class="form-control" type="text" value="<?= $website ?? '' ?>" name = "website" required>				    
								    </input>
								  </div>
								  <div class="col has-text-right"> 
								  	<div  id="btn_add">
								  		 <button class="btn btn-primary"  name='add_company'>Add company</button>
								  	</div>
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