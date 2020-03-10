<?php
include __DIR__ .  '/templates.php';
require_once __DIR__ . '/vendor/mpdf/mpdf/src/HTMLParserMode.php';
require_once  './shared/db.php';
?>
<?php
require_once __DIR__ . '/vendor/autoload.php';
$num_template = $_GET['template'];
$id_curriculum = $_GET['id_curriculum'];
$id_user = $_SESSION['user_id']; 	
$info_personal = $con->runQuery('SELECT * FROM curriculums WHERE id_user = $1', [$id_user]);
$info_contact = $con->runQuery('SELECT * FROM contact WHERE id_curriculum = $1', [$id_curriculum]);
$info_companys = $con->runQuery('SELECT * FROM companys WHERE id_curriculum = $1', [$id_curriculum]);
$info_skills = $con->runQuery('SELECT * FROM skills WHERE id_curriculum = $1', [$id_curriculum]);
$info_hobbies = $con->runQuery('SELECT * FROM hobbies WHERE id_curriculum = $1', [$id_curriculum]);
$info_degrees = $con->runQuery('SELECT * FROM degrees WHERE id_curriculum = $1', [$id_curriculum]);
$image = $con->runQuery('SELECT * FROM images WHERE id_user = $1', [$id_user]);
$info_contributions = $con->runQuery('SELECT * FROM contributions WHERE id_curriculum = $1', [$id_curriculum]);
$info_projects = $con->runQuery('SELECT * FROM projects WHERE id_curriculum >= $1', [$id_curriculum]);

		if($num_template ==1){
			$css = file_get_contents('./css/template_one.css');
			$HTML = getTemplate_One($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template ==2){
			$css = file_get_contents('./css/template_two.css');
			$HTML = getTemplate_Two($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template ==3){
			$css = file_get_contents('./css/template_three.css');
			$HTML = getTemplate_Three($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template == 4){
			$css = file_get_contents('./css/template_4.css');
			$HTML = getTemplate_Four($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template == 5){
			$css = file_get_contents('./css/template_five.css');
			$HTML = getTemplate_Five($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template == 6){
			$css = file_get_contents('./css/template_six.css');
			$HTML = getTemplate_Six($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template == 7){
			$css = file_get_contents('./css/template_seven.css');
			$HTML = getTemplate_Seven($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}else if($num_template == 8){
			$css = file_get_contents('./css/template_eigth.css');
			$HTML = getTemplate_Eight($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
			pdf($HTML,$css);
		}

function pdf($HTML,$css){
	$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path','format' => 'A1'
			]);
	$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
	$mpdf->WriteHTML($HTML,\Mpdf\HTMLParserMode::HTML_BODY);
	ob_clean();
	$mpdf->Output("curriculums.pdf",'D');
}
?>
