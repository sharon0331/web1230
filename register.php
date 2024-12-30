<?php
session_start();
require 'db.php';

// 處理註冊表單提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $role = trim($_POST["role"]);
  $confirm_password = trim($_POST["confirm_password"]);

    // 驗證輸入
    if (empty($username) || empty($password) || empty($confirm_password)) {
        die("所有欄位都是必填的。");
    }

    if ($password !== $confirm_password) {
        die("密碼和確認密碼不匹配。");
    }

    // 檢查用戶是否已存在
    $sql = "SELECT id FROM login1 WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("用戶名已被使用。");
    }

    $stmt->close();

    // 加密密碼並插入資料
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO login1 (username, role, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $role, $hashed_password);

    if ($stmt->execute()) {
      // 註冊成功，跳轉到登入頁面
      header("Location: login.php");
      exit();
    } else {
        echo "發生錯誤: " . $conn->error;
    }
    $stmt->close();
}

$conn->close();
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs ================================================== -->
  <meta charset="utf-8">
  <title>登入</title>

  <!-- Mobile Specific Metas ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://www.csim.org.tw/sites/default/files/CSIM.gif" />

  <!-- CSS ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

  <!----Start Preloader ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!---- End Preloader  ==================================== -->

<!--  Fixed Navigation  ===================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!---- logo ---->
      <a class="navbar-brand logo" href="home.html">
        <img loading="lazy" class="logo-default" style="width: 300px; height: auto;" src="https://images.squarespace-cdn.com/content/v1/5e1350e919199c488a7c6651/27961e07-46cd-49f3-8739-53e9df2c43cd/outer-banks-5eaed5543712c.png"
          alt="logo" />
        <img loading="lazy" class="logo-white" style="width: 300px; height: auto;" src="https://images.squarespace-cdn.com/content/v1/5e1350e919199c488a7c6651/27961e07-46cd-49f3-8739-53e9df2c43cd/outer-banks-5eaed5543712c.png"
          alt="logo" />
      </a>
      <!---- logo ---->
      
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--  End Fixed Navigation  ==================================== -->


<!--背景圖片-->
<section class="call-to-action-2 section" style="background-size: cover; background-position: center;
  background-repeat: no-repeat; width: 100vw; min-height: 100vh; background-image: url('https://tipsmake.com/data2/images/download-wallpaper-surface-laptop-4-picture-3-rgCw2nVRN.jpg');background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">
    <div class="container">
      <div class="row justify-content-center">

<!--============== 標題開始 ===============-->
        <section class="about-shot-info section-sm">
          <div class="container" style="color: white;">
              <div style="text-align: center; color: white;">
                <div class="mb-4">
                    <h2>註冊</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="home.html" class="text-white">首頁</a></li>
                      <li class="breadcrumb-item active" aria-current="page">註冊</li>
                    </ol>
                    <button class="btn btn-outline-light"><a href="login.php" style="color: white;">返回登入頁面</a></button>
<!--============== 標題結束 ===============-->


<!------------======== 註冊表格開始 ========------------->
                  <div id="login"></br><br>
                    <div class="card card-body" style="padding: 70px; width: 400px; text-align: center; margin: 0 auto;">
                    <form action="register.php" method="post">
                      <div class="form-group">
                        <label for="role" style="color: black;">角色</label><br>
                        <select id="role" name="role">
                          <option value="">請選擇</option>
                          <option value="student">學生</option>
                          <option value="teacher">教師</option>
                          <option value="manager">管理員</option>
                        </select><br><br>
                      </div>
                        <div class="form-group">
                          <label for="username" style="color: black;">註冊名稱</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="請輸入使用者名稱" required>
                        </div>
                        <div class="form-group">
                          <label for="password" style="color: black;">密碼</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                        </div>
                        <div class="form-group">
                          <label for="confirm_password" style="color: black;"></label>
                          <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="驗證密碼" required>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-outline-success">
                        註冊</button>
                      </div>
                    </div>
                      </form>
                    </div>
                  </div>
                  
<!------------========登入表格結束========------------->
                    </div>
                  </div>
                </div></br>
      <!--------        課程影片中心        -------->
          </div>
          </div>
          </div>
          </div>
        </section>
      </section> 

<!--===========================-->
  <footer id="footer" class="bg-one">
    <div class="footer-bottom">
      <h5>OBX 版權所有 @obx All Rights Reserved.</h5>
    </div>
  </footer> <!-- end footer -->


  <!-- end Footer Area========================================== -->

  <!-- Essential Scripts=====================================-->
  <!-- Main jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap4 -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- Parallax -->
  <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
  <!-- lightbox -->
  <script src="plugins/lightbox2/js/lightbox.min.js"></script>
  <!-- Owl Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- filter -->
  <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- Smooth Scroll js -->
  <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
  <!-- Custom js -->
  <script src="js/script.js"></script>

</body>

</html>