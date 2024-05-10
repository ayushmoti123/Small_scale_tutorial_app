<?php
    session_start();
?>
<html>
<head>
</head>
<body>
    <?php 
        $cons=new mysqli("localhost","root","","project");
        if(!$cons)
        {
            die('Unable to connect:' .$cons->connect_error);
        }
        $id=$_POST['uname'];
        $pass=$_POST['pass'];
        $_SESSION['cid']=$id;
        $result=mysqli_query($cons,"select * from login where Customer_id='".$id."' and  Password='".$pass."'");
        if(mysqli_num_rows($result))
        {
         ?>
        <script type="text/javascript">
            window.location.replace("http://localhost/xampp/finalproject/index.php");
    
        </script>
        
        <?php }
        
        else
        {
            echo ' No record found';
        }
    
    ?>
</body>
</html>