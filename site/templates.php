<?php
require_once  './shared/header.php';
require_once  './shared/guard.php';
?>
<?php
	function getTemplate_One($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
		$template_one = "<section class='section'>
					<div class='all_template'>
						<div class='almacen_teamplate' style='display: flex;'>
							<div id='doc2' class='yui-t7'>
								<div id='inner'>
								<div id='hd' style='display:flex;'>
									<div class='yui-gc'>
											<div id='myimage'>
												<div class='position'>
													<h1>".$info_personal[0]['name_user'].$info_personal[0]['middle_name'].$info_personal[0]['last_name']."</h1>
													<h2>".$info_personal[0]['position_user']."</h2>
													<h5>Email:".$info_contact[0]['email'] ."</h5>
													<h5>Phone:".$info_contact[0]['phone'] ."</h5>
													<h5>Street:". $info_contact[0]['street'] ."</h5>
													<h5>City:".$info_contact[0]['city'] ."</h5>
													<h5>Website:".$info_contact[0]['website'] ."</h5>
													<h5>Github:".$info_contact[0]['github'] ."</h5>
												</div>
													<img src=".$image[0]['url']." id='img'>
											</div>
									</div>
								</div>
								<div id='bd'>
									<div id='yui-main'>
										<div class='yui-b'>
											<div class='yui-gf'>
												<div class='yui-u first'>
													<h2 class='title'>Profile</h2>
												</div>
												<div class='yui-u'>
													<p class='enlarge'>".
														$info_personal[0]['about_you']."
													</p>
												</div>
											</div>
											<div class='container'>
												<div class='row'>
													<div class='col-sm'>
														<div class='yui-gf'>
															<div class='yui-u first'>
																<h2 class='title'>Skills</h2>
															</div>
															<div class='yui-u'>";
																	foreach ($info_skills as $skill) {
																		$template_one .= "<div class='job'>
																			<h2>Name:".$skill['name'] ."</h2>
																			 <div class='progress'>
														                        <div class='progress-bar progress-bar-primary aos-init aos-animate' data-aos='progress-full' data-aos-offset='10' data-aos-duration='2000' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $skill['level']."%; margin-top: 2%; background-color: #401E33;'>
														                        </div><span class='progress-value'>".$skill['level']."%'</span>
														                      </div>
																		</div>";
																	}
																	$template_one.="
															</div>
														</div>
													</div>
												<div class='col-sm'>	
													<div class='yui-gf'>
													<div class='yui-u first'>
																<h2 class='title'>Hobbies</h2>
														</div>
														<div class='yui-u'>";
																foreach ($info_hobbies as $hobbie) {
																	$template_one.= "<div class='job'>
																			<h2>Hobbie:".$hobbie['name_hobbie'] ."</h2>
																			<h3>URL:".$hobbie['url'] ."</h3>
																	</div>";
																 }
																 $template_one.="
														</div>
													</div>
												</div>
												</div>
											</div>
											<div class='container'>
												<div class='row'>
													<div class='col-sm'>
														<div class='yui-gf'>
															<div class='yui-u first'>
																	<h2 class='title'>Projects</h2>
															</div>
															<div class='yui-u'>";
																	foreach ($info_projects as $project) {
																		$template_one.="<div class='job'>
																				<h2>Name:". $project['name_project'] ."</h2>
																				<h3>Plataform:".$project['plataform'] ."</h3>
																				<h3>Description:".$project['description'] ."</h3>
																				<h3>URL:".$project['url'] ."</h3>
																		</div>";
																	}
																	$template_one.="
															</div>
														</div>
													</div>
													<div class='col-sm'>
														<div class='yui-gf'>
															<div class='yui-u first'>
																	<h2 class='title'>Experience</h2>
															</div>
															<div class='yui-u'>";
																foreach ($info_companys as $exp) {

																	$template_one.="<div class='job'>
																		<h2>Company:". $exp['company_name'] ."</h2>
																		<h3>Position:". $exp['position_company'] ."</h3>
																		<h3>Time period:". $exp['time_period'] ."</h3>
																		<h3>Description:". $exp['description_company'] ."</h3>
																		<h3>Websites:". $exp['website'] ."</h3>
																	</div>";
																} $template_one.="
															</div>
														</div>
													</div>	
												</div>
											</div>
											<div class='container'>
												<div class='row'>
													<div class='col-sm'>
														<div class='yui-gf'>
															<div class='yui-u first'>
																	<h2 class='title'>Contributions</h2>
															</div>
															<div class='yui-u'>";
																foreach ($info_contributions as $cont) {
																	$template_one.="<div class='job'>
																			<h2>Name:".$cont['name_contr'] ."</h2>
																			<h3>Description:".$cont['description'] ."</h3>
																			<h3>URL:". $cont['url'] ."</h3>
																	</div>";
																}$template_one.="
															</div>
														</div>
													</div>
													<div class='col-sm'>
														<div class='yui-gf'>
															<div class='yui-u first'>
																	<h2 class='title'>Education</h2>
															</div>
															<div class='yui-u'>";
																foreach ($info_degrees as $degree) {
																	$template_one.= "<div class='job'>
																			<h2>Degree:".$degree['degree'] ."</h2>
																			<h3>Time period: ".$degree['time_period'] ."</h3>
																			<h3>Description:".$degree['description'] ."</h3>
																			<h3>Website:".$degree['website'] ."</h3>
																	</div>";
																}
															$template_one.="</div>
														</div>
													</div>	
											</div>
											</div>
										</div>
									</div>
								</div>
								<div id='ft'>
										<p>Edson Alvarez O. &mdash; <a >edsonobando18@gmail.com</a> &mdash; (313) - 200-5309</p>
								</div>
							</div>
						</div>
						</div>
					</div>
		</section>";
		return $template_one;
	}
	function getTemplate_Two($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
		$template = '<link type="text/css" rel="stylesheet" href="css/template_two.css" />'.'<div id="btn">
</div>
<div class="all_template">
  <div class="template">
  <div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">    <div id="paper">
        <div class="paper-top"></div>
        <div id="paper-mid">
          <div class="entry">
            <img class="portrait" src="'.$image[0]['url'] .'" styles="width: 10%" alt="John Smith" />
            <div class="self">
              <div class="arrow-right"></div>
              <h1 class="name">'.$info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] .'<br />
                <span>'.$info_personal[0]['position_user'] .'</span></h1>
              <ul>
                <li class="mail">Email:'.$info_contact[0]['email'] .'</li>
                <li class="mail">Phone:'.$info_contact[0]['phone'] .'</li>
                <li class="tel">Phone:'.$info_contact[0]['phone'] .'</li>
                <li class="tel">Street:'.$info_contact[0]['street'] .'</li>
                <li class="tel">City:'.$info_contact[0]['city'] .'</li>
                <li class="web">Website:'.$info_contact[0]['website'] .'</li>
                <li class="web">Github:'.$info_contact[0]['github'] .'</li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <h2>About me:</h2><br>
            <p>'.$info_personal[0]['about_you'] .'</p>
          </div>
          <div class="entry">
            <h2>Experience</h2>
            <div class="content">';
               foreach ($info_companys as $exp) {
                $template .='<h3 id="title_Edu">'.$exp['time_period'] .'</h3>
                <p>'.$exp['company_name'] .'<br />
                <em>'.$exp['position_company'].'</em></p>
                <ul class="info">
                  <li>'.$exp['description_company'] .'</li>
                  <li>'.$exp['company_name'] .'</li>
                  <li>'.$exp['website'] .'</li>
                </ul>';
              }
            $template.='</div>
          </div>
          <div class="entry">
            <h2>Education</h2>
            <div class="content">';
              foreach ($info_degrees as $degree) {
                  $template.='<h3 id="title_Edu">'.$degree['time_period'] .'</h3>
                    <p>Degree:'.$degree['degree'] .'</p>
                    <p>Description:'.$degree['description'] .'</p>
                    <p>Website:'.$degree['website'].'</p>
                    <p>---------------------------------</p>';
              }
            $template.='</div>
          </div>
          <div class="entry">
            <h2>SKILLS</h2>
            <div class="content">';
                foreach ($info_skills as $skill) {
                  $template.='<ul class="skills">
                    <li>Name:'. $skill['name'] .'</li>
                    <li>
                      <div class="progress">

                        <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:'.$skill['level'].'%; margin-top: 2%; background-color: green;">
                        </div><span class="progress-value">'.$skill['level'].'%</span>
                      </div>
                    </li>
                  </ul>';
                	}
            $template.='</div>
          </div>
          <div class="entry">
            <h2>Hobbies</h2>
            <div class="content">';
                foreach ($info_hobbies as $hobbie) {
                 $template.='<ul class="skills">
                    <li>Hobbie:'.$hobbie['name_hobbie'] .'</li>
                    <li>URL:'.$hobbie['url'] .'</li>
                  </ul>';
                }
            $template.='</div>
          </div>
          <div class="entry">
            <h2>Projects</h2>
            	<ul class="works">';
                foreach ($info_projects as $project) {
                         $template.='<p>Name:'. $project['name_project'] .'</p>
                         <p>Plataform:'.$project['plataform'] .'</p>
                         <p>Description:'.$project['description'] .'</p>
                         <p>URL:'.$project['url'] .'</p>
                         <p>---------------------------------------</p>';
                 }
            	$template.='</ul>
          </div>
          <div class="entry">
            <h2>Contributions</h2>
              <ul class="works">';
                foreach ($info_contributions as $cont) {
                        $template.='<p>Name:'.$cont['name_contr'] .'</p>
                         <p>Description:'.$cont['description'].'</p>
                         <p>URL:'.$cont['url'] .'</p>
                         <p>---------------------------------------</p>';
                 }
              $template.='</ul>
          </div>
          </div>
        <div class="clear"></div>
        <div class="paper-bottom"></div>
      </div>
    </div>
    <div class="wrapper-bottom"></div>
  </div>
  </div>
</div>';

		return $template;
	}
 ?>