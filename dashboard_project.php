<?php
    include('Connection_project.php');
    if(!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql = " SELECT * FROM `user_information` WHERE `id` = $user_id ";
        $rs  = $con->query($sql);
        $row = mysqli_fetch_assoc($rs);
        $name    = $row['name'];
        $email   = $row['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style and Reponsive CSS  -->
    <link rel="stylesheet" href="dashboard.css">
    <!-- icon CD Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Thai Coding</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus'></i>
                <div class="logo_name">
                CodingLab
                </div>
            </div>
            <i class='bx bx-menu'id="btn_menu" ></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-user' ></i>
                    <span class="link_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_detail">
                    <img src="profile.jpg" alt="">
                   <div class="name_job">
                        <div class="name">
                            Chan Thai
                        </div>
                        <div class="job">
                            Web Developer
                        </div>
                   </div>
                </div>
                <i class='bx bx-log-out' id="btn_log_out" ></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">Home Content</div>
    </div>
    <script>
        let btn = document.querySelector("#btn_menu");
        let sidebar = document.querySelector(".sidebar");
        let searchbtn = document.querySelector(".bx-search");
        
        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchbtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>
<?php
    }
    else {
        header('Location: Login.php');
    }
?>