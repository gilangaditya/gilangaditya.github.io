<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "config.php";
    $sql = "SELECT * FROM pengguna WHERE username='$_POST[username]' AND password='" . md5($_POST['password']) . "'";
    if ($query = $connection->query($sql)) {
        if ($query->num_rows) {
            session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION["is_logged"] = true;
                $_SESSION["as"] = $data["status"];
                $_SESSION["username"] = $data["username"];
              }
            header('location: index.php');
        } else {
            echo alert("Username / Password tidak sesuai!", "login.php");
        }
    } else {
        echo "Query error!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Atau masuk dengan platform SosMed</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Atau masuk dengan platform SosMed</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3 class="display-1">Beasiswa Kita</h3>
            <p class="lead">
              
            </p>
            <!-- <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button> -->
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>salah satu dari kami ?</h3>
            <p>
             Silahkan Kembali Ke Page Login. Sedang Dalam Tahap Pengembangan hihi!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
      <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to('.lead', {duration:1.5, delay:1.5,text:'Selamat Datang Di Web Layanan Beasiswa sederhana milik kami.. !'})
        gsap.from('.display-1', { duration: 1, x: -100, opacity: 0, ease: 'back'});
      </script>


    <script src="app.js"></script>
  </body>
</html>

  </body>
</html>
