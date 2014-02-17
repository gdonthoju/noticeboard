<html>
<head>
<link rel="icon" href="iiitdmj.jpg" type="image/gif" >
<title>SUBSCRIPTION</title>
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
@$id=$_SESSION['USER_ID'];
@$ref2=$_POST['ref2'];
@$refcount=count($ref2);
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
			
			for($i=0;$i<$refcount;$i++)
			{
			//	ECHO $ref2[$i].'</br>';
				
				$qry="INSERT INTO SUBSCRIPTION(`USER`, `CATID`) VALUES ('$id','$ref2[$i]')" ;
				//echo $qry;
				$RES=mysql_query($qry) ;
				//echo $RES ;
			}
			echo '<p align="center">Subscription has been sucessfully done!!!</p> ';
			
			}
?>
</body>
</html>
