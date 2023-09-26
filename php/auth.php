<?php
session_start();
if (isset($_POST['email']) &&
    isset($_POST['password']))
    {

        #database connection file
        include "../db_conn.php";
        #validation helper function
        include "func-validation.php";


        $email = $_POST['email'];
        $password = $_POST['password'];

        $text = "Email";
        $location = "../login.php";
        $ms = "error";
        is_empty($email, $text,$location,$ms,"");


        $text = "Password";
        $location = "../login.php";
        $ms = "error";
        is_empty($password, $text,$location,$ms,"");

        $sql = "SELECT * FROM admin
                WHERE email=?";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$email]);

        if( $stmt->rowCount() === 1)
        {
            echo "YEAH";
        }
        else{
            echo "NO";
        }


    }
    else
    {
        header("Location: ./login.php ");
    }