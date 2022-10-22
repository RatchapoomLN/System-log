<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-4">เข้าสู่ระบบ</h3>
        <form action="signin_db.php" method="post">
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
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="firstname">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
</form>
<hr>
    <p>อ้าว ยังไม่เป็นเหี้ยไรเลยนิ ไปสมัครสิวะ <a href="index.php">สมัครสมาชิก</a></p>
    </div>
</body>
</html>