<?php
session_start();
?>
<html>
<head>
<title>Insert Data</title>
</head>
<body>
<?php
$conns=new mysqli("localhost","root","","project");
if($conns->connect_error)
{
	die('unable to connect:'.$conns->connect_error);
}
$result=mysqli_query($conns,"select * from login");
$rowcount=mysqli_num_rows($result);
$rowcount=$rowcount+1;
$mid='M'.$rowcount;
$n=$_POST['i1'];
$mail=$_POST['i6'];
$_SESSION['name']=$n;
$_SESSION['cid']=$mid;
$result1=mysqli_query($conns,"select * from login where Mail_id='".$mail."'");
//echo (string)$result1;
if(mysqli_num_rows($result1)==0)
{
   
	$sqlquery="Insert into login(Name,Dob,State,City,Contact_no,Mail_id,Password,Customer_id) Values('$_POST[i1]','$_POST[i2]','$_POST[i3]','$_POST[i4]','$_POST[i5]','$_POST[i6]','$_POST[i7]','$mid')";
   
	if($conns->query($sqlquery)==true)
	{
	echo'<h1>';
	echo 'You are successfully registered';
    echo 'Your Member ID is'.$mid;
    echo'Please remember your Member ID for future use';
    echo'</h1>';
    }
	else
	{
        echo "error".$conns->error;
	}
}
else
{
    echo'<h2>';
    echo'This mail_id is already registered';
    echo'</h2>';
}
mysqli_close($conns);
?>
</body>
</html>