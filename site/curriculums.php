<?php
require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
?>
<?php 
	$years = range(1900, strftime("%Y", time()));
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    		if (isset($_POST['info_personal'])) {
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
		        		$infor_per = true;
		        		$curriculum_id = $results[0]['id'];
		        }

        }else if(isset($_POST['add_company'])){
		        	$company = $_POST['company'] ?? '';
			        $position_work = $_POST['position_work'] ?? '';
			        $time_period = $_POST['time_period'] ?? '';
			        $description = $_POST['description'] ?? '';
			        $website = $_POST['website'] ?? '';
        }else if(isset($_POST['go_education'])){

        }
    }
 ?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<section class="section">
	<?php
	//	if(){
					require_once './info_personal.php';
		//}else if(){
					require_once './experience.php';
		//}
?>
</section>
<?php require_once './shared/footer.php' ?>