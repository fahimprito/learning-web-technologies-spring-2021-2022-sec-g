<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note List</title>
    <link rel="stylesheet" type="text/css" href="../../models/style.css">
</head>
<body>

    <div  id="d01" class="top-section">

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
    
    <div id="d1"  class="main-section">
        
        <center>
        <h1 style="background-color:rgb(54, 8, 63); color:white;">Download Class Notes :-</h1>

            <table border="2" style="width: 50%; text-align: center; background-color:rgb(15, 187, 115);" > 
                <tr style="color:black">
                    <th>Class/Section</th>
                    <th>Files (Download)</th>
                    <th>Action</th>
                </tr>

                <tr style="color:black" >
                    <td  >Class01</td>
                    <td>
                    <a  href="../../models/uploads/class01.zip" download>
                <h3 >class01</h3>
                </a>
                    </td>
                    <td>
                        <a  href="#">Update</a> | 
                        <a href="#">Delete</a>
                    </td>

                </tr>

                <tr style="color:black">
                    <td>Class02</td>
                    <td>
                    <a href="../../models/uploads/class02.zip" download>
                <h3>class02</h3>
                </a>
                    </td>
                    <td>
                        <a href="#">Update</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>

                <tr style="color:black">
                    <td>Class03</td>
                    <td>
                    <a href="../../models/uploads/class03.zip" download>
                <h3>class03</h3>
                </a>
                    </td>
                    <td>
                        <a href="#">Update</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>

                <tr style="color:black">
                    <td>Class04</td>
                    <td>
                    <a href="../../models/uploads/class04.zip" download>
                <h3>class04</h3>
                </a>
                    </td>
                    <td>
                        <a href="#">Update</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>

                <tr style="color:black">
                    <td>Class05</td>
                    <td>
                    <a href="../../models/uploads/class05.zip" download>
                <h3>class05</h3>
                </a>
                    </td>
                    <td>
                        <a href="#">Update</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>

            </table>
        </center>
    </div>
    
</body>
</html>