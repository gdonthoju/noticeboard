<html>
<head>
<link rel="icon" href="iiitdmj.jpg" type="image/gif" >
<title>ACKNOWLEDGEMENT</title>
<style>
body {
		background-color:#ababab;
		margin-left:auto;
        margin-right:auto;
        width:1024px;   
        border: 1px dotted black;
        padding: 5px 5px 5px 5px;
        font-family: sans-serif;
        }
#page {
        margin-left:auto;
        margin-right:auto;
        width:1024px;
        }
img{
        width:1024px;
        }		

</head>
<body>
<?php
	session_start();
	require('menu.php');
	echo'<hr>';
	echo'<p align="right"><a href="main_page.php">Home</a></p>';
	$id=$_SESSION['USER_ID'];
	$SUBJECT=$_POST['SUBJECT'];
	$CATID=$_POST['cat'];
	$NOTICE=$_POST['MESSAGE'];
	$CONNECT=mysql_connect('127.0.0.1','root','');
			if(!$CONNECT)
			{
			die('unable to connect to database  :'.mysql_error());
			}
			$db=mysql_select_db("PROJECT");
			if(!$db)
			{
				die('unable to select database :'.mysql_error());
			}
			else
			{
				$REFNO=uniqid();
				
				$datetime=date("y-m-d h:m:s") ;
				$QRY2="INSERT INTO MESSAGE(REFNO, TIME, BODY, CATID, VALIDATE,SUBJECT)
				VALUES('$REFNO','$datetime','$NOTICE','$CATID','','$SUBJECT')" ;
				$RES2= mysql_query($QRY2);
				echo '<p align="center">YOUR NOTICE HAS BEEN RECORDED SUCESSFULLY</p><h4 align="center">REF.NO.:'.$REFNO.'</h4><p align="center">YOUR NOTICE WILL BE VALIDATED AND POSTED VERY SOON</p>' ;
				echo $datetime;
			}
			
?>
</body>