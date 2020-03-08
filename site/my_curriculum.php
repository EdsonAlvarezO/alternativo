<?php 
	require_once './shared/header.php';
	require_once './shared/guard.php';
	require_once './shared/db.php';

	$id_user = $_SESSION['user_id'];
 	$id_curriculum = $_GET['id_curriculum'];
 	$info_personal = $con->runQuery('SELECT * FROM curriculums WHERE id_user = $1', [$id_user]);
	$info_contact = $con->runQuery('SELECT * FROM contact WHERE id_curriculum = $1', [$id_curriculum]);
	$info_companys = $con->runQuery('SELECT * FROM companys WHERE id_curriculum = $1', [$id_curriculum]);
	$info_skills = $con->runQuery('SELECT * FROM skills WHERE id_curriculum = $1', [$id_curriculum]);
	$info_hobbies = $con->runQuery('SELECT * FROM hobbies WHERE id_curriculum = $1', [$id_curriculum]);
	$info_degrees = $con->runQuery('SELECT * FROM degrees WHERE id_curriculum = $1', [$id_curriculum]);
	$image = $con->runQuery('SELECT * FROM images WHERE id_user = $1', [$id_user]);
	$info_contributions = $con->runQuery('SELECT * FROM contributions WHERE id_curriculum = $1', [$id_curriculum]);
	$info_projects = $con->runQuery('SELECT * FROM projects WHERE id_curriculum >= $1', [$id_curriculum]);
 ?>