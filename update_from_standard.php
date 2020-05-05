<?php
include_once('conn.php');
$id = $_GET["id"];
$sql = ("SELECT * FROM standard
		WHERE id = $id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$standard_id = $row["standard_id"];
	$standard_name = $row["standard_name"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<html>
<head>
<title>update_standard</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="update_standard.php">
  <p>&nbsp;</p>
  <p>
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
  </p>
  <p>
    <!-- Save for Web Slices (update_standard.psd) -->
  </p>
  <table width="1001" height="501" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="8"><img src="images/update_standard_01.jpg" width="1000" height="227" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="227" alt=""></td>
    </tr>
    <tr>
      <td colspan="4" rowspan="4"><img src="images/update_standard_02.jpg" width="527" height="154" alt=""></td>
      
      <td colspan="2"><label for="standard_name"></label>
      <input type="number" name="standard_id" id="standard_id" value="<?php echo $standard_id; ?>" style="width:188px;height:29px;"></td>
      <td colspan="2" rowspan="7"><img src="images/update_standard_04.jpg" width="285" height="190" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="29" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/update_standard_05.jpg" width="188" height="36" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="36" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><label for="standard_name"></label>
      <input type="text" name="standard_name" id="standard_name" value="<?php echo $standard_name; ?>" style="width:188px;height:28px;"></td>
      <td><img src="images/spacer.gif" width="1" height="28" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/update_standard_07.jpg" width="188" height="61" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="61" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_standard_08.jpg" width="519" height="1" alt=""></td>
      <td colspan="2" rowspan="3"><img src="images/update_standard_09.jpg" width="102" height="36" alt=""></td>
      <td rowspan="4"><img src="images/update_standard_10.jpg" width="94" height="119" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/update_standard_11.jpg" width="390" height="118" alt=""></td>
      <td><input type="image" name="imageField" id="imageField" src="images/update_standard_12.jpg"></td>
      <td rowspan="3"><img src="images/update_standard_13.jpg" width="29" height="118" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="34" alt=""></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/update_standard_14.jpg" width="100" height="84" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/update_standard_15.jpg" width="102" height="83" alt=""></td>
      <td><img src="images/update_standard_16.jpg" width="196" height="83" alt=""></td>
      <td><img src="images/update_standard_17.jpg" width="89" height="83" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="83" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/spacer.gif" width="390" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="100" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="29" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="94" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="94" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="196" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="89" height="1" alt=""></td>
      <td></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
</form>
</body>
</html>