<html>
<head>
<style>
h1{font-family:"Mistral";};
</style>
</head>
<body>
<?php
    echo '<h2 align="center">CS201</h2></br></br></br></br></br>';
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
					  WHERE CATID='CS201'
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
							<td colspan="2" >'.$ROW['BODY'].'</td>
							</TR>';
					echo '<tr>		
							<td colspan="2" align="left">'.$ROW['REFNO'].'</td>
						  </tr>';
					echo '</table></BR>' ;
				}
			}
    ?>
</body>
</html>