<?php 
    include ('Connection_project.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="Login_style.css">
    <!-- ICon Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="form_login">
                <span class="tittle">Register</span>
                <form action="" method="POST">
                    <div class="input_field">
                        <input type="text" placeholder="Username" name="name">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input_field">
                        <input type="text" placeholder="Email" name="email">
                        <i class='bx bx-envelope' ></i>
                    </div>
                    <div class="input_field">
                        <input type="text" placeholder="Address" name="address">
                        <i class='bx bx-map-pin'></i>
                    </div>
                    <div class="input_field">
                        <input type="password" id="password" placeholder="Password" name="password">
                        <i class='bx bx-lock-alt' ></i>
                        <i class='bx bx-hide btn_hide' onclick="hide()"></i>
                    </div>
                    <div class="input_field">
                        <input type="password" id="con_password" placeholder="Confirm Password">
                        <i class='bx bx-lock-alt' ></i>
                        <i class='bx bx-hide btn_hide' onclick="hide()"></i>
                    </div>
                    <div class="input_field">
                        <input type="date" placeholder="Date Of Birth" name="date_of_birth">
                        <i class='bx bxs-calendar'></i>
                    </div>
                    <div class="input_field button">
                        <input type="submit" value="SingUp Now" name="btn_add_post">
                    </div>
                </form>
                <div class="login_singup">
                    <a href="Login.php" class="sing_up_text">Login</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hide(){
            var temp = document.getElementById("password");
            if (temp.type == "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
    </script>
</body>
</html>