<form method="POST" >
		    <h1 class="help is-danger"><?php echo $errors ?? '' ?></h1>
	<div class="container" >
  		<div class="row" id="exp" >
  					<div class ="col" >
  						<div class="form-group">
				  			  <h1 id="title">Personal Information</h1>
							  <label class="label">Name</label>
							  <div class="col">
							    <input class="form-control" type="text" value="<?= $name ?? '' ?>" name="name" required>
							  </div>
							  <label class="label">Middle</label>
							  <div class="col">
							    <input class="form-control" type="text" value="<?= $middle_name ?? '' ?>" name = "middle_name">
							  </div>
							  <label class="label">Last</label>
							  <div class="col">
							    <input class="form-control" type="text" value="<?= $last_name ?? '' ?>" name = "last_name" required>
							  </div>
							  <label class="label">About you</label>
							  <div class="col">
							    <textarea class="form-control" rows="5" type="text" value="<?= $about_you ?? '' ?>" name = "about_you" required></textarea>
							  </div>
							  <label class="label">Position</label>
							  <div class="col">
							    <input class="form-control" type="text" value="<?= $position ?? '' ?>" name = "position" required></input>
							  </div>
							  	<label class="label">Birth</label>
							  <div class="col">
							  	<div>
							  		<label>YEAR</label>
								   	<select class="form-control"  name="birth" id="year_birth">
			 						  	<option disabled>Select Year</option>
			  							<?php foreach($years as $year) : ?>
			    						<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
		  								<?php endforeach; ?>
										</select>
									</div>	
									<div>
										<label>LOCATION</label>
										<input class="form-control" type="text" value="<?= $location ?? '' ?>" name = "location" required></input>
									</div>
									</div>
								</div>
							  <div class="control has-text-right" id="btn_next_cu"> 
							   <button class="btn btn-success" name="info_personal">Next page
							   	<span>
							    	<i class="fas fa-angle-double-right"></i>
							    </span>
							  </button>

							  </div>
						</div>
					</div>
	    </div>   
	</div>    
</form>