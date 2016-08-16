
<h1 align="center">DISPLAY ALL DATA </h1>
<table width="1300" border="1" align="center">
<tr>
<td width="50">Year</td>
<td width="100">Division</td>
<td width="100">Country</td>
<td width="100">Sub Country</td>
<td width="100">Parol</td>
<td width="100">School</td>
<td width="100">Center Number</td>
<td width="120">Number of Card</td>
<td width="100">Subject</td>
<td width="100">Division 1</td>
<td width="100">Division 2</td>
<td width="100">Division 3</td>
<td width="100">Division 4</td>
<td width="120">Index Number</td>
<td width="100">Hrade</td>
<td width="100">Main</td>
<td width="57"> ID </td>
<td width="100"> Actions </td>
</tr>

<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password)or die("Cannot connect to the Server");
$select_db=mysql_select_db($databasename)or die("Cannot connect to the Database");;

$strquery="SELECT * from detail_tb";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$f1=mysql_result($results,$i,"year");
$f2=mysql_result($results,$i,"div");
$f3=mysql_result($results,$i,"country");
$f4=mysql_result($results,$i,"sub_country");
$f5=mysql_result($results,$i,"parol");
$f6=mysql_result($results,$i,"school");
$f7=mysql_result($results,$i,"center_no");
$f8=mysql_result($results,$i,"no_of_card");
$f9=mysql_result($results,$i,"subject");
$f10=mysql_result($results,$i,"div1");
$f11=mysql_result($results,$i,"div2");
$f12=mysql_result($results,$i,"center_no");
$f13=mysql_result($results,$i,"no_of_card");
$f14=mysql_result($results,$i,"subject");
$f15=mysql_result($results,$i,"div1");
$f16=mysql_result($results,$i,"div2");
$f17=mysql_result($results,$i,"id");

?>

<tr>
<td><?php echo $f1 ; ?></td>
<td><?php echo $f2 ; ?></td>
<td><?php echo $f3 ; ?></td>
<td><?php echo $f4 ; ?></td>
<td><?php echo $f5 ; ?></td>
<td><?php echo $f6 ; ?></td>
<td><?php echo $f7 ; ?></td>
<td><?php echo $f8 ; ?></td>
<td><?php echo $f9 ; ?></td>
<td><?php echo $f10 ; ?></td>
<td><?php echo $f11 ; ?></td>
<td><?php echo $f12 ; ?></td>
<td><?php echo $f13 ; ?></td>
<td><?php echo $f14 ; ?></td>
<td><?php echo $f15 ; ?></td>
<td><?php echo $f16 ; ?></td>
<td><?php echo $f17 ; ?></td>
<td><?php echo " <a href='edit.php?do=edit&id=" . $f17 . "'> edit </a> "; ?> </td>
</tr>

<?php

  $i++;
  }
  ?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>