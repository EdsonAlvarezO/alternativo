<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php 
	$years = range(1900, strftime("%Y", time()));
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    			$name = $_POST['name'] ?? '';
		        $middle_name = $_POST['middle_name'] ?? '';
		        $last_name = $_POST['last_name'] ?? '';
		        $birth = $_POST['birth'] ?? '';
		        $about_you = $_POST['about_you'] ?? '';
		        $position = $_POST['position'] ?? '';
		        $location = $_POST['location'] ?? '';
		        $id_user = $_SESSION['user_id'];
		        $errors = '';
		        $sql = 'insert into curriculums(id_user, name_user, middle_name, last_name, birth, about_you, position_user, location_user) VALUES ($1,$2,$3,$4,$5,$6,$7,$8) returning id;';
		        $results = $con->runQuery($sql,[$id_user,$name, $middle_name,$last_name,$birth,$about_you,$position,$location]);
		        if ($results) {
		        	$id_curriculum = $results[0]['id'];
		        	header("Location: ./experience.php?id_curriculum=$id_curriculum");
		        } 
    }
 ?>

<section class="section">
<?php
	require_once './info_personal.php';
?>
</section>
<?php require_once './shared/footer.php' ?>