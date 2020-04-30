<?php
require 'conn.php';
?>
<html>
<head>
<title>insert_teacher</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="insert_from_teacher.php">
  <p>&nbsp;</p>
  <p>
    <!-- Save for Web Slices (insert_teacher.psd) -->
  </p>
  <p>&nbsp;</p>
  <table width="1000" height="501" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="8"><img src="images/insert_teacher_01.jpg" width="1000" height="171" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="10"><img src="images/insert_teacher_02.jpg" width="453" height="250"></td>
      <td colspan="5"><label for="User_name"></label>
      <input type="text" name="User_name" id="User_name" style="width:205px;height:32px;"></td>
      <td rowspan="12"><img src="images/insert_teacher_04.jpg" width="342" height="329" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><img src="images/insert_teacher_05.jpg" width="205" height="17" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><label for="User_name"></label>
      <input type="text" name="User_username" id="User_username" style="width:204px;height:32px;"></td>
      <td rowspan="10"><img src="images/insert_teacher_07.jpg" width="1" height="280" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/insert_teacher_08.jpg" width="204" height="15" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><label for="User_password"></label>
      <input type="password" name="User_password" id="User_password" style="width:204px;height:32px;"></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/insert_teacher_10.jpg" width="204" height="16" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><?php
                    $sql="SELECT * FROM study";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "branch_id" id = "branch_id" style="width:204px;height:32px;">
                    <option value = "">---กรุณาเลือกสาขาวิชา---</option>  
                    <?php
                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/insert_teacher_12.jpg" width="204" height="15" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><?php
                    $sql="SELECT * FROM area";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "area_id" id = "area_id" style="width:204px;height:32px;">
                    <option value = "">---กรุณาเลือกศูนย์พื้นที่---</option>  
                    <?php
                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/insert_teacher_14.jpg" width="204" height="27" alt=""></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/insert_teacher_15.jpg" width="378" height="79" alt=""></td>
      <td colspan="2"><input type="image" name="imageField" id="imageField" src="images/insert_teacher_16.jpg"></td>
      <td rowspan="2"><img src="images/insert_teacher_17.jpg" width="28" height="79" alt=""></td>
      <td><a href="javascript:document.form1.reset()"><img src="images/insert_teacher_18.jpg" width="103" height="35" alt=""></a></td>
      <td rowspan="2"><img src="images/insert_teacher_19.jpg" width="46" height="79" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/insert_teacher_20.jpg" width="102" height="44" alt=""></td>
      <td><img src="images/insert_teacher_21.jpg" width="103" height="44" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/spacer.gif" width="378" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="75" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="27" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="28" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="103" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="46" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="342" height="1" alt=""></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
</form>
</body>
</html>