<?php
include_once('conn.php');
$std_id =$_GET["std_id"];
$sql = ("SELECT * FROM standard_2 WHERE std_id = $std_id");
$respro = mysqli_query($conn, $sql);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<html>
<head>
<title>update_from_standard_2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="update_standard_2.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <!-- Save for Web Slices (update_from_standard_2.psd) -->
    <input name="std_id" type="hidden" id="std_id" value="<?php echo $std_id; ?>">
  </p>
  <table width="1001" height="500" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="7"><img src="images/update_from_standard_2_01.jpg" width="1000" height="200" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="200" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="6"><img src="images/update_from_standard_2_02.jpg" width="490" height="181" alt=""></td>
      <td colspan="3"><?php
                    $sql="SELECT * FROM standard";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "id" id = "id" style="width:227px;height:30px;">
                    <option value = "">---กรุณาเลือกมาตรฐานการเรียนรู้---</option>  
                    <?php
                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
      </select></td>
      <td colspan="2" rowspan="8"><img src="images/update_from_standard_2_04.jpg" width="283" height="217" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="30" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_from_standard_2_05.jpg" width="227" height="20" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="20" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><label for="User_name"></label>
      <input name="id_small" type="number" id="id_small" style="width:227px;height:30px;" value="<?=$rowpro['id_small']?>"></td>
      <td><img src="images/spacer.gif" width="1" height="30" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_from_standard_2_07.jpg" width="227" height="22" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="22" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><label for="User_name"></label>
      <input type="text" name="std_name" id="std_name" value="<?=$rowpro['std_name']?>" style="width:227px;height:31px;"></td>
      <td><img src="images/spacer.gif" width="1" height="31" alt=""></td>
    </tr>
    <tr>
      <td colspan="3" rowspan="2"><img src="images/update_from_standard_2_09.jpg" width="227" height="49" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="48" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/update_from_standard_2_10.jpg" width="390" height="119" alt=""></td>
      <td rowspan="2"><input type="image" name="imageField" id="imageField" src="images/update_from_standard_2_11.jpg"></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/update_from_standard_2_12.jpg" width="29" height="118" alt=""></td>
      <td><img src="images/update_from_standard_2_13.jpg" width="102" height="35" alt=""></td>
      <td rowspan="2"><img src="images/update_from_standard_2_14.jpg" width="96" height="118" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="35" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/update_from_standard_2_15.jpg" width="100" height="83" alt=""></td>
      <td><img src="images/update_from_standard_2_16.jpg" width="102" height="83" alt=""></td>
      <td><img src="images/update_from_standard_2_17.jpg" width="194" height="83" alt=""></td>
      <td><img src="images/update_from_standard_2_18.jpg" width="89" height="83" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="83" alt=""></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
</form>
</body>
</html>