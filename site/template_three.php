<?php 
require_once  './shared/header.php';
require_once  './shared/guard.php';
require_once  './shared/db.php';
?>
<?php
    $id_user = $_SESSION['user_id'];
    $id_curriculum = $_GET['id_curriculum'];
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['pdf'])) {
                    header("Location: ./pdf.php?id_curriculum=$id_curriculum&template=3");
              }else if(isset($_POST['sendMail'])){
                    header("Location: ./enviar_correo.php?id_curriculum=$id_curriculum&template=3");
              }else if(isset($_POST['next_temp'])){
                header("Location: ./template_4.php?id_curriculum=$id_curriculum");
              }else{
                header("Location: ./template_two.php?id_curriculum=$id_curriculum");
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
<link href="css/template_three.css" rel="stylesheet">
  <form method="post" id="btn">
    <div id="all_but">
      <button id="btn_next" class="btn btn-primary" name="pre_temp">Previous Template</button>
    </div>
    <div id="all_but">
      <button id="pre_tem" class="btn btn-primary" name="next_temp">Next template</button>
    </div>
  </form>
  <body id="top">
    <div class="page-content">
 <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
       <div id="miimagen">
            <div class="cc-profile-image"><a href="#"><img src="<?php echo $image[0]['url'] ?>" id="img"></a></div>
          </div>
      <div class="page-header-image" data-parallax="true"></div>
      <div class="container">
        <div class="content-center">
          
          <div class="h2 title"><?php echo $info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] ?></div>
          <p class="category text-white"><h2 id="position"><?php echo $info_personal[0]['position_user'] ?></h2>
          </p>
          <form method="post">
            <button class="btn btn-primary smooth-scroll mr-2" name="sendMail" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Send Mail</button>
            <button class="btn btn-primary" data-aos="zoom-in" name="pdf" data-aos-anchor="data-aos-anchor">Download PDF</button>
          </form>
          <div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p><?php echo $info_personal[0]['about_you'] ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['email'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['phone'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Street:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['street'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Ciry:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['city'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Website:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['website'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">GitHub:</strong></div>
              <div class="col-sm-8"><?php echo $info_contact[0]['github'] ?></div>
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
          <div class="col-md-6">
            <?php foreach ($info_skills as $skill) {?>
              <div class="progress-container progress-primary"><span class="progress-badge"><?php echo $skill['name'] ?></span>
                 <div class="progress">
                        <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['level'] ?>%;">
                        </div><span class="progress-value"><?php echo $skill['level'] ?>%</span>
                      </div>
              </div>
              <?php } ?>
        </div>
    </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
   
        <?php foreach ($info_companys as $exp) {?>
           <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p><?php echo $exp['time_period'] ?></p>
                  <div class="h5"><?php echo $exp['company_name'] ?></div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5"><?php echo $exp['position_company'] ?></div>
                  <p><?php echo $exp['description_company'] ?></p>
                   <p>Websites: <?php echo $exp['website'] ?></p>
                </div>
              </div>
             </div>
            </div>
        <?php } ?>
  </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Projects</div>
   
        <?php foreach ($info_projects as $project) {?>
           <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <div class="h5"><?php echo $project['name_project'] ?></div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5"><?php echo $project['plataform'] ?></div>
                  <p>Description: <?php echo $project['description'] ?></p>
                  <a href="<?php echo $project['url'] ?>">URL: <?php echo $project['url'] ?></a>
                </div>
              </div>
             </div>
            </div>
        <?php } ?>
  </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Hobbies</div>
   
        <?php foreach ($info_hobbies as $hobbie) {?>
           <div class="card">
            <div class="row">
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Hobbie: <?php echo $hobbie['name_hobbie'] ?></div>
                  <p>URL: <?php echo $hobbie['url'] ?></p>
                </div>
              </div>
             </div>
            </div>
        <?php } ?>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <?php foreach ($info_degrees as $degree) {?>
            <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p><?php echo $degree['time_period'] ?></p>
                  <div class="h5"><?php echo $degree['degree'] ?></div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <p >Description:<?php echo $degree['description'] ?></p>
                  <p><?php echo $degree['website'] ?></p>
                </div>
              </div>
            </div>
            </div>
    <?php } ?>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Contributions</div>
    <?php foreach ($info_contributions as $cont) {?>
            <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p><?php echo $degree['time_period'] ?></p>
                  <div class="h5"><?php echo $cont['name_contr'] ?></div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5"><?php echo $degree['description'] ?></div>
                  <p><?php echo $degree['website'] ?></p>
                </div>
              </div>
            </div>
            </div>
    <?php } ?>
  </div>
</div>
</div>
    </div>
</body>