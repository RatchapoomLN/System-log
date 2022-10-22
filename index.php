<?php
  session_start();
  require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <form action="signup_db.php" method="post">
          <?php if(isset($_SESSION['error'])){?>
              <div class="alert alert-danger" role="alert">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?></div>
            <?php } ?>
          <?php if(isset($_SESSION['success'])){?>
              <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?></div>
            <?php } ?>
          <?php if(isset($_SESSION['warning'])){?>
              <div class="alert alert-warning" role="alert">
            <?php
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?></div>
            <?php } ?>
          
  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastname" aria-describedby="firstname">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="con password" class="form-label">Con Password</label>
    <input type="password" class="form-control" name="c_password">
  </div>
  <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
</form>
<hr>
    <p>เป็นสมาชิกแล้วงั้นหรอก็ไปสิวะ <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>
</body>
</html>