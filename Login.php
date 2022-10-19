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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="form_login">
                <span class="tittle">Login</span>
                <form action="" method="POST">
                    <div class="input_field">
                        <input type="text" placeholder="Username or Email" name="name_email" >
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input_field">
                        <input type="password" id="password" placeholder="Password" name="password">
                        <i class='bx bx-lock-alt' ></i>
                        <i class='bx bx-hide btn_hide' onclick="hide()"></i>
                    </div>
                    <div class="input_field button">
                        <input type="submit" value="Login Now" name="btn_login">
                    </div>
                </form>
                <div class="login_singup">
                    <span class="text">Not Member ?</span>
                    <a href="Register.php" class="sing_up_text">Sing Up</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // const pwShowHide = document.querySelector(".btn_hdie")
        //        pwField   = document.querySelector(".password");
        //     pwShowHide.forEach(eyeIcon =>{
        //         eyeIcon.addEventlistener('click', ()=>{
        //             pwField.forEach(pwField =>{
        //                 if(pwField.type == "Password"){
        //                     pwField == "text";
        //                 }
        //                 else{
        //                     pwField == "password"
        //                 }
        //             })
        //         })
        //     })
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