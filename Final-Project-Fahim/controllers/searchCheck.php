<?php

    require("header.php");


    if(isset($_REQUEST["search"])){
       if(!empty($_REQUEST["username"])){
            $username = $_REQUEST["username"];

            $con = mysqli_connect('localhost','root','','midfahim');
            $sql = 'select * from tstudentlist';
            $result = mysqli_query($con,$sql);

            while ($userArray=mysqli_fetch_assoc($result)){

                if(trim($userArray['username']) == $username){

                $content ="Username: " .$userArray['username'] ."<br>"."Name: " .$userArray['name'] ."<br>"."Email: " .$userArray['email'] ."<br>"."Phone: " .$userArray['phone'] ."<br>"."Date Of Birth: " .$userArray['dob'] ."<br>"."Gender: " .$userArray['gender'] ."<br>"."Address: " .$userArray['address'];
                echo $content;
                }

           }
       }
    }

?>