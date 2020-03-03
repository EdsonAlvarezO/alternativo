<form method="POST" >
		    <h1 class="help is-danger"><?php echo $errors ?? '' ?></h1>
			<div class="columns is-multiline is-centered is-scrollable">
				  	<div class="column is-half">
				  			  <h1 id="title">Personal Information</h1>
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
							  <div class="control has-text-right" id="btn_next_cu"> 
							   <button class="button" name="info_personal">Next page</button>
							  </div>
	           </div>   
	    </div>    
</form>