<html>
<head>
<link rel="icon" href="iiitdmj.jpg" type="image/gif" >
<title>ADMIN PAGE</title>
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
 require("menu.php");
 
echo'<hr><h3 align="center">WELCOME ADMIN!</h3>';
 echo'<a href="log_out.php"><p  align="right">Log Out </p></a>';
@session_start() ;
	//if($_SESSION['USER_ID'] == 'ADMIN')
	//{
//	$CATID=$_POST['cat'];
	//$NOTICE=$_POST['MESSAGE'];
		$CONNECT=mysql_connect('127.0.0.1','root','');
		if(!$CONNECT)
			{
			die('unable to connect to database  :'.mysql_error());
			}
		$db=mysql_select_db("project");
		if(!$db)
		{
			die('unable to select database :'.mysql_error());
		}
		else
		{
			
			$QRY='SELECT BODY,REFNO,VALIDATE
				   FROM  MESSAGE
				   WHERE VALIDATE = 0' ;
			$RES=mysql_query($QRY) ;
			ECHO'<form action = "msg.php" method="POST"><table BORDER=1 align="center">';
			while($ROW=mysql_fetch_assoc($RES))
			{
					$REF=$ROW['REFNO'] ;
					//ECHO "$REF" ;
					ECHO '
					
					<tr><td>'.$REF.'</td><td>'.$ROW['BODY'].'</td><td>
					<input type= "checkbox" name="ref[]" value="'.$REF.'">
					</td></TR>';
					}
					ECHO'<TR><TD COLSPAN="3" ALIGN="CENTER"><input type="submit" value="VALIDATE"/>
				</TD></TR>
				</table>
				</form>' ;
		}
		echo'<hr>';
		$qry1='DELETE FROM `MESSAGE` 
			   WHERE ``=2011003'
		
		

?>
</body>