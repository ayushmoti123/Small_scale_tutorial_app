<?php
    session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style4.css">
<body>
<div class="bg">
<?php
    $connection=new mysqli("localhost","root","","project");
    if($connection->connect_error)
        die('unable to connect:'.$connection->connect_error);
    $result=mysqli_query($connection,"select * from package_purchased");
    $rows=mysqli_num_rows($result);
    $rows=$rows+1;//sno
    $pid='Package'.$rows;
    $date=date("d-m-Y");
    $mid=$_SESSION['cid'];
    if($rows!=0){
        $sqlquery="Insert into package_purchased(Candidate_id,Package_id,Mop,Pay_date,Slno)values('$mid','$pid','$_POST[in]','$date',$rows)";
        
	if($connection->query($sqlquery)==true)
	{
	echo'<h1>';
	echo 'Your payment is successfulllllllll';
    echo'</h1>';
    }
	else
	{
        echo "error".$connection->error;
	}
        
    }
    else{
        echo 'Some error is happening and data cannot be inserted';
    }
?>    
  </div>  
    
<div class="bg2">
<button ><a href="section1.php">STUDY MATERIALS</a></button>    
    
</div>
</body>    
    
</head>
</html>