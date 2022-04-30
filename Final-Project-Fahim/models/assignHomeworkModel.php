<?php



function messageinsert($class_id,$class_name,$topic,$message){
    $con = mysqli_connect('localhost','root','','midfahim');
    $sql = "insert into homework value('{$class_id}','{$class_name}','{$topic}','{$message}')";
    mysqli_query($con,$sql);



}


?>