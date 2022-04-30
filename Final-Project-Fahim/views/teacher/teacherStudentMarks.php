<?php
    require("../../controllers/header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Sheet</title>
    <link rel="stylesheet" type="text/css" href="../../models/style.css">
</head>
<body>
    
<div id="d01" class="top-section">

<table style="width: 100%;">

    <tr>
        <td style="width: 65%; padding: 5px;"><h3 >MSM SYSTEM</h3></td>
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