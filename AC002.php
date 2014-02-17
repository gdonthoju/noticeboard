<html>
<head>
<style>
body{
		margin-left:auto;
        margin-right:auto;
        width:1024px;   
        border: 1px dotted black;
        padding: 5px 5px 5px 5px;
		}
}
img.banner{
width:1024px;
}

#page{
    margin-left:auto;
    margin-right:auto;
    width:1024px;
    }
h1{font-family:"Monotype corsiva";};
</style>
</head>
<body>
<?php
	require("menu.php");   
    echo '<h1 align="center">ARTS AND CRAFTS CLUB</h1></br>';
    
	echo'<a href="main_page.php"><img src="home.png" align="left" width="75" height="75"></a></br></br></br></br>
	<img src="arts.jpeg" align="left" height="250px" width="250px"/>';
	$CONNECT = mysql_connect('127.0.0.1','root','');
			if(!$CONNECT)
			{
			die('unable to connect to database  :'.mysql_error());
			}
			$db=mysql_select_db("PROJECT");
			if(!$db)
			{
				die('unable to select database :'.mysql_error());
			}
			ELSE
			{
				$qry="SELECT *
					  FROM MESSAGE
					  WHERE CATID='AC002'
					  AND VALIDATE='1'" ;
				 $RES=mysql_query($qry) ;
				 while($ROW=mysql_fetch_assoc($RES))
				{
					echo '<table BORDER="1" ALIGN="CENTER" width="650">' ;
					echo '<tr>
							<td>'.$ROW['TIME'].'</td>
							<td>'.$ROW['SUBJECT'].'</td>
						  </tr>' ;
					ECHO '<tr>
							<td colspan="2">'.$ROW['BODY'].'</td>
							</TR>';
					echo '<tr>		
							<td  colspan="2" align="left">'.$ROW['REFNO'].'</td>
						  </tr>';
					echo '</table></br>' ;
				}
			}
    echo'<img src="bowl.jpg" align="right" height="200px" width="200px"/>';
	?>
</body>
</html>