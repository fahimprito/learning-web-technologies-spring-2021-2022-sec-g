<?php



function noteinsert($class_id,$class,$section,$filename){
    $con = mysqli_connect('localhost','root','','midfahim');
    $sql = "insert into class_note value('{$class_id}','{$class}','{$section}','{$filename}')";
    mysqli_query($con,$sql);








}


?>