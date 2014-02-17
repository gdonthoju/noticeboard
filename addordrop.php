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

</style>

</head>
<body>
<?php
session_start();
require('menu.php');
echo'<hr>';
echo'<p align="right"><a href="main_page.php">Home</a></p>';
@$id=$_SESSION['USER_ID'];
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
			$qry="SELECT NAME,ID
				FROM SUBSCRIPTION,CATEGORY
				WHERE USER='$id'
				AND CATID=ID" ;
			$res=mysql_query($qry) ;
			echo '<h4>Categories you have subscribed:</h4>' ;
			ECHO'<form action = "drop.php" method="POST"><table align="center" BORDER=1>';
			while($row=mysql_fetch_assoc($res))
				{
					$cn=$row['NAME'] ;
					$ci=$row['ID'] ;
					ECHO '
					<tr><td>'.$ci.'</td><td>'.$cn.'</td><td>
					<input type= "checkbox" name="ref1[]" value="'.$ci.'">
					</td></TR>';
						  }
			ECHO'<TR><TD COLSPAN="3" ALIGN="CENTER"><input type="submit" value="UNSUBSCRIBE"/>';
			echo'</form>';
			echo '</table>' ;
			$QRY	="SELECT ID,NAME
					  FROM CATEGORY
			          WHERE ID NOT IN (SELECT CATID
						               FROM SUBSCRIPTION
							           WHERE USER='$id')" ;
			$RES=mysql_query($QRY) ;
			echo '<h4>Categories you have not subscribed</h4>' ;
			ECHO'<form action = "add.php" method="POST"><table align="center" BORDER=1>';
			while($row=mysql_fetch_assoc($RES))
				{
					$cn=$row['NAME'] ;
					$ci=$row['ID'] ;
					ECHO '
					<tr><td>'.$ci.'</td><td>'.$cn.'</td><td>
					<input type= "checkbox" name="ref2[]" value="'.$ci.'">
					</td></TR>';
				}
			ECHO'<TR><TD COLSPAN="3" ALIGN="CENTER"><input type="submit" value="SUBSCRIBE"/>';
			echo'</form>';
			echo '</table>' ;
}
?>
</body>
</html>