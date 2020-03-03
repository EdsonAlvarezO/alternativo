<form method="POST">
		<div class="columns is-multiline is-centered is-scrollable">
			<div class="column is-half">
				  		 	  <h1 id="title">Companys</h1>
							  <label class="label">Company</label>
							  <div class="control">
							  	<p><?php $curriculum_id ?></p>
							    <input class="input" type="text" value="<?= $company ?? '' ?>" name="company" required>
							  </div>
							  <label class="label">Position</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $position_work ?? '' ?>" name = "position_work" required>
							  </div>
							  <label class="label">Time period</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $time_period ?? '' ?>" name = "time_period" required>
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
							  		 <button class="button" name='add_company'>Add company</button>
							  	</div>
							  	<div id="btn_next">
							   		<button class="button" name="go_education">Next page</button>
							   	</div>
							  </div>
	        </div> 
	    </div>    
</form>