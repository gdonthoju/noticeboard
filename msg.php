<html>
<head>
<style>
body {
		background-color:#ffffff;
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
<?PHP
@$ref=$_POST['ref'];
$refcount=count($ref);
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
			else{
// mysql_query($CONNECT,"UPDATE MESSAGE SET VALIDATE=1 WHERE REFNO=123456789");
			require('menu.php');
			echo'<hr><table border="1" align="center"><tr><td>';for($i=0;$i<$refcount;$i++)
{
	ECHO $ref[$i].'</br>';
	$qry="UPDATE MESSAGE
	SET VALIDATE='1'
	WHERE REFNO ='$ref[$i]'" ;
	$RES=mysql_query($qry) ;
	
}echo'</td></tr>';
}
echo'<tr><td align="center">';echo 'validated';echo'</td></tr>' ;
echo'<a href="adminpage.php"><p align="center">GO BACK</p></a>';
MYSQL_CLOSE($CONNECT);

?>
</body>
</html>