<?php
    session_start();
?>
<html>
<head>
    <title>Insertion_form</title>
    
</head>
<body>
    <?php 
        $cons=new mysqli("localhost","root","","project");
        if(!$cons)
        {
            die('Unable to connect:' .$cons->connect_error);
        }
        $id=$_POST['check1'];
        $pass=$_POST['check2'];
        $result=mysqli_query($cons,"select * from login where Customer_id='".$id."' and  Password='".$pass."'");
        if(mysqli_num_rows($result))
        {
            $row=mysqli_fetch_row($result);
            $str=$row[0];
            $_SESSION['name']=$str;
         ?>
        <script type="text/javascript">
            window.location.replace("http://localhost/xampp/finalproject/account.php");
    
        </script>
        
        <?php }
        
        else
        {
            echo ' No record found';
        }
    
    ?>
</body>



</html>