<?php

require("header.php");

if(isset($_REQUEST["register"])){
    if(!empty($_REQUEST["class_id"])){
        $class_id = $_REQUEST["class_id"];
        $class = $_REQUEST["class"];
        $section = $_REQUEST["section"];

        if(!empty($_REQUEST["room"])){
            $room = $_REQUEST["room"];

            if(!empty($_REQUEST["teacher"])){
                $teacher = $_REQUEST["teacher"];

                if(!empty($_REQUEST["phone"])){

                    if(strlen($_REQUEST["phone"]) == 11){
                        $phone = $_REQUEST["phone"];

                        if(!empty($_REQUEST["email"])){
                            $email = $_REQUEST["email"];
            
                            $file = fopen("../models/classList.txt", "a");
                                            
                            $content = "\r\n". $class_id ."|" .$class ."|" .$section ."|" .$room ."|". $teacher ."|" . $phone ."|". $email;             
                            fwrite($file, $content);
                            fclose($file);
                            header("location: ../views/admin/adminClassSections.php");

                        }
                        else{
                            echo "Email is null!";
                        }
                    }
                    else{
                        echo "Phone number is invalid, Enter 11 digit phone number!";
                    }
                }
                else{
                    echo "phone number is null!";
                }

            }
            else{
                echo "teacher is null!";
            }

        }
        else{
            echo "Room number is null!";
        }

    }
    else{
        echo "Class ID is null!";
    }
    
}

?>