<?php

    if(isset($_POST["btn-send"]))
    {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        if(empty($username) || empty($email) || empty($number) || empty($message))
        {
                header('location:index.php?error');
        }
        else
        {
            $to = "kathlynguivencan@gmail.com";

            if(mail($to, $username, $message, $number))
            {
                header("location:inde");
            }
            
        }
    }
    else
    {
        header("location:index.php");
    }