<html>
<head>
<link rel="icon" href="iiitdmj.jpg" type="image/gif" sizes="16x16">
<style>
    body {
        margin-left:auto;
        margin-right:auto;
        width:1024px;   
        border: 1px dotted black;
        padding: 5px 5px 5px 5px;
        font-family: sans-serif;
        }

    ul  {
        list-style-type:none;
        margin-left:auto;
        margin-right:auto;
        width:auto;
        padding:auto;
        padding-top:auto;
        padding-bottom:auto;
        }
    li  {display:inline;}
    a.nav:link,a.nav:visited
        {
        color:#ffffff;
        background-color:#9494B8;
        text-align:center;
        padding:2px;
        text-decoration:none;
        text-transform:uppercase;   
        }
    a.nav:hover,a.nav:active
        {
        background-color:#7a991a;
        }
    h1  {font-family:"Mistral"; }
    #page {
        margin-left:auto;
        margin-right:auto;
        width:1024px;
        }

    a.styleone {
        text-decoration: underline; 
        color:black; 
        }
		
	img{
        width:1024px;
        }</style>
<script language="JavaScript" type="text/javascript">
function funinitialise()
{
    try{
        ifrml = document.createElement("IFRAME");
        ifrml.setAttribute("src", "libraryframe.php");
        ifrml.style.width = 750+"px";
        ifrml.style.height = 500+"px";
        ifrml.style.hspace = 0;
        ifrml.style.vspace = 0;
        ifrml.style.align = "left";
        
        ifrme = document.createElement("IFRAME");
        ifrme.setAttribute("src", "eventsframe.php");
        ifrme.style.width = 750+"px";
        ifrme.style.height = 500+"px";
        ifrme.style.align = "left";
        
        
        ifrmin = document.createElement("IFRAME");
        ifrmin.setAttribute("src", "impnoticesframe.php");
        ifrmin.style.width = 750+"px";
        ifrmin.style.height = 500+"px";
        ifrmin.style.align = "left";
        
        ifrmw = document.createElement("IFRAME");
        ifrmw.setAttribute("src", "workshopframe.php");
        ifrmw.style.width = 750+"px";
        ifrmw.style.height = 500+"px";
        ifrmw.style.align = "left";
        
        ifrmc = document.createElement("IFRAME");
        ifrmc.setAttribute("src", "clubsframe.php");
        ifrmc.style.width = 750+"px";
        ifrmc.style.height = 500+"px";
        ifrmc.style.align = "left";
        
        ifrmtt = document.createElement("IFRAME");
        ifrmtt.setAttribute("src", "timetableframe.php");
        ifrmtt.style.width = 750+"px";
        ifrmtt.style.height = 500+"px";
        ifrmtt.style.align = "left";
        
        ifrmmf = document.createElement("IFRAME");
        ifrmmf.setAttribute("src", "mainframe.php");
        ifrmmf.style.width = 750+"px";
        ifrmmf.style.height = 500+"px";
        ifrmmf.style.align = "left";
    }catch(e)
    {
        
    }
}

function funclean() {
    try{
    document.body.removeChild(ifrmmf);
    }catch(e){}
    try{
        document.body.removeChild(ifrmtt);
    }catch(e){}
    try{
        document.body.removeChild(ifrml);
    }catch(e){}
    try{
        document.body.removeChild(ifrme);
    }catch(e){}
    try{
        document.body.removeChild(ifrmc);
    }catch(e){}
    try{
        document.body.removeChild(ifrmw);
    }catch(e){}
    try{
        document.body.removeChild(ifrmin);
    }catch(e){}
   
}
function funmainframe() {
    funclean();
    document.body.appendChild(ifrmmf);
}
function funtimetable() {
  
    funclean();
   document.body.appendChild(ifrmtt);
}
function funlibrary() {

    funclean();
   document.body.appendChild(ifrml);
}
function funevents() {
    funclean();
   document.body.appendChild(ifrme);
}
function funclubs() {

    funclean();
   document.body.appendChild(ifrmc);
}
function funworkshops() {
   funclean();
    document.body.appendChild(ifrmw);
}
function funimpnotices() {
   funclean();
    document.body.appendChild(ifrmin);
}


</script>

</head>
<body>
<?php
    @session_start();
    @session_unset();
    @session_destroy();
    require('menu.php');
	?>
	<ul>
	<li><a href="#" onMouseDown="funmainframe()" class="nav">Home</a></li>
    <li><a href="#" onMouseDown="funtimetable()" class="nav">timetable</a></li>
    <li><a href="#" onMouseDown="funlibrary()" class="nav">library</a></li>
    <li><a href="#" onMouseDown="funevents()" class="nav">events</a></li>
    <li><a href="#" onMouseDown="funworkshops()" class="nav">workshops</a></li>
    <li><a href="#" onMouseDown="funimpnotices()" class="nav">important notices</a></li>
    <!--
        <li><a href="#" onMouseDown="funclean()" class="nav">clean up dude</a></li>
    -->
    <script type="text/javascript">
try {
    funinitialise();
    document.write ('<li><a href="" class="nav"><span id="date-time">', new Date().toLocaleString(), '<\/span>.</a></li>')
    if (document.getElementById) onload = function () {
        setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
        
        }
    } catch(e){}</script>
	</ul>
	<script>
	

<?php
echo'<table border="1" width="1024" height="800"><tr><td rowspan="2"><script>
	
try{
    funinitialise();
}catch(e){}
</script></td><td><form name="myloginform" method="post" action="login_check.php">
    <!<table width="130" border="1" align="right" cellpadding="0" cellspacing="0">
    <tr>
    <th><strong>Login I.D.:</strong></th>
    <td><input name="login_id" type="text" id="login_id"/></td>
    </tr>
    <tr>
    <th><strong>Password:</strong></th>
    <td><input name="password" type="password" id="password"/></td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="submit" value="Login"/></td>
    </tr>
    </table>
    </form></td></tr><tr><td><iframe align="right" src="lostandfound.php" width="222" height="515"></iframe></td></tr></table>';
/*echo'
<table border="1">
<tr><td rowspan="2" ><script>
	
try{
    funinitialise();
}catch(e){}
</script></td>
<td><form name="myloginform" method="post" action="login_check.php">
    <table width="130" border="1" align="right" cellpadding="0" cellspacing="0">
    <tr>
    <th><strong>Login I.D.:</strong></th>
    <td><input name="login_id" type="text" id="login_id"/></td>
    </tr>
    <tr>
    <th><strong>Password:</strong></th>
    <td><input name="password" type="password" id="password"/></td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="submit" value="Login"/></td>
    </tr>
    </table>
    </form></br></br></br></br></br>
</td><tr><td><iframe align="right" src="lostandfound.html" width="222" height="393"></iframe>
    </td></tr>

</table>';
/*echo'
	<script>
	try{
    funinitialise();
	}catch(e){}
	</script>
	<iframe align="right" src="lostandfound.html" width="222" height="393"></iframe>
    <form name="myloginform" method="post" action="login_check.php">
    <table width="130" border="1" align="right" cellpadding="0" cellspacing="0">
    <tr>
    <th><strong>Login I.D.:</strong></th>
    <td><input name="login_id" type="text" id="login_id"/></td>
    </tr>
    <tr>
    <th><strong>Password:</strong></th>
    <td><input name="password" type="password" id="password"/></td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="submit" value="Login"/></td>
    </tr>
    </table>
    </form>';

    echo'</br>';

	/*echo'
    </table align="right">
    <form name="myloginform" method="post" action="login_check.php">
    <table width="130" border="1" align="right" cellpadding="0" cellspacing="0">
    <tr>
    <th><strong>Login I.D.:</strong></th>
    <td><input name="login_id" type="text" id="login_id"/></td>
    </tr>
    <tr>
    <th><strong>Password:</strong></th>
    <td><input name="password" type="password" id="password"/></td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="submit" value="Login"/></td>
    </tr>
    </table>
    </form></br></br></br></br></br>
';*/
//echo'<table border="1"><tr><td rowspan="2">hi</td><td>ooo</td></tr><tr><td>dfgsdfg</td></tr></table>';
?>
</body>
</html>