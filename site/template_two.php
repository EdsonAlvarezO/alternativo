<?php 
require_once './shared/header.php';
require_once  './shared/guard.php';
require_once  './shared/db.php';
include __DIR__ .  '/bd_curri.php';
?>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link type="text/css" rel="stylesheet" href="css/template_two.css" />
<?php
    $id_user = $_SESSION['user_id'];
  $id_curriculum = $_GET['id_curriculum'];
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['createPDF'])) {
                    header("Location: ./pdf.php?id_curriculum=$id_curriculum&template=2");
              }else if(isset($_POST['sendEmail'])){
                    header("Location: ./enviar_correo.php?id_curriculum=$id_curriculum&template=2");
              }else{
                  header("Location: ./template_three.php?id_curriculum=$id_curriculum");
              }
        }
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
<div id="btn">
  <form method="post">
    <div>
      <button id="btn_next" class="btn btn-primary" name="next_temp">Next Template</button>
    </div>
  </form>
</div>
<div class="all_template">
  <div class="template">
  <div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">    <div id="paper">
        <div class="paper-top"></div>
        <div id="paper-mid">
          <div class="entry">
            <img class="portrait" src="<?php echo $image[0]['url'] ?>" alt="John Smith" />
            <div class="self">
              <div class="arrow-right"></div>
              <h1 class="name"><?php echo $info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] ?><br />
                <span><?php echo $info_personal[0]['position_user'] ?></span></h1>
              <ul>
                <li class="mail">Email:<?php echo $info_contact[0]['email'] ?></li>
                <li class="mail">Phone:<?php echo $info_contact[0]['phone'] ?></li>
                <li class="tel">Phone:<?php echo $info_contact[0]['phone'] ?></li>
                <li class="tel">Street:<?php echo $info_contact[0]['street'] ?></li>
                <li class="tel">City:<?php echo $info_contact[0]['city'] ?></li>
                <li class="web">Website:<?php echo $info_contact[0]['website'] ?></li>
                <li class="web">Github:<?php echo $info_contact[0]['github'] ?></li>
              </ul>
            </div>
            <div class="social">
              <ul>
                <li>
                  <div id="btn_pdf">
                    <form method="post">
                        <button id="pdf" class="btn btn-primary" name="createPDF">Download PDF</button>
                        <button id="pdf" class="btn btn-primary" name="sendEmail">SEND EMAIL</button>
                    </form>
                  </div>
                </li>
                <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
                <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="images/icn-contact.jpg" alt="" /></a></li>
                <li><a class='north' href="#" title="Follow me on Twitter"><img src="images/icn-twitter.jpg" alt="" /></a></li>
                <li><a class='north' href="#" title="My Facebook Profile"><img src="images/icn-facebook.jpg" alt="" /></a></li>
              </ul>
            </div>
          </div>
          <div class="entry">
            <h2>About me:</h2><br>
            <p><?php echo $info_personal[0]['about_you'] ?></p>
          </div>
          <div class="entry">
            <h2>Experience</h2>
            <div class="content">
              <?php foreach ($info_companys as $exp) {?>
                <h3 id="title_Edu"> <?php echo $exp['time_period'] ?></h3>
                <p><?php echo $exp['company_name'] ?><br />
                <em><?php echo $exp['position_company'] ?></em></p>
                <ul class="info">
                  <li><?php echo $exp['description_company'] ?></li>
                  <li><?php echo $exp['company_name'] ?></li>
                  <li><?php echo $exp['website'] ?></li>
                </ul>
              <?php } ?>
            </div>
          </div>
          <div class="entry">
            <h2>Education</h2>
            <div class="content">
              <?php foreach ($info_degrees as $degree) {?>
                    <h3 id="title_Edu"><?php echo $degree['time_period'] ?></h3>
                    <p>Degree: <?php echo $degree['degree'] ?></p>
                    <p>Description: <?php echo $degree['description'] ?></p>
                    <p>Website: <?php echo $degree['website'] ?></p>
                    <p>---------------------------------</p>
              <?php } ?>
            </div>
          </div>
          <div class="entry">
            <h2>SKILLS</h2>
            <div class="content">
                <?php foreach ($info_skills as $skill) {?>
                  <ul class="skills">
                    <li>Name:<?php echo $skill['name'] ?></li>
                    <li>
                      <div class="progress">

                        <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['level'] ?>%; margin-top: 2%; background-color: green;">
                        </div><span class="progress-value"><?php echo $skill['level'] ?>%</span>
                      </div>
                    </li>
                  </ul>
                <?php } ?>
            </div>
          </div>
          <div class="entry">
            <h2>Hobbies</h2>
            <div class="content">
                <?php foreach ($info_hobbies as $hobbie) {?>
                  <ul class="skills">
                    <li>Hobbie:<?php echo $hobbie['name_hobbie'] ?></li>
                    <li>URL:<?php echo $hobbie['url'] ?></li>
                  </ul>
                <?php } ?>
            </div>
          </div>
          <div class="entry">
            <h2>Projects</h2>
            	<ul class="works">
                <?php foreach ($info_projects as $project) {?>
                         <p>Name: <?php echo $project['name_project'] ?></p>
                         <p>Plataform: <?php echo $project['plataform'] ?></p>
                         <p>Description: <?php echo $project['description'] ?></p>
                         <p>URL: <?php echo $project['url'] ?></p>
                         <p>---------------------------------------</p>
                 <?php } ?>
            	</ul>
          </div>
          <div class="entry">
            <h2>Contributions</h2>
              <ul class="works">
                <?php foreach ($info_contributions as $cont) {?>
                         <p>Name: <?php echo $cont['name_contr'] ?></p>
                         <p>Description: <?php echo $cont['description'] ?></p>
                         <p>URL: <?php echo $cont['url'] ?></p>
                         <p>---------------------------------------</p>
                 <?php } ?>
              </ul>
          </div>
          </div>
        <div class="clear"></div>
        <div class="paper-bottom"></div>
      </div>
    </div>
    <div class="wrapper-bottom"></div>
  </div>
  <div id="message"><a href="#top" id="top-link">Go to Top</a></div>
  </div>
</div>