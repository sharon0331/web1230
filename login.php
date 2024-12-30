<?php
session_start();
require 'db.php'; //資料庫連接

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];  //從表單裡接收期望的角色
    
    //查詢資料庫中該帳號的資訊
    $stmt = $conn->prepare("SELECT * FROM login1 WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute(); // 執行查詢
    $result = $stmt->get_result();  // 獲取查詢結果
    $user = $result->fetch_assoc();  // 取得一條資料作為關聯陣列
    
    //檢查帳號、密碼和用戶是否匹配
    if ($user) {
      if ($password === $user['password'] && $role === $user['role']) { // 檢查密碼和角色是否匹配
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];  // 如果有角色欄位，可以存入角色

            switch ($user['role']){
                case 'teacher':
                    header("Location: home.php");
                    break;
                case 'student':
                    header("Location: home.php");
                    break;
                case 'manager':
                    header("Location: home.php");
                    break;
                default:
                    header("Location: home.php");  // 重定向到主頁
                    exit();
            }
            exit();
            
        } else {
            // 密碼錯誤
            $error = "角色不匹配";
        }
    } else {
        // 帳號不存在
        $error = "帳號或密碼錯誤";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>登入</title>

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active">
            <a class="nav-link" href="home.html">首頁</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="course_center.html" id="navbarDropdown02" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              課程專區<i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
              <li><a class="dropdown-item" href="course_center.html">課程清單</a></li>
              <li><a class="dropdown-item" href="views.html">觀看數據</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="member.html" id="navbarDropdown02" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              會員專區<i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown03">
              <li><a class="dropdown-item" href="member.html">會員管理</a></li>
              <li><a class="dropdown-item" href="add_member.htm">新增會員</a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="authority.html">權限管理</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="login.html">登入</a>
          </li>
        </ul>
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
                    <h2>登入 / 註冊</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="home.html" class="text-white">首頁</a></li>
                      <li class="breadcrumb-item active" aria-current="page">登入</li>
                    </ol>
<!--============== 標題結束 ===============-->


<!------------======== 登入表格開始 ========------------->
                  <div id="login"></br>
                    <div class="card card-body" style="padding: 70px; width: 400px; text-align: center; margin: 0 auto;">
                      <?php if (isset($error)) echo "<p style='color:red;'>$error</p>";?>
                    <form action="login.php" method="post">
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
                          
                          <label for="username" style="color: black;">名稱</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="請輸入使用者名稱" required>
                        </div>
                        <div class="form-group">
                          <label for="password" style="color: black;">密碼</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-outline-success">
                        登入</button>
                        
                      </form>
                    </div>
                  </div>
                  
<!------------========登入表格結束========------------->

                  </br>
                  <p style="color: white;">點擊下方進行註冊</p>
                  <button class="btn btn-outline-light" type="button" >
                    <a href="register.php" style="color: white;">註冊</a>
                  
                  </button>
                  
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
    <div class="top-footer">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <h3>about</h3>
            <p>會址：251301 新北市淡水區英專路151號（資管系辦公室）
              No.151, Yingzhuan Rd., Tamsui Dist., New Taipei City 251301, Taiwan
              (R.O.C.)<br>
              e-mail：csim.service@gmail.com</p>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <ul>
              <li>
                <h3>資訊管理學會</h3>
              </li>
              <li><a href="https://www.csim.org.tw/news/8270">【競賽】全國最大資訊服務...
                </a></li>
              <li><a href="https://www.csim.org.tw/news/8261">【論文徵稿】第35屆國際...
                </a></li>
              <li><a href="https://www.csim.org.tw/news/8253">【選舉公告】中華民國資訊...
                </a></li>
              <br>
              <li><a href="https://www.csim.org.tw/news-taxonomy/29"
                  style="text-align:initial">...更多</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
            <ul>
              <li>
                <h3>學校</h3>
              </li>
              <li><a href="https://www.csim.org.tw/news/8269">【徵才】靜宜大學資料...</a></li>
              <li><a href="https://www.csim.org.tw/news/8268">【徵才】靜宜大學資料...</a></li>
              <li><a href="https://www.csim.org.tw/news/8257">2024第一屆傳善論文獎</a></li>
              <br>
              <li><a href="https://www.csim.org.tw/news-taxonomy/30" style="text-align: initial;">...更多</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-3 col-md-6">
            <ul>
              <li>
                <h3>業界</h3>
              </li>
              <li><a href="https://www.csim.org.tw/news/8181">【論文徵稿】第十一屆服務...</a></li>
              <li><a href="https://www.csim.org.tw/news/8158">【徵才公告】衛生福利部食...</a></li>
              <li><a href="https://www.csim.org.tw/news/8082">Drupal跨界整合之社群大會...</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

        </div>
      </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
      <h5>中華民國資訊管理學會 版權所有@2013 CSIM All Rights Reserved.</h5>
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