<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Classes/Sections Page</title>
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
    
    <div  style= "background-color:rgb(42, 60, 78); 
	color:white; 
    width: 90%;
    border: 15px solid green;
    padding: 50px;
    margin: 20px;" class="main-section">
    <center>
    <h1 style="background-color:rgb(54, 8, 63); color:white;">Classes/Sections</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 25%; padding: 10px; padding-left: 40px;">
            <a id="d2" href="addClassNotes.php">Add Class Notes</a> <br> <br>
            <a id="d2" href="updateDeleteNotes.php">Update/Delete Class Notes</a> <br> <br>
            <a id="d2" href="assignHomework.php">Assign Homework/Assignment</a> <br> <br>
            </td>
            <td style="width: 75%; padding: 20px;">

            <?php

    //$file = fopen("../../models/classList.txt", "r"); ?>
<html>
    <h2>Class/Sections List :-</h2>
    <center>
    <table border="1" style="width: 1000px; text-align: center;">
    <tr>
        <th style="width: 200px;">Class ID</th>
        <th style="width: 200px;">Class</th>
        <th style="width: 200px;">Section</th>
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

            xhttp.open('POST', '../../controllers/classSearch.php', true);
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