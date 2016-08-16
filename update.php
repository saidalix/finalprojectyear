<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery="UPDATE detail_tb SET year= '" .$_GET['year'] . "', div= '". $_GET['div'] ."', country= '". $_GET['country'] ."', sub_country= '". $_GET['sub_country'] ."', parol= '" .$_GET['parol'] . "', school= '". $_GET['school'] ."', center_no= '". $_GET['center_no'] ."', no_of_card= '". $_GET['no_of_card'] ."', subject= '". $_GET['subject'] ."', div1= '" .$_GET['div1'] . "', div2= '". $_GET['div2'] ."', div3= '". $_GET['div3'] ."', div4= '". $_GET['div4'] ."', index_no= '". $_GET['index_no'] ."', hrade= '". $_GET['hrade'] ."', main= '". $_GET['main'] ."' WHERE id='". $_GET['id'] ."' ";
$done = mysql_query($strquery);
 

header ('location:index.php'); 

?>