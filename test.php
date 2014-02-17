￼<?php
    session_start();
    if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
        $link = mysql_connect('127.0.0.1', 'root', '');
        if(!$link){
            die('Failed to connect to server: ' . mysql_error());
        }
        $db = mysql_select_db('virtualnoticeboard'); if(!$db){
            die("Unable to select database"); }
        $qry = 'SELECT * FROM messages';
        $result = mysql_query($qry);
        echo '<table width="99%">
        <tr><td><a href="main_page.php">Back to main Page</a></td><td><a
        href="log_out.php">Log Out </a></td></tr> </table>';
        echo '<h1>The Details are - </h1>';
        while ($row = mysql_fetch_assoc($result))
        {
        echo '<table border="1"> <tr><th>Refno</th>
        <th>Time </th>
        <th>message</th></tr>';
            ￼￼echo '<tr>
            <td>'.$row['REFNO'].'</td>
            ￼<td>'.$row['TIME'].'</td>
            ￼<td>'.$row['BODY'].'</td>
            ￼</tr></table><hr>';
            ￼}
        
        ￼else{
            header('location:login_form.php');
            ￼￼exit();
            ￼￼}
    }
    ￼￼?>