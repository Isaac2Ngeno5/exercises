<?php session_start();
	  $server='localhost';
	  $smartip='192.168.1.107';
	 $userbranch='MAIN';
	 
     function connectsmart(){
     	$smartdb='smartlink';
     	$smartconn = mysql_connect('localhost', 'root', '',true) or die(mysql_error());
		mysql_select_db($smartdb,$smartconn);
     }

     function connectlocal(){
     	$localdb='qet';
        $localconn = mysql_connect('localhost', 'root', '') or die(mysql_error());
		mysql_select_db($localdb,$localconn);
     }

     connectlocal();

	 
	 

?>
