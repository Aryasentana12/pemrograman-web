<?php 

session_start(); 
if($_SESSION['role'] = 'user'){ 
    echo "anda bukan role user"; 
    header('Location:index.php'); 
} 

?> 

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <tittle>Document</tittle>
</head>
<body>
    <h1>Selamat datang <?php echo $_SESSION['name'];?></h1> 
    <a href="./backend/logout.php">Logout</a>

</body>
</html>