<?php
    session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="style7.css">
</head>
<body>
<div class="container">
    <div class="image">
        <img src="icon1.png" height="50px" width="50px">
    </div>
<?php
    echo'<h1><marquee>';
    echo'WELCOME '.$_SESSION['name'];
    echo'</h1></marquee>';
?>
<center>
<div class="center">
<h1>Try a mock test for free</h1>
<button>
<a href="http://localhost/xampp/finalproject/exam1.php">click here</a>
</button>
</div>
</center>
 </div>
</body>
</html>