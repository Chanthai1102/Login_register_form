<?php
    $localhost = '';
    $username = 'root';
    $password = '';
    $db_name = 'user_information';

    $con = new mysqli($localhost, $username, $password, $db_name);

    // add user data
    function add_user_data() {
        global $con;
        if(isset($_POST['btn_add_post'])) {

            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $address        = $_POST['address'];
            $date_of_birth  = $_POST['date_of_birth'];
            $password       = md5($_POST['password']);
            $sql = " INSERT INTO `user_information`(`name`, `email`, `address`, `date_of_birth`, `password`) 
                    VALUES ('$name' ,'$email' ,'$address' ,'$date_of_birth' ,'$password')";
            $rs  = $con->query($sql);

            if($rs == true) {
                echo 'Data insert sucess';
            }
            else {
                echo 'error';
            }

        }
    }
    add_user_data();

    function user_login() {
        global $con;
        if(isset($_POST['btn_login'])) {

             $name_email = $_POST['name_email'];
             $password   = md5($_POST['password']);
            $sql = " SELECT * FROM `user_information` WHERE (`name` = '$name_email' OR `email` = '$name_email') AND `password` = '$password' ";
            $rs  = $con->query($sql);
            $row = mysqli_fetch_assoc($rs);
            if(!empty($row)) {
                $user_id = $row['id'];
                $_SESSION['user_id'] = $user_id;
                header('Location: dashboard_project.php');
            }
            else {
                echo 'Invalid username or pasword';
            }

        }
    }
    user_login();