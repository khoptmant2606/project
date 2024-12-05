<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/project/css/category.css">
<header>
    <h1>
        <center>
            Category
        </center>
    </h1>
</center>
<ul>
    <li class="nav"><a href="index.php" class="link">HOME</a></li>
 </ul>
</header>
<body>

    <a href="coffee.php" class="link">
    <div class="coffee">
        <h1 class="prod">Coffee</h1>
    </div>
</a>

    <a href="coldbrew.php" class="link">
    <div class="coldbrew" > 
        <h1 class="prod">Cold Brew</h1>
    </div>
</a>

    <a href="milktea.php" class="link">
    <div class="milktea">
        
        <h1 class="prod">Milk Tea</h1>
    </div>
</a>
</section>
</section>
</body>
</html>