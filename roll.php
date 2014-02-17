<?php     
    $i=0;
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
        for($i=2011253;$i<2011263;$i++){
		$qry="INSERT INTO user values($i,$i,3,$i)";
		 $RES=mysql_query($qry) ;
		}

    }
	
    
?>