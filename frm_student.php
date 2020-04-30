<?php
    require 'conn.php';
   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ข้อมูลนักศึกษา</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body>
        <h2>ข้อมูลนักศึกษา</h2>
        <form action="frmstudent_insert.php" method="post" enctype="multipart/form-data" id="form1">
            <fieldset style = "width : 470px; height : 250px;" > 
				<table align = center width = 450px border = "0">
				<legend><b style = "font-size : 20px">เพิ่มข้อมูลนักศึกษา</legend>
				<tr><td><label><b> รหัสนักศึกษา : </label></td><td><input name = "Std_ID" type = "number" id = "Std_ID" size = "30"></td></tr> 
                <tr><td><label> <b>ชื่อนักศึกษา : </label> </td><td><input name = "Std_name" type = "text" id = "Std_name" size = "30"></td></tr>
				<tr><td><label><b>กลุ่มเรียน : </label>
				</td><td>
                <?php
                    $sql="select * from groupp";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "Group_ID" id = "Group_ID">
                    <option value = "">---กรุณาเลือกกลุ่มเรียน---</option>  
                    <?php
                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
                </select></td></tr>
                <tr><td><label><b>คณะ : </label></td><td>
                <?php
                    $sql="select * from faculty";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "Faculty_ID" id = "Faculty_ID">
                    <option value = "">---กรุณาเเลือกคณะ---</option> 
                    <?php
                        while ($row= mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value = '$row[0]'>$row[1]</option>";
                        }
                    ?>
                </select></td></tr>
                <tr><td><label><b>ภาพนักศึกษา :</label></td><td><input type = "file" name = "Std_Pic"/></td></tr>
				<tr><td></td><td><font color = "Red"><b>** กรุณากรอกข้อมูลให้ครบถ่วนก่อนเพิ่มข้อมูล</td></tr>
				<tr><td></td></tr>
				<br>
                <td></td><td><p><input name = "submit" type = "submit" id = "submit" value = "เพิ่มข้อมูล">
				<input name="reset" type = "reset" id = "reset" value = "ล้างข้อมูล"><br></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>
