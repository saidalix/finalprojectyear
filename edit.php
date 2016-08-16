<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery = "SELECT * from detail_tb where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>
<body>

<form id="form1" name="form1" method="get" action="update.php">
<label>
<h1 align="center">UPDATE YOUR DATABASE</h1>

<table width="53%" border="1" align="center">
  <tr>
    <td><strong>Year:</strong></td>
    <td><input name="year" type="text" id="year" value=" <?php echo $row["year"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Division:</strong></td>
    <td><input name="div" type="text" id="div" value=" <?php echo $row["div"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Country:</strong></td>
    <td><input name="country" type="text" id="country" value=" <?php echo $row["country"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Sub Country:</strong></td>
    <td><input name="sub_country" type="text" id="sub_country" value=" <?php echo $row["sub_country"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Parol:</strong></td>
    <td><input name="parol" type="text" id="parol" value=" <?php echo $row["parol"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>School:</strong></td>
    <td><input name="school" type="text" id="school" value=" <?php echo $row["school"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Center Number:</strong></td>
    <td><input name="center_no" type="text" id="center_no" value=" <?php echo $row["center_no"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Number Of Card:</strong></td>
    <td><input name="no_of_card" type="text" id="no_of_card" value=" <?php echo $row["no_of_card"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Subject:</strong></td>
    <td><input name="subject" type="text" id="subject" value=" <?php echo $row["subject"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Division 1:</strong></td>
    <td><input name="div1" type="text" id="div1" value=" <?php echo $row["div1"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Division 2:</strong></td>
    <td><input name="div2" type="text" id="div2" value=" <?php echo $row["div2"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Division 3:</strong></td>
    <td><input name="div3" type="text" id="div3" value=" <?php echo $row["div3"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Division 4:</strong></td>
    <td><input name="div4" type="text" id="div4" value=" <?php echo $row["div4"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Index Number:</strong></td>
    <td><input name="index_no" type="text" id="index_no" value=" <?php echo $row["index_no"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Hrade:</strong></td>
    <td><input name="hrade" type="text" id="hrade" value=" <?php echo $row["hrade"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Main: </strong></td>
    <td><label>
      <input name="main" type="text" id="main" value=" <?php echo $row["main"]; ?>" />
    </label>
      <input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Update" /></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>
<label></label>
</p>
<p>&nbsp;</p>
</form>
