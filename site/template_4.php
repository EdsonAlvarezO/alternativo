<?php
require_once './shared/header.php';
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
<link rel="stylesheet" type="text/css" href="./css/template_4.css">
<body>
    <div id="page-wrap">
        <img src="Images/ata.jpg" alt="Photo of Cthulu" id="pic" />
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
                <?php echo $info_personal[0]['about_you'] ?>
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
                <h2>Office skills</h2>
                <p>Office and records management, database administration, event organization, customer support, travel coordination</p>
                
                <h2>Computer skills</h2>
                <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2>Doomsday Cult <span>Leader/Overlord - Baton Rogue, LA - 1926-2010</span></h2>
                <ul>
                    <li>Inspired and won highest peasant death competition among servants</li>
                    <li>Helped coordinate managers to grow cult following</li>
                    <li>Provided untimely deaths to all who opposed</li>
                </ul>
                
                <h2>The Watering Hole <span>Bartender/Server - Milwaukee, WI - 2009</span></h2>
                <ul>
                    <li>Worked on grass-roots promotional campaigns</li>
                    <li>Reduced theft and property damage percentages</li>
                    <li>Janitorial work, Laundry</li>
                </ul> 
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd>World Domination, Deep Sea Diving, Murder Most Foul</dd>
            
            <dd class="clear"></dd>
            
            <dt>References</dt>
            <dd>Available on request</dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>

</html>