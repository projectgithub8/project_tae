<?php
include_once('conn.php');
$std3_id =$_GET["std3_id"];
$sql = ("SELECT * FROM standard_3 WHERE std3_id = $std3_id");
$respro = mysqli_query($conn, $sql);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<html>
<head>
<title>insert_from_standard_3</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="update_standard_3.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <!-- Save for Web Slices (insert_from_standard_3.psd) -->
    <input name="std3_id" type="hidden" id="std3_id" value="<?php echo $std3_id; ?>">
  </p>
  <table width="1001" height="501" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="8"><img src="images/update_from_standard_3_01.jpg" width="1000" height="200" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="200" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="8"><img src="images/update_from_standard_3_02.jpg" width="490" height="217" alt=""></td>
      <td colspan="4"><?php
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
      <td colspan="2" rowspan="8"><img src="images/update_from_standard_3_04.jpg" width="283" height="217" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="30" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_from_standard_3_05.jpg" width="227" height="20" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="20" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><?php
                    $sql="SELECT * FROM standard_2";
                    $result= mysqli_query($conn,$sql);
                ?>
        <select name = "std_id" id = "std_id" style="width:227px;height:30px;">
          <option value = "">---กรุณาเลือกมาตรฐานการเรียนรู้---</option>
          <?php
                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
        </select></td>
      <td><img src="images/spacer.gif" width="1" height="30" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_from_standard_3_07.jpg" width="227" height="22" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="22" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><input name="id_rate" type="number" id="id_rate" style="width:227px;height:31px;" value="<?=$rowpro['id_ratel']?>"></td>
      <td><img src="images/spacer.gif" width="1" height="31" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_from_standard_3_09.jpg" width="227" height="21" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="21" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><input type="text" name="std_name" id="std_name" value="<?=$rowpro['std_name']?>" style="width:227px;height:31px;"></td>
      <td><img src="images/spacer.gif" width="1" height="31" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_from_standard_3_11.jpg" width="227" height="32" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="32" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/update_from_standard_3_12.jpg" width="390" height="83" alt=""></td>
      <td colspan="2"><input type="image" name="imageField" id="imageField" src="images/update_from_standard_3_13.jpg"></td>
      <td rowspan="3"><img src="images/update_from_standard_3_14.jpg" width="28" height="83" alt=""></td>
      <td rowspan="2"><img src="images/update_from_standard_3_15.jpg" width="101" height="38" alt=""></td>
      <td colspan="2" rowspan="3"><img src="images/update_from_standard_3_16.jpg" width="291" height="83" alt=""></td>
      <td rowspan="3"><img src="images/update_from_standard_3_17.jpg" width="89" height="83" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="37" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2"><img src="images/update_from_standard_3_18.jpg" width="101" height="46" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/update_from_standard_3_19.jpg" width="101" height="45" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="45" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/spacer.gif" width="390" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="100" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="28" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="101" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="97" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="194" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="89" height="1" alt=""></td>
      <td></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
</form>
</body>
</html>