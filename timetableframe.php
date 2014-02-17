<html>
<head>
</head>
<body>
<?php
    echo '<h2 align="center">TIMETABLE</h2></br></br></br></br></br>
	<iframe align="right" src="timetable.PNG" width="700" height="400">
';
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
					  FROM TIMETABLE" ;
				 $RES=mysql_query($qry) ;
				 while($ROW=mysql_fetch_assoc($RES))
				{
					echo '<table>' ;
					echo '<tr>
							<td>'.$ROW['TIME'].'</td>
							<td>'.$ROW['SUBJECT'].'</td>
						  </tr>' ;
					ECHO '<tr>
							<td>'.$ROW['BODY'].'</td>
							</TR>';
					echo '<tr>		
							<td>'.$row['REFNO'].'</td>
						  </tr>';
					echo '</table>' ;
				}
			}
    ?>
</body>
</html>