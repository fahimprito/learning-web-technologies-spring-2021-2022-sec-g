<?php

require("../controllers/header.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Home Page</title>
    <link rel="stylesheet" type="text/css" href="../models/style.css">
</head>
<body>
    
<div id="d01" class="top-section">

<table style="width: 100%;">

    <tr>
        <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
        <td style="width: 35%;">
            <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                <a id="p1" href="teacher/teacherProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
            </b></span></span>
            <span style="font-size: 20px; padding-left: 35px;">
            <a  id="d2" href="#">Home</a>  |  
                <a  id="d2" href="../views/teacher/teacherNoticeList.php">Notices</a>  |  
            <a  id="d2" href="../controllers/logout.php">Logout</a>
            </span>
        </td>
    </tr>

</table>

</div>

<div id="d1"  class="main-section">
    <center>
    <h1 style="background-color:rgb(54, 8, 63); color:white;">Teacher Dashboard</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 25%; padding: 10px; padding-left: 40px;">
            <a id="d2" href="../views/teacher/teacherClassSections.php">Class/Sections</a> <br> <br>
            <a id="d2" href="teacher/teacherStudents.php">Students</a> <br> <br>
            <a id="d2" href="teacher/tAcademicCalender.php">Academic Calendar</a> <br> <br>
            <a id="d2" href="teacher/teacherNotices.php">Notices</a> <br> <br>
        </td>
            <td style="width: 75%; padding: 20px;">

            <?php

    //$file = fopen("../models/classList.txt", "r"); ?>
<html>
    <h2>Class List :-</h2>
    <center>
    <table border="1" style="width: 1000px; text-align: center;">
    <tr>
        <th style="width: 200px;">Class ID</th>
        <th style="width: 200px;">Class</th>
        <th style="width: 200px;">Section</th>
        <th style="width: 200px;">Teacher</th>
        <th style="width: 200px;">Room</th>
    </tr>
</table>
    </center>
</html>

<?php

$con = mysqli_connect('localhost','root','','midfahim');
$sql = 'select * from teacherclasslist';
$result = mysqli_query($con,$sql);

while ($userArray=mysqli_fetch_assoc($result)){



        // while(!feof($file)){
        //         $user = fgets($file);
        //         $userArray = explode("|", $user); ?>

        <html>
        <center>
        <table border="1" style="width: 1000px; text-align: center;">
            <tr>
                <td style="width: 200px;"><?=$userArray['classid']?></td>
                <td style="width: 200px;"><?=$userArray['class']?></td>
                <td style="width: 200px;"><?=$userArray['section']?></td>
                <td style="width: 200px;"><?=$userArray['teacher']?></td>
                <td style="width: 200px;"><?=$userArray['room']?></td>
            </tr>
        </table>
        </center>
        </html>
        <?php
}

?>
        
        </td>
        </tr>
    </table>
    </center>
    </div>


    
</body>
</html>