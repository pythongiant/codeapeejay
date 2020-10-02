<!DOCTYPE html>
<html>
<head>
<title>CODE 2019 | Register | Apeejay School NOIDA</title>
<meta name="description" content="Code is an annual IT symposium hosted by Apeejay School, Noida. Ever since our founding in 1999 we have retained the position of Delhi-NCR's most awaited IT symposium. With over 50 schools from across Delhi-NCR, we make it bigger and better each year. ">
<meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
<meta charset="utf-8">
<meta name="theme-color" content="#040a14">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel= "stylesheet" href="styles/style.css"/>
<script src="scripts/script.js"></script>
<style>
html,body{
    background-color: black;
}
header{
    position: sticky;
    top:0;
}
h2{
  color:#eee;
  margin:50px 0 50px 0;
}
</style>
</head>
<body>
     <header >
    <div class="container" id="navbar">
      <div class="header-top">
        <div class="header-flex"> 
          <a href="index.php"><img src="assets/translogo1.png" alt="height:100px; width:100px;"></a>
        <a href="#header">  <h1 class="showCode">CODE</h1></a>
          <style></style>
          <button class="drop-btn" onclick="$('.header-right').toggle(); $('.showCode').toggle(); ">&#9776;</button>
        </div>
        <div class="header-right">
            <ul class="ul">
              <li class="li"><a href="index.php#intro">About</a></li>
              <li class="li"><a href="index.php#Events">Events</a></li>  
              <li class="li"><a href="index.php#schedule">Schedule</a></li>
              <li class="li"><a href="registration.php">Register</a></li>
              <li class="li"><a href="index.php#footer">Contact</a></li>

            </ul>
        </div>
    </div>
  </header>
    <div id="banner-p">
        <div><h1>REGISTER</h1></div>
    </div>
    <div id="forms">
    <form method = "POST" action="registration.php">
      <h2>School Details:</h2>
      <div class="row">
          <div>
            <label for="schoolName">School Name:</label><br>
            <input type="text" name="school_name" id="schoolName"/></div>
          <div>
            <label for="schoolAddress">School Address:</label><br>
            <textarea id="schoolAddress" name="school_address"></textarea>
          </div>
        </div>
        <div class="row">
            <div>
              <label for="schoolContact">School Telephone Number:</label><br>
              <input type="text" id="schoolContact"name="school_no" required/></div>
            <div>
              <label for="schoolEmail">School Email:</label><br>
              <input type="email" id="schoolEmail" name="school_email" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="schoolDay1">School Teacher Day 1:</label><br>
              <input type="text" id="schoolDay1" name="school_teacher_1" required/></div>
            <div>
        
              <label for="schoolDay2">School Teacher Day 2:</label><br>
              <input type="text" id="schoolDay2" name="school_teacher_2" required/>

        </div>
        </div>
        <div class="row">
            <div>
               <label for="schoolDay1">School Teacher Mobile no. Day 1:</label><br>
              <input type="text" id="schoolDay1" name="school_teacher_m1" required/></div><br>
            <div>
        
              <label for="schoolDay2">School Teacher Mobile no. Day 2</label><br>
              <input type="text" id="schoolDay2" name="school_teacher_m2" required/><br>
        </div>
        </div>
        <h2>Participant Details:</h2>
        <div class="row">
            <div>
              <label for="movieMaking1">Movie Making Participant 1:</label><br>
              <input type="text" id="movieMaking1" name="mm_p1" required/></div>
            <div>
              <label for="movieMaking2">Movie Making Participant 2:</label><br>
              <input type="textarea" id="movieMaking2" name="mm_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="keynote1">Keynote Participant 1:</label><br>
              <input type="text" id="movieMaking1" name="key_p1" required/></div>
            <div>
              <label for="keynote2">Keynote Participant 2:</label><br>
              <input type="textarea" id="movieMaking2" name="key_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="Photography1">Photography Participant 1:</label><br>
              <input type="text" id="Photography1" name="photo_p1" required/></div>
            <div>
              <label for="Photography2">Photography Participant 2:</label><br>
              <input type="textarea" id="Photography2" name="photo_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="di1">Digital Imaging Participant 1:</label><br>
              <input type="text" id="di1" name="di_p1" required/></div>
            <div>
              <label for="di2">Digital Imaging Participant 2:</label><br>
              <input type="textarea" id="di2" name="di_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="gaming1">Gaming Participant:</label><br>
              <input type="text" id="gaming1" name="game_p" required/>
            </div>
            
        </div>
        <div class="row">
            <div>
              <label for="gd1">Group Discussion Participant:</label><br>
              <input type="text" id="gd1" name="gd_p" required/>
            </div>
            
        </div>
        <div class="row">
            <div>
              <label for="robo1">Robo Race Participant 1:</label><br>
              <input type="text" id="robo1" name="robo_p1" required/></div>
            <div>
              <label for="robo2">Robo Race Participant 2:</label><br>
              <input type="textarea" id="robo2" name="robo_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="quiz1">Quiz Participant 1:</label><br>
              <input type="text" id="quiz1" name="quiz_p1" required/></div>
            <div>
              <label for="quiz2">Quiz Participant 2:</label><br>
              <input type="textarea" id="quiz2" name="quiz_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="code1">CODE++ Participant 1:</label><br>
              <input type="text" id="code1" name="code_p1" required/></div>
            <div>
              <label for="code2">CODE++ Participant 2:</label><br>
              <input type="textarea" id="code2" name="code_p2" required/>
            </div>
        </div>
        <div class="row">
            <div>
              <label for="dj1">DJ Mixing Participant :</label><br>
              <input type="text" id="dj1" name="dj_p" required/>
            </div>

        </div>
        
        <div class="row">
            <div>
              <label for="logo1">Logo Participant 1:</label><br>
              <input type="text" id="logo1" name="logo_p1" required/></div>
          

          <div>
              <label for="logo1">Logo Participant 2:</label><br>
              <input type="text" id="logo2" name="logo_p2" required/></div>
          </div>
          
      
        
        <div class="row">
            <div>
              <label for="web1">Web Design Participant 1:</label><br>
              <input required type="text" id="web1" name="web_p1" /></div>
          

          <div>
              <label for="web2">Web Design Participant 2:</label><br>
              <input required type="text" id="web2" name="web_p2"/></div>
          </div>
          
      </div>
    <center><div><button name="submit" type="submit" class="button-hov" ><strong>Submit</strong></button></div></center>
</div>
</form>
<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL*/
$link = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
// Attempt insert query execution
if(isset($_POST["submit"])){

    $schoolname =  $_POST['school_name'];
    $schooladd = $_POST['school_address'];
    $schooltele = $_POST['school_no'];
    $schoolemail = $_POST['school_email'];
    $schoolt1 = $_POST['school_teacher_1'];
    $schoolt1no = $_POST['school_teacher_m1'];
    $schoolt2 =  $_POST['school_teacher_2'];
    $schoolt2no = $_POST['school_teacher_m2'];
    $mm1 = $_POST['mm_p1'];
    $mm2 =  $_POST['mm_p2'];
    $q1 =  $_POST['quiz_p1'];
    $q2 =  $_POST['quiz_p2'];
    $l1 =  $_POST['logo_p1'];
    $l2 = $_POST['logo_p2'];
    $web1 =  $_POST['web_p1'];
    $web2 = $_POST['web_p2'];
    $dj1 =  $_POST['dj_p'];
    $photo1 =  $_POST['photo_p1'];
    $photo2 =  $_POST['photo_p2'];
    $c1 =  $_POST['code_p1'];
    $c2 = $_POST['code_p2'];
    $key1 =$_POST['key_p1'];
    $key2 =  $_POST['key_p2'];
    $di1 = $_POST['di_p1'];
    $di2 =  $_POST['di_p2'];
    $rr1 =  $_POST['robo_p1'];
    $rr2 = $_POST['robo_p2'];
    $gd1 =  $_POST['gd_p'];
    $g1=  $_POST['game_p'];
    // if( !empty($g1) && !empty($gd1) && !empty($rr1) && !empty($rr2) && !empty($di1) && !empty($di2) && !empty($key1) && !empty($key2) && !empty($c1) && !empty($c2) && !empty($photo1) 
    // && !empty($photo2) && !empty($dj1) && !empty($web1) && !empty($web2) && !empty($l1) && !empty($l2) && !empty($q1) && !empty($q2) && !empty($mm1) && !empty($mm2) && !empty($schoolname) 
    // && !empty($schooladd) && !empty($schooltele) && !empty($echoolemail) && !empty($schoolt1) && !empty($schoolt2) && !empty($schoolt1no) && !empty($schoolt2no) ){
    $sql = "INSERT INTO registrations (school_name ,school_address ,school_no ,school_email ,school_teacher_1, school_t1_no ,school_teacher_2 ,school_t2_no,movie_p1 ,movie_p2 ,photo_p1 ,photo_p2 ,di_p1 ,prog_p1 ,prog_p2 ,logo_p1 ,logo_p2 ,game_p1 ,gd_p1 ,race_p1 ,race_p2 ,quiz_p1 ,quiz_p2 ,dj_p1 ,webd_p1 ,webd_p2 )
     VALUES ('$schoolname', '$schooladd' , '$schooltele' , '$schoolemail' , '$schoolt1', '$schoolt1no' , '$schoolt2', '$schoolt2no', '$mm1', '$mm2' ,'$photo1' , '$photo2' , '$di1' , '$c1', '$c2', '$l1' , '$l2', '$g1' ,'$gd1' ,'$rr1' , '$rr2' , '$q1', '$q2' , '$dj1' , '$web1' , '$web2')";
    if(mysqli_query($link, $sql)){
     $message = "Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    
    }
    // else{
    //     $message = "Enter all field values";
    //     echo "<script type='text/javascript'>alert('$message');</script>";
    // }

}
 // Close connection
mysqli_close($link);

?>

</body>

</html>
