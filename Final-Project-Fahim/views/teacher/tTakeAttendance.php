<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Attendance</title>
    <link rel="stylesheet" type="text/css" href="../../models/style.css">
</head>
<body>

    <div id="d01" class="top-section">

        <table style="width: 100%;">

            <tr>
                <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
                <td style="width: 35%;">
                    <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                        <a id="p1" href="teacherProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                    </b></span></span>
                    <span style="font-size: 20px; padding-left: 35px;">
                    <a id="d2" href="../teacherHome.php">Home</a>  |  
                        <a id="d2" href="../../views/teacher/teacherNoticeList.php">Notices</a>  |  
                    <a id="d2" href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>
    
    <div id="d1" class="main-section">
    <center>
    <h1>Student's Attendance</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 100%; padding: 20px;">

            <?php

    $file = fopen("../../models/verStudentList.txt", "r"); ?>
<html>
    <center>
    <table border="1" style="text-align: center;">
    <tr>
        <th style="width: 200px;">Username</th>
        <th style="width: 200px;">Name</th>
        <th style="width: 150px;">Action</th>

    </tr>
</table>
    </center>
</html>




<?php

$con = mysqli_connect('localhost','root','','midfahim');
$sql = 'select * from tstudentlist';
$result = mysqli_query($con,$sql);

while ($userArray=mysqli_fetch_assoc($result)){



        // while(!feof($file)){
        //         $user = fgets($file);
        //         $userArray = explode("|", $user); ?>

        <html>
        <center>
        <table border="1" style=" text-align: center;">
            <tr>
                <td style="width: 200px;"><?=$userArray['username']?></td>
                <td style="width: 200px;"><?=$userArray['name']?></td>

                <td style="width: 150px;">
                    <a style="color: rgb(150, 60, 255);" href="../../controllers/attendanceCheck.php?username=<?=$userArray['username']?>&action=present">Present</a> |
                    <a style="color: rgb(150, 60, 255);" href="../../controllers/attendanceCheck.php?username=<?=$userArray['username']?>&action=absent">Absent</a>
                </td>
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