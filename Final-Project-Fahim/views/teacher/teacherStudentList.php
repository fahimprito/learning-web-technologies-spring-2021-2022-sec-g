<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
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
                        <a id="d2" href="teacherNoticeList.php">Notices</a>  |  
                    <a id="d2" href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>

    
    
    <div style= "background-color:rgb(42, 60, 78); 
	color:white; 
    width: 90%;
    border: 15px solid green;
    padding: 50px;
    margin: 20px;" class="main-section">
    <center>
    <h1 style="background-color:rgb(54, 8, 63); color:white;">Students List</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 100%; padding: 20px;">

<html>
    <center>
    <table border="1" style="text-align: center;">
    <tr>
        <th style="width: 100px;">Username</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 200px;">Email</th>
        <th style="width: 100px;">Phone</th>
        <th style="width: 100px;">Date of Birth</th>
        <th style="width: 100px;">Gender</th>
        <th style="width: 150px;">Address</th>
        <th style="width: 100px;">Status</th>
    </tr>
</table>
    </center>
</html>

<?php

$con = mysqli_connect('localhost','root','','midfahim');
$sql = 'select * from tstudentlist';
$result = mysqli_query($con,$sql);

while ($userArray=mysqli_fetch_assoc($result)){


         ?>

        <html>
        <center>
        <table border="1" style="text-align: center;">
            <tr>
                <td style="width: 100px; "><?=$userArray['username']?></td>
                <td style="width: 150px; "><?=$userArray['name']?></td>
                <td style="width: 200px; "><?=$userArray['email']?></td>
                <td style="width: 100px; "><?=$userArray['phone']?></td>
                <td style="width: 100px; "><?=$userArray['dob']?></td>
                <td style="width: 100px; "><?=$userArray['gender']?></td>
                <td style="width: 150px; "><?=$userArray['address']?></td>
                <td style="width: 100px; "><?=$userArray['status']?></td>
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

    <br> <br>

    

    <div style="background-color:rgb(54, 8, 63); color:white;" class="search">
        <center>
        <table>
            <fieldset>
                <legend>Search a student :-</legend>
                <!-- <form action="../../controllers/searchCheck.php" method="POST"> -->

                Username: 
                <input type="text" name="username" id="name" value="" onkeyup="ajax()"> 
                <input type="button" name="search" value="Search" onclick="ajax()">
            
                </form>
            </fieldset>
        </table>


        </center>
    </div>

    <script>
            function ajax(){

            let username = document.getElementById('name').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/searchAjax.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('username='+username);

            xhttp.onreadystatechange = function (){

                    if(this.readyState == 4 && this.status == 200){
                        //alert(this.responseText);
                        document.getElementById('d1').innerHTML = this.responseText;
                    }
                }
            }



        </script>

    <div id="d1" >
      

    </div>
    
</body>
</html>