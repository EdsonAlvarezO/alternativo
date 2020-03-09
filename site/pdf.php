<?php
include __DIR__ .  '/bd_curri.php';
include __DIR__ .  '/templates.php';
require_once __DIR__ . '/vendor/mpdf/mpdf/src/HTMLParserMode.php';
?>
<?php
require_once __DIR__ . '/vendor/autoload.php';
$num_template = $_GET['template'];

if($num_template ==1){
	$css = file_get_contents('./css/template_one.css');
	$HTML = getTemplate_One($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
	pdf($HTML,$css);
}else if($num_template ==2){
	$css = file_get_contents('./css/template_two.css');
	$HTML = getTemplate_Two($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
	pdf($HTML,$css);
}

function pdf($HTML,$css){
	$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path','format' => 'A3'
			]);
	$mpdf->WriteHTML($HTML,\Mpdf\HTMLParserMode::HTML_BODY);
	$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
	ob_clean();
	$mpdf->Output("curriculums.pdf",'D');
}
?>
