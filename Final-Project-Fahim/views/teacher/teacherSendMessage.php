<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
    <link rel="stylesheet" type="text/css" href="../../models/style.css">
</head>

<body>

<center>
<form id="d1" action="../../controllers/teacherMassageCheck.php" method="POST">
        <fieldset style= "color: rgb(16, 211, 92)">
            <legend>Send Message</legend>

            <table>

                <tr>
                    <td>Class ID: </td>
                    <td><input type="text" name="class_id" id="id"></td>
                </tr>

                <tr>
                    <td>Class Name: </td>
                    <td><input type="text" name="class_name" id ="name" ></td>
                </tr>

                <tr>
                    <td>Topic: </td>
                    <td><input type="text" name="topic" id ="topic" ></td>
                </tr>

                <tr>
                    <td>Message: </td>
                    <td><textarea name="message" cols="30" rows="10"  id ="message" ></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="send" value="send" onclick= "check()" >
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

<script>

        function check(){
            let class_id = document.getElementById('id').value;
            let class_name = document.getElementById('name').value;
            let topic = document.getElementById('topic').value;
            let message = document.getElementById('message').value;

            if(class_id == ""){
                alert("class id is null!");
            }

            if(class_name == ""){
                alert("class name is null!");
            }
            if(topic == ""){
                alert("topic is null!");
            }
            if(message == ""){
                alert("message is null!");
            }
            
        }

       </script>

</body>

</html>