<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<title>CAFE & RESTO</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="image/kopilogo.jpeg">
 <link rel="stylesheet" type="text/css" href="style_.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
  <form action="" method="POST" class="login-email">
   <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
   
   <div class="input-group">
            <a href="index.php" class="btn">Lanjut</a>
   </div>
  </form>
 </div>
</body>
</html>
