<?php   
    if ($_POST['submit'] == 'Login'){
        //Collect POST values
		$login = $_POST['login_id'];
		@$login1=admin;
        $password = $_POST['password'];
   session_start();
		if($login && $password){
            //Connect to mysql server
			$link = mysql_connect('127.0.0.1', 'root', '') or die('Failed to connect to server: ' . mysql_error());;
			//Select database
			$db = mysql_select_db('project') or die("Unable to select database");
			//Create query
			$qry='SELECT USERNAME,PASSWORD FROM user WHERE USERNAME = \''.$login.'\' AND PASSWORD = \''.$password.'\'';
					
			//Execute query
			$result=mysql_query($qry);
						
			//Check whether the query was successful or not         
			if($result){
				$count = mysql_num_rows($result);
			}
			else{
				//Login failed
				include('login_form.php');
				echo '<center>Incorrect Username or Password !!!<center>';
				exit();
			}
			if( $count == 1){
				if($login==$login1){
				$_SESSION['IS_AUTHENTICATED'] = 1;
				header('location:adminpage.php');
				}
			//Login successful set session variables and redirect to main page.
			else{$_SESSION['IS_AUTHENTICATED'] = 1;
							$_SESSION['USER_ID'] = $login;
							header('location:main_page.php');
						}}
			else{
							//Login failed
							include('index.php');
							echo '<center>Incorrect Username or Password !!!<center>';
							exit();
						}
				}
		else{
					include('index.php');
					echo '<center>Username or Password missing!!</center>';
					exit();
		}
    }
else{       
        header("location: login_form.php");
        exit();
    }
?>