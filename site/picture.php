<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>

<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
	$id_curriculum = $_GET['id_curriculum'];
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(isset($_POST['ready'])){
			if(!empty($_FILES['image']['name'])){
				$id_user = $_SESSION['user_id'];
				$ruta = 'Images/'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],$ruta);
				$sql = 'insert into images (id_user,URL) VALUES ($1,$2)';
				$results = $con->runQuery($sql,[$id_user,$ruta]);
			}
		}else{
			header("Location: ./template_one.php?id_curriculum=$id_curriculum");
		}		
	}
 ?>
<section class="section">
	<div class="all">
	<div class="container col-lg-6 col-lg-offset-2" id="pictureAll">
		<div class="panel panel-default" id="myPanel">
			<div class="panel-heading">
				<div class="panel-title">
					<center>
						<h1>Choose your profile image</h1>
					</center>
					
				</div>
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="file" name="image">
					</div>
					<?php if($ruta != ''){ ?>
						<div class="form-group">
							<img src="<?php echo $ruta ?>" id="myImage">
						</div>
					<?php } ?>
					<div id="btn_finalizar">
						<button class="btn btn-success" name="ready" >View and choose image</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<?php if($ruta != ''){ ?>
	<div class="almacen">
		<div id="btn_next_pic">
				<form method="POST">
					<div >
						<button class="btn btn-success">Finish and create templates</button>
					</div>
				</form>
		</div>
	</div>
	<?php } ?>
</section>