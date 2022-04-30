<?php

require("header.php");
require("../models/assignHomeworkModel.php");

if(isset($_REQUEST["send"])){
    if(!empty($_REQUEST["class_id"])){
        $class_id = $_REQUEST["class_id"];

        if(!empty($_REQUEST["class_name"])){
            $class_name = $_REQUEST["class_name"];

            if(!empty($_REQUEST["topic"])){
                $topic = $_REQUEST["topic"];

                if(!empty($_REQUEST["message"])){
                    $message = $_REQUEST["message"];

                    // $file = fopen("../models/tmassagelist.txt", "a");
                                            
                    // $content = "\r\n". $class_id ."|" .$class_name ."|" .$topic ."|" .$message;             
                    // fwrite($file, $content);
                    // fclose($file);

                    messageinsert($class_id,$class_name,$topic,$message);
                    header("location: ../views/teacher/assignHomework.php");
                }
                else{
                    //echo "Message is null!";
                    header("location: ../views/teacher/assignHomework.php");

                }
    
            }
            else{
                //echo "Topic is null!";
                header("location: ../views/teacher/assignHomework.php");
            }

        }
        else{
            //echo "class name is null!";
            header("location: ../views/teacher/assignHomework.php");
        }
    }
    else{
       // echo "class ID is null!";
       header("location: ../views/teacher/assignHomework.php");

    }
}
?>