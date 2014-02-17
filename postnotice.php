<html>
<head>
<link rel="icon" href="iiitdmj.jpg" type="image/gif" >
<title>POSTING NOTICE</title>
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
require('menu.php');
?><hr>
<a href="main_page.php"><p align="right">HOME</p></a>
</br></br></br>
<FORM ACTION="postnotice_db.php" METHOD="POST"> 
<table border="1" align="center"> <tr><th colspan="2">GIVE YOUR NOTICE HERE</th></tr>
 <tr><th>
 CATEGORY : </th><td><?PHP	
 session_start();
	$id=$_SESSION['USER_ID'];
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
			$QUERY="SELECT NAME,ID 
					FROM CATEGORY" ;		
			$QRESULT=mysql_query($QUERY);
			echo'<select  name="cat">';
				while($ROW=mysql_fetch_assoc($QRESULT))
				{
				echo '<option value="'.$ROW['ID'].'">'.$ROW['ID'].'-'.$ROW['NAME'].'</option>';
				}
				echo'</select>';
				ECHO'<BR>'
?>	</td></tr><tr><th>
SUBJECT:</th><td>
<textarea rows="2" cols="80" name="SUBJECT"></textarea></TD></tr><tr><th align="top">
MESSAGE :</th><td>

<textarea rows="24" cols="80" name="MESSAGE"></textarea></td></tr>
<tr><td colspan="2" align="right"><INPUT TYPE ="SUBMIT" VALUE="POST"></td></tr>
</table></FORM>
</body>
</html>