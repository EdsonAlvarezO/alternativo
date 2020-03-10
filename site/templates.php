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
													<h1>".$info_personal[0]['name_user'].' '.$info_personal[0]['middle_name'].' '.$info_personal[0]['last_name']."</h1>
													<img src=".$image[0]['url']." id='img'>
													<h2>".$info_personal[0]['position_user']."</h2>
													<h5>Email:".$info_contact[0]['email'] ."</h5>
													<h5>Phone:".$info_contact[0]['phone'] ."</h5>
													<h5>Street:". $info_contact[0]['street'] ."</h5>
													<h5>City:".$info_contact[0]['city'] ."</h5>
													<h5>Website:".$info_contact[0]['website'] ."</h5>
													<h5>Github:".$info_contact[0]['github'] ."</h5>
												</div>
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
		$template = '
  <div class="template">
  <div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">    <div id="paper">
        <div class="paper-top"></div>
        <div id="paper-mid">
          <div class="entry">
            
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
          <img id="image_pro" src="'.$image[0]['url'] .'"alt="John Smith" />
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
  </div>';

		return $template;
	}

	function getTemplate_three($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
		$template = '
<body id="top">
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="'.$image[0]['url'].'" id="img"></a></div>
          <div class="h2 title">'.$info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] .'</div>
          <p class="category text-white"><h2>'.$info_personal[0]['position_user'] .'</h2>
          </p>
        </div>
        <div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>'.$info_personal[0]['about_you'] .'</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">'.$info_contact[0]['email'] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">'. $info_contact[0]['phone'] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Street:</strong></div>
              <div class="col-sm-8">'.$info_contact[0]['street'] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Ciry:</strong></div>
              <div class="col-sm-8">'.$info_contact[0]['city'] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Website:</strong></div>
              <div class="col-sm-8">'.$info_contact[0]['website'] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">GitHub:</strong></div>
              <div class="col-sm-8">'.$info_contact[0]['github'] .'</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-2 title">Professional Skills</div>
      <div class="card-body">
          <div class="col-md-6">';
            foreach ($info_skills as $skill) {
              $template.='<div class="progress-container progress-primary"><span class="progress-badge">'.$skill['name'] .'</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:'. $skill['level'] .'%; margin-top: 2%; background-color: #401E33;"></div><span class="progress-value">'. $skill['level'] .'%</span>
                </div>
              </div>';
              }
        $template.='</div>
    </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>';
        foreach ($info_companys as $exp) {
          $template.='<div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>'.$exp['time_period'] .'</p>
                  <div class="h5">'.$exp['company_name'] .'</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">'.$exp['position_company'] .'</div>
                  <p>'.$exp['description_company'] .'</p>
                   <p>Websites: '.$exp['website'].'</p>
                </div>
              </div>
             </div>
            </div>';
        }
  $template.='</div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Projects</div>';
        foreach ($info_projects as $project) {
           $template.='<div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <div class="h5">'.$project['name_project'] .'</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">'.$project['plataform'] .'</div>
                  <p>Description: '.$project['description'] .'</p>
                  <a href="'.$project['url'] .'">URL:'.$project['url'] .'</a>
                </div>
              </div>
             </div>
            </div>';
        }
  $template.='</div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Hobbies</div>';
        foreach ($info_hobbies as $hobbie) {
           $template.='<div class="card">
            <div class="row">
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Hobbie:'.$hobbie['name_hobbie'] .'</div>
                  <p>URL:'.$hobbie['url'] .'</p>
                </div>
              </div>
             </div>
            </div>';
        }
  $template.='</div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>';
    foreach ($info_degrees as $degree) {
            $template.='<div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>'.$degree['time_period'] .'</p>
                  <div class="h5">'.$degree['degree'].'</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Description'.$degree['description'] .'</div>
                  <p>'.$degree['website'] .'</p>
                </div>
              </div>
            </div>
            </div>';
    }
  $template.='</div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Contributions</div>';
    foreach ($info_contributions as $cont) {
            $template.='<div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>'.$degree['time_period'] .'</p>
                  <div class="h5">'.$cont['name_contr'] .'</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <p >Description:'.$cont['description'] .'</p>
                  <p>'.$degree['website'] .'</p>
                </div>
              </div>
            </div>
            </div>';
    }
  $template.='</div>
</div>
</div>
    </div>';
    return $template;
	}
  function getTemplate_Four($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
    $template = '<head>
    <link rel="stylesheet" type="text/css" href="./css/template_4.css">
    </head>
    <body id="top">
                  <div class="page-content">
               <div>
              <div class="profile-page">
                <div class="wrapper">
                  <div class="page-header page-header-small" filter-color="green">
                    <div class="page-header-image" data-parallax="true"></div>
                    <div class="container">
                      <div class="content-center">
                        <div class="cc-profile-image"><a href="#"><img src="'.$image[0]['url'] .'" id="img"></a></div>
                        <div class="h2 title">'.$info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] .'</div>
                        <p class="category text-white"><h2 id="position">'.$info_personal[0]['position_user'] .'</h2>
                        </p>
                        <div class="section" id="about">
                <div class="container">
                  <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="card-body">
                          <div class="h4 mt-0 title">About</div>
                          <p>'.$info_personal[0]['about_you'] .'</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="card-body">
                          <div class="h4 mt-0 title">Basic Information</div>
                          <div class="row">
                            <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['email'] .'</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['phone'] .'</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Street:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['street'] .'</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Ciry:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['city'] .'</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Website:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['website'] .'</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">GitHub:</strong></div>
                            <div class="col-sm-8">'.$info_contact[0]['github'] .'</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                      </div>
                    </div>
                    </div>

                  </div>

                </div>

              </div>

              <div class="section" id="skill">
                <div class="container">
                  <div class="h4 text-center mb-2 title">Professional Skills</div>
                    <div class="card-body">
                        <div class="col-md-6">';
                          foreach ($info_skills as $skill) {
                            $template.='<div class="progress-container progress-primary"><span class="progress-badge">'.$skill['name'] .'</span>
                               <div class="progress">
                                      <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:'. $skill['level'] .'%;">
                                      </div><span class="progress-value">'.$skill['level'] .'%</span>
                                    </div>
                            </div>';
                            }
                     $template.='</div>
                  </div>
              </div>
              <div class="section" id="experience">
                <div class="container cc-experience">
                  <div class="h4 text-center mb-4 title">Work Experience</div>';
                      foreach ($info_companys as $exp) {
                        $template.=' <div class="card">
                          <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body cc-experience-header">
                                <p>'.$exp['time_period'] .'</p>
                                <div class="h5">'.$exp['company_name'] .'</div>
                              </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body">
                                <div class="h5">'.$exp['position_company'] .'</div>
                                <p>'.$exp['description_company'] .'</p>
                                 <p>Websites:'.$exp['website'] .'</p>
                              </div>
                            </div>
                           </div>
                          </div>';
                      }
                $template.='</div>
              </div>
              <div class="section" id="experience">
                <div class="container cc-experience">
                  <div class="h4 text-center mb-4 title">Projects</div>';
                      foreach ($info_projects as $project) {
                      $template.=' <div class="card">
                          <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body cc-experience-header">
                                <div class="h5">'.$project['name_project'] .'</div>
                              </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body">
                                <div class="h5">'.$project['plataform'] .'</div>
                                <p>Description:'.$project['description'] .'</p>
                                <a href="'.$project['url'] .'">URL: '.$project['url'] .'</a>
                              </div>
                            </div>
                           </div>
                          </div>';
                      }
                $template.='</div>
              </div>
              <div class="section" id="experience">
                <div class="container cc-experience">
                  <div class="h4 text-center mb-4 title">Hobbies</div>';
                 
                      foreach ($info_hobbies as $hobbie) {
                        $template.=' <div class="card">
                          <div class="row">
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body">
                                <div class="h5">Hobbie:'.$hobbie['name_hobbie'] .'</div>
                                <p>URL:'.$hobbie['url'] .'</p>
                              </div>
                            </div>
                           </div>
                          </div>';
                      }
                $template.='</div>
              </div>
              <div class="section">
                <div class="container cc-education">
                  <div class="h4 text-center mb-4 title">Education</div>';
                  foreach ($info_degrees as $degree) {
                          $template.='<div class="card">
                          <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body cc-education-header">
                                <p>'.$degree['time_period'] .'</p>
                                <div class="h5">'.$degree['degree'] .'</div>
                              </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body">
                                <p >Description:'.$degree['description'] .'</p>
                                <p>'.$degree['website'] .'</p>
                              </div>
                            </div>
                          </div>
                          </div>';
                  }
                $template.='</div>
              </div>
              <div class="section">
                <div class="container cc-education">
                  <div class="h4 text-center mb-4 title">Contributions</div>';
                  foreach ($info_contributions as $cont) {
                        $template.='<div class="card">
                          <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body cc-education-header">
                                <p>'.$degree['time_period'] .'</p>
                                <div class="h5">'.$cont['name_contr'] .'</div>
                              </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                              <div class="card-body">
                                <div class="h5">'.$degree['description'] .'</div>
                                <p>'.$degree['website'] .'</p>
                              </div>
                            </div>
                          </div>
                          </div>';
                  } 
                $template.='</div>
              </div>
              </div>
                  </div>
              </body>';
      return $template;
  }
  function getTemplate_Five($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
    $template_one = "<section class='section'>
          <div class='all_template'>
            <div class='almacen_teamplate' style='display: flex;'>
              <div id='doc2' class='yui-t7'>
                <div id='inner'>
                <div id='hd' style='display:flex;'>
                  <div class='yui-gc'>
                  <img src=".$image[0]['url']." id='img'>
                      <div id='myimage'>
                        <div class='position'>
                          <h1 id='name'>".$info_personal[0]['name_user'].' '.$info_personal[0]['middle_name'].' '.$info_personal[0]['last_name']."</h1>
                          
                          <h2 id='my_position'> ".$info_personal[0]['position_user']."</h2>
                          <h5>Email:".$info_contact[0]['email'] ."</h5>
                          <h5>Phone:".$info_contact[0]['phone'] ."</h5>
                          <h5>Street:". $info_contact[0]['street'] ."</h5>
                          <h5>City:".$info_contact[0]['city'] ."</h5>
                          <h5>Website:".$info_contact[0]['website'] ."</h5>
                          <h5>Github:".$info_contact[0]['github'] ."</h5>
                        </div>
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
                                                    <div class='progress-bar progress-bar-primary aos-init aos-animate' data-aos='progress-full' data-aos-offset='10' data-aos-duration='2000' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $skill['level']."%; margin-top: 2%; background-color: green;'>
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
function getTemplate_Six($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
  $template='<section class="section">
                <div class="all_template">
                  <div class="almacen_teamplate">
                    <div id="doc2" class="yui-t7">
                      <div id="inner">
                      <div id="hd">
                        <div class="yui-gc">
                          <div class="yui-u first">
                            </div>
                            <div id="myimage">
                              <div class="position">
                                <h1 id="name">'.$info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] .'</h1>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div id="bd">
                        <div id="yui-main">
                          <div class="yui-b">
                            <div class="yui-gf">
                              <div class="yui-u first">
                                <h2 class="title">Profile</h2>
                              </div>
                              <div class="yui-u">
                                <p class="enlarge">'.$info_personal[0]['about_you'] .'
                                <h2 id="my_position">'.$info_personal[0]['position_user'] .'</h2>
                                <h5>Email:'.$info_contact[0]['email'] .'</h5>
                                <h5>Phone:'.$info_contact[0]['phone'] .'</h5>
                                <h5>Street:'.$info_contact[0]['street'] .'</h5>
                                <h5>City:'.$info_contact[0]['city'] .'</h5>
                                <h5>Website:'.$info_contact[0]['website'] .'</h5>
                                <h5>Github:'.$info_contact[0]['github'] .'</h5>
                                </p>
                              </div>
                            </div>
                            <div class="yui-gf">
                                    <div class="yui-u first">
                                      <h2 class="title">Skills</h2>
                                    </div>
                                    <div class="yui-u">';
                                        foreach ($info_skills as $skill) {
                                          $template.='<div class="job">
                                            <h2>Name: '.$skill['name'] .'</h2>
                                             <div class="progress">
                                                          <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:'.$skill['level'] .'%; margin-top: 2%; background-color: #66A7BD;">
                                                          </div><span class="progress-value">'.$skill['level'] .'%</span>
                                                        </div>
                                          </div>';
                                        } 
                                    $template.='</div>
                            </div>  
                            <div class="yui-gf">
                              <div class="yui-u first">
                              <h2 class="title">Hobbies</h2>
                              </div>
                              <div class="yui-u">';
                                foreach ($info_hobbies as $hobbie) {
                                  $template.='<div class="job">
                                    <h2>Hobbie:'.$hobbie['name_hobbie'] .'</h2>
                                      <h3>URL:'. $hobbie['url'] .'</h3>
                                  </div>';
                                }
                             $template.='</div>
                            </div>
                                  <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2 class="title">Projects</h2>
                                    </div>
                                    <div class="yui-u">';
                                        foreach ($info_projects as $project) {
                                          $template.='<div class="job">
                                              <h2>Name:'.$project['name_project'] .'</h2>
                                              <h3>Plataform: '. $project['plataform'] .'</h3>
                                              <h3>Description:'. $project['description'] .'</h3>
                                              <h3>URL: '. $project['url'] .'</h3>
                                          </div>';
                                        } 
                                    $template.='</div>
                                  </div>
                                  <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2 class="title">Experience</h2>
                                    </div>
                                    <div class="yui-u">';
                                      foreach ($info_companys as $exp) {
                                        $template.='<div class="job">
                                          <h2>Company: '.$exp['company_name'] .'</h2>
                                          <h3>Position: '. $exp['position_company'] .'</h3>
                                          <h3>Time period:'. $exp['time_period'] .'</h3>
                                          <h3>Description:'.$exp['description_company'] .'</h3>
                                          <h3>Websites:'.$exp['website'] .'</h3>
                                        </div>';
                                      }
                                    $template.='</div>
                                  </div>
                                  <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2 class="title">Contributions</h2>
                                    </div>
                                    <div class="yui-u">';
                                      foreach ($info_contributions as $cont) {
                                        $template.='<div class="job">
                                            <h2>Name:'.$cont['name_contr'] .'</h2>
                                            <h3>Description: '. $cont['description'] .'</h3>
                                            <h3>URL: '.$cont['url'] .'</h3>
                                        </div>';
                                      }
                                    $template.='</div>
                                  </div>
                                  <div class="yui-gf">
                                    <div class="yui-u first">
                                        <h2 class="title">Education</h2>
                                    </div>
                                    <div class="yui-u">';
                                      foreach ($info_degrees as $degree) {
                                        $template.='<div class="job">
                                            <h2>Degree:'.$degree['degree'] .'</h2>
                                            <h3>Time period: '. $degree['time_period'] .'</h3>
                                            <h3>Description:'. $degree['description'] .'</h3>
                                            <h3>Website:'.$degree['website'] .'</h3>
                                        </div>';
                                      }
                                    $template.='</div>
                                  </div>
                          </div>
                        </div>
                      </div>
                      <div id="ft">
                          <p>Edson Alvarez O. &mdash; <a >edsonobando18@gmail.com</a> &mdash; (313) - 200-5309</p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
          </section>';
          return $template;
}
function getTemplate_Seven($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
    $template_one = "<section class='section'>
          <div class='all_template'>
            <div class='almacen_teamplate' style='display: flex;'>
              <div id='doc2' class='yui-t7'>
                <div id='inner'>
                <div id='hd' style='display:flex;'>
                  <div class='yui-gc'>
                      <div id='myimage'>
                        <div class='position'>
                          <h1 id='name'>".$info_personal[0]['name_user'].' '.$info_personal[0]['middle_name'].' '.$info_personal[0]['last_name']."</h1>
                          
                          <h2 id='my_position'> ".$info_personal[0]['position_user']."</h2>
                          <h5>Email:".$info_contact[0]['email'] ."</h5>
                          <h5>Phone:".$info_contact[0]['phone'] ."</h5>
                          <h5>Street:". $info_contact[0]['street'] ."</h5>
                          <h5>City:".$info_contact[0]['city'] ."</h5>
                          <h5>Website:".$info_contact[0]['website'] ."</h5>
                          <h5>Github:".$info_contact[0]['github'] ."</h5>
                        </div>
                      </div>
                      <img src=".$image[0]['url']." id='img'>
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
                                                    <div class='progress-bar progress-bar-primary aos-init aos-animate' data-aos='progress-full' data-aos-offset='10' data-aos-duration='2000' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='  height: 15px; width:". $skill['level']."%; margin-top: 2%; background-color: green;'>
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
  function getTemplate_Eight($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects){
    $template_one = "<section class='section'>
          <div class='all_template'>
            <div class='almacen_teamplate' style='display: flex;'>
              <div id='doc2' class='yui-t7'>
                <div id='inner'>
                <div id='hd' style='display:flex;'>
                  <div class='yui-gc'>
                      <div id='myimage'>
                        <div class='position'>
                          <h1 id='name'>".$info_personal[0]['name_user'].' '.$info_personal[0]['middle_name'].' '.$info_personal[0]['last_name']."</h1>
                          
                          <h2 id='my_position'> ".$info_personal[0]['position_user']."</h2>
                          <h5>Email:".$info_contact[0]['email'] ."</h5>
                          <h5>Phone:".$info_contact[0]['phone'] ."</h5>
                          <h5>Street:". $info_contact[0]['street'] ."</h5>
                          <h5>City:".$info_contact[0]['city'] ."</h5>
                          <h5>Website:".$info_contact[0]['website'] ."</h5>
                          <h5>Github:".$info_contact[0]['github'] ."</h5>
                        </div>
                      </div>
                      <img src=".$image[0]['url']." id='img'>
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
                                                    <div class='progress-bar progress-bar-primary aos-init aos-animate' data-aos='progress-full' data-aos-offset='10' data-aos-duration='2000' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='  height: 15px; width:". $skill['level']."%; margin-top: 2%; background-color: green;'>
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
 ?>