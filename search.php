
<h1 align="center">Display the List  </h1><br \>

<table width="1300" border="1">
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
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery = "SELECT * from detail_tb where year like '" . $_GET["search"] . "%' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

$num=mysql_numrows($results);

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
$f12=mysql_result($results,$i,"div3");
$f13=mysql_result($results,$i,"div4");
$f14=mysql_result($results,$i,"index_no");
$f15=mysql_result($results,$i,"hrade");
$f16=mysql_result($results,$i,"main");
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
