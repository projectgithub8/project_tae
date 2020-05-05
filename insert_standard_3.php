<?php
include_once('conn.php');
$id= $_POST['id'];
$std_id= $_POST['std_id'];
$id_rate= $_POST['id_rate'];
$std_name= $_POST['std_name'];
if($id=="" || empty($id)|| $std_id=="" || empty($std_id)|| $id_rate=="" || empty($id_rate)|| $std_name=="" || empty($std_name))
{
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_from_standard_3.php';
			</script>";
}
$sql = "insert into standard_3(id,std_id,id_rate,std_name)";
$sql .= "values('$id','$std_id','$id_rate','$std_name')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('สมัครสมาชิกเรียบร้อย')
			window.location='select_standard_3.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถสมัครสมาชิกได้')
			</script>";
}
mysqli_close($conn);
?>