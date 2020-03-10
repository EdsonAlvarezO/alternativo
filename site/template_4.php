<?php
require_once  './shared/header.php';
require_once  './shared/guard.php';
require_once  './shared/db.php';
?>
<?php
       $id_user = $_SESSION['user_id'];
       $id_curriculum = $_GET['id_curriculum'];
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['createPDF'])) {
                                        header("Location: ./pdf.php?id_curriculum=$id_curriculum&template=4");
                            }else if(isset($_POST['sendEmail'])){
                                        header("Location: ./enviar_correo.php?id_curriculum=$id_curriculum&template=4");
                            }else if(isset($_POST['next_temp'])){
                                header("Location: ./template_five.php?id_curriculum=$id_curriculum");
                              }else{
                                header("Location: ./template_three.php?id_curriculum=$id_curriculum");
                              }                }
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
<link rel="stylesheet" type="text/css" href="./css/template_4.css">
<form method="post" id="btn">
    <div id="all_but">
      <button id="btn_nexts" class="btn btn-primary" name="pre_temp">Previous Template</button>
    </div>
    <div id="all_but">
      <button id="pre_tem" class="btn btn-primary" name="next_temp">Next template</button>
    </div>
  </form>
<body>
    <div id="page-wrap">
        <img id="pic" alt="Photo of Cthulu"  src="<?php echo $image[0]['url'] ?>"/>
        <div id="btn_pdf">
            <form method="post">
                <button id="pdf" class="btn btn-success" name="createPDF">Download PDF</button>
                <button id="pdf" class="btn btn-success" name="sendEmail">SEND EMAIL</button>
            </form>
        </div>
        <div id="contact-info" class="vcard">
            <h1 class="fn"><?php echo $info_personal[0]['name_user']." ".$info_personal[0]['middle_name']." ".$info_personal[0]['last_name'] ?></h1>
            <p>
                Position: <span class="tel"><?php echo $info_personal[0]['position_user'] ?></span><br />
                Email: <span class="email"><?php echo $info_personal[0]['position_user'] ?></span><br>
                Phone: <span class="tel"><?php echo $info_contact[0]['phone'] ?></span><br/>
                Street: <span class="email" ><?php echo $info_contact[0]['street'] ?></span><br>
                City: <span class="tel"><?php echo $info_contact[0]['city'] ?></span><br />
                Website: <span class="email"><?php echo $info_contact[0]['website'] ?></span><br>
                Github: <span class="email"><?php echo $info_contact[0]['github'] ?></span>
            </p>
        </div> 
        <div id="objective">
            <p>
                About me:<?php echo $info_personal[0]['about_you'] ?>
            </p>
        </div>
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                <?php foreach ($info_degrees as $degree) {?>
                     <h2>Degree: <?php echo $degree['degree'] ?></h2>
                     <hp>Time period: <?php echo $degree['time_period'] ?></p>
                     <hp>Description: <?php echo $degree['description'] ?></p>
                     <hp>Website: <?php echo $degree['website'] ?></p>
                     <p>---------------------------------------------------</p>
                <?php } ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>    
                <?php foreach ($info_skills as $skill) {?>
                <div class="progress-container progress-primary"><span class="progress-badge"><?php echo $skill['name'] ?></span>
                     <div class="progress">
                            <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['level'] ?>%;">
                            </div><span class="progress-value"><?php echo $skill['level'] ?>%</span>
                    </div>
                </div>
              <?php } ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <?php foreach ($info_companys as $exp) {?>
                    <h2><?php echo $exp['company_name'] ?><span><?php echo $exp['time_period'] ?></span></h2>
                    <ul>
                    <li><?php echo $exp['position_company'] ?></li>
                    <li><?php echo $exp['website'] ?></li>
                </ul>
                 <?php } ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd>
             <?php foreach ($info_hobbies as $hobbie) {?>
                 <ul>
                    <li><?php echo $hobbie['name_hobbie'] ?></li>
                    <li><?php echo $hobbie['url'] ?></li>
                </ul>
            <?php } ?>
            </dd>
            <dd class="clear"></dd>
            <dt>Contributions</dt>
            <dd>
                 <?php foreach ($info_contributions as $cont) {?>
                    <h2><?php echo $cont['name_contr'] ?><span><?php echo $degree['time_period'] ?></span></h2>
                    <ul>
                        <li class="h5"><?php echo $degree['description'] ?></li>
                        <li><?php echo $degree['website'] ?></li>
                    </ul>
             <?php } ?>
            </dd>
            
            <dd class="clear"></dd>

            <dt>Projects</dt>
            <dd>
                <?php foreach ($info_projects as $project) {?>
                <h2><?php echo $project['name_project'] ?></h2>
                <ul>
                  <li class="h5"><?php echo $project['plataform'] ?></li>
                  <li>Description: <?php echo $project['description'] ?></li>
                  <li href="<?php echo $project['url'] ?>">URL: <?php echo $project['url'] ?></li>
                </ul>
        <?php } ?>
            </dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>