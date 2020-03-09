<?php
require_once './shared/header.php';
require_once  './shared/guard.php';
require_once  './shared/db.php';
include __DIR__ .  '/bd_curri.php';
?>
<link rel="stylesheet" type="text/css" href="./css/template_one.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['createPDF'])) {
				header("Location: ./pdf.php?id_curriculum=$id_curriculum&template=1");
			}else if(isset($_POST['sendEmail'])){
				header("Location: ./enviar_correo.php?id_curriculum=$id_curriculum&template=1");
			}else{
				header("Location: ./template_two.php?id_curriculum=$id_curriculum");
		}
	}
?>
<div id="btn">
  <form method="post">
    <div>
      <button id="btn_next" class="btn btn-primary" name="next_temp">Next Template</button>
    </div>
  </form>
</div>
<section class="section">
			<div class="all_template">
				<div class="almacen_teamplate">
					<div id="doc2" class="yui-t7">
						<div id="inner">
						<div id="btn_pdf">
							<form method="post">
									<button id="pdf" class="btn btn-success" name="createPDF">Download PDF</button>
									<button id="pdf" class="btn btn-success" name="sendEmail">SEND EMAIL</button>
							</form>
						</div>
						<div id="hd">
							<div class="yui-gc">
								<div class="yui-u first">
									</div>
									<div id="myimage">
										<div class="position">
											<h1><?php echo $info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] ?></h1>
											<h2><?php echo $info_personal[0]['position_user'] ?></h2>
											<h5>Email:<?php echo $info_contact[0]['email'] ?></h5>
											<h5>Phone:<?php echo $info_contact[0]['phone'] ?></h5>
											<h5>Street:<?php echo $info_contact[0]['street'] ?></h5>
											<h5>City:<?php echo $info_contact[0]['city'] ?></h5>
											<h5>Website:<?php echo $info_contact[0]['website'] ?></h5>
											<h5>Github:<?php echo $info_contact[0]['github'] ?></h5>
										</div>
											<img src="<?php echo $image[0]['url'] ?>" id="img">
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
											<p class="enlarge">
												<?php echo $info_personal[0]['about_you'] ?>
											</p>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-sm">
												<div class="yui-gf">
													<div class="yui-u first">
														<h2 class="title">Skills</h2>
													</div>
													<div class="yui-u">
															<?php foreach ($info_skills as $skill) {?>
																<div class="job">
																	<h2>Name: <?php echo $skill['name'] ?></h2>
																	 <div class="progress">
												                        <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['level'] ?>%; margin-top: 2%; background-color: #401E33;">
												                        </div><span class="progress-value"><?php echo $skill['level'] ?>%</span>
												                      </div>
																</div>
															<?php } ?>
													</div>
												</div>
											</div>
										<div class="col-sm">	
											<div class="yui-gf">
											<div class="yui-u first">
														<h2 class="title">Hobbies</h2>
												</div>
												<div class="yui-u">
														<?php foreach ($info_hobbies as $hobbie) {?>
															<div class="job">
																	<h2>Hobbie: <?php echo $hobbie['name_hobbie'] ?></h2>
																	<h3>URL: <?php echo $hobbie['url'] ?></h3>
															</div>
														<?php } ?>
												</div>
											</div>
										</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-sm">
												<div class="yui-gf">
													<div class="yui-u first">
															<h2 class="title">Projects</h2>
													</div>
													<div class="yui-u">
															<?php foreach ($info_projects as $project) {?>
																<div class="job">
																		<h2>Name: <?php echo $project['name_project'] ?></h2>
																		<h3>Plataform: <?php echo $project['plataform'] ?></h3>
																		<h3>Description: <?php echo $project['description'] ?></h3>
																		<h3>URL: <?php echo $project['url'] ?></h3>
																</div>
															<?php } ?>
													</div>
												</div>
											</div>
											<div class="col-sm">
												<div class="yui-gf">
													<div class="yui-u first">
															<h2 class="title">Experience</h2>
													</div>
													<div class="yui-u">
														<?php foreach ($info_companys as $exp) {?>
															<div class="job">
																<h2>Company: <?php echo $exp['company_name'] ?></h2>
																<h3>Position: <?php echo $exp['position_company'] ?></h3>
																<h3>Time period: <?php echo $exp['time_period'] ?></h3>
																<h3>Description: <?php echo $exp['description_company'] ?></h3>
																<h3>Websites: <?php echo $exp['website'] ?></h3>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>	
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-sm">
												<div class="yui-gf">
													<div class="yui-u first">
															<h2 class="title">Contributions</h2>
													</div>
													<div class="yui-u">
														<?php foreach ($info_contributions as $cont) {?>
															<div class="job">
																	<h2>Name: <?php echo $cont['name_contr'] ?></h2>
																	<h3>Description: <?php echo $cont['description'] ?></h3>
																	<h3>URL: <?php echo $cont['url'] ?></h3>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>
											<div class="col-sm">
												<div class="yui-gf">
													<div class="yui-u first">
															<h2 class="title">Education</h2>
													</div>
													<div class="yui-u">
														<?php foreach ($info_degrees as $degree) {?>
															<div class="job">
																	<h2>Degree: <?php echo $degree['degree'] ?></h2>
																	<h3>Time period: <?php echo $degree['time_period'] ?></h3>
																	<h3>Description: <?php echo $degree['description'] ?></h3>
																	<h3>Website: <?php echo $degree['website'] ?></h3>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>	
									</div>
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
</section>
