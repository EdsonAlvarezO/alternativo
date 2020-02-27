<?php require_once './shared/header.php';
	  require_once './shared/guard.php';
 ?>
<section class="section">
	<form method="POST">
			<div class="columns is-multiline is-centered is-scrollable">
				  	<div class="column is-half">

							  <label class="label">Company</label>
							  <div class="control">
							  	<p><?php $curriculum['id'] ?></p>
							    <input class="input" type="text" value="<?= $company ?? '' ?>" name="company" required>
							  </div>
							  <label class="label">Position</label>
							  <div class="control">
							    <input class="input" type="text" value="<?= $position ?? '' ?>" name = "position">
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
							  		 <button class="button">Add</button>
							  	</div>
							  	<div id="btn_next">
							   		<button class="button">Next page</button>
							   	</div>
							  </div>

	           </div>
	          
	    </div>    
	</form>
</section>
<?php require_once './shared/footer.php' ?>