<?php
require_once  './shared/header.php';
require_once  './shared/guard.php';
require_once  './shared/db.php';
?>
<link rel="stylesheet" type="text/css" href="./css/template_one.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php 
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
	var_dump($image);
 ?>
<div class="all_template">
<div class="almacen_teamplate">
<div id="doc2" class="yui-t7">
	<div id="inner">
		<div id="btn_pdf">
			<h3><a id="pdf" href="#">Download PDF</a></h3>
			<h3><a id="pdf" href="#">SEND EMAIL</a></h3>
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
				<div class="yui-u">
					<div class="contact-info">
						
					</div>
				</div>
			</div>
		</div>
		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Web Design</h2>
									<p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
								</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>XHTML</li>
								<li>CSS</li>
								<li class="last">Javascript</li>
							</ul>

							<ul class="talent">
								<li>Jquery</li>
								<li>PHP</li>
								<li class="last">CVS / Subversion</li>
							</ul>

							<ul class="talent">
								<li>OS X</li>
								<li>Windows XP/Vista</li>
								<li class="last">Linux</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>Facebook</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
								<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
							</div>

							<div class="job">
								<h2>Apple Inc.</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
								<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
							</div>

							<div class="job">
								<h2>Microsoft</h2>
								<h3>Principal and Creative Lead</h3>
								<h4>2004-2005</h4>
								<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
							</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
								<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>Indiana University - Bloomington, Indiana</h2>
							<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
</div>
</div>