<?php
    session_start();
    include('../admincp/config/config.php');
        $names = $_POST['names'];
        $email = $_POST['email'];
        $nmphone = $_POST['phone'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        
        if(isset($_POST['sent'])){
            //them
            $sql_them = "INSERT INTO tbl_contacts(names,email,numphone,address,message) VALUE('".$names."','".$email."','".$nmphone."','".$address."','".$message."')";
            mysqli_query($mysqli,$sql_them);
            header('Location:../contact.php');
            
        }
        ?>