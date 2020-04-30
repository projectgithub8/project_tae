<?php
include_once('conn.php');
$Name_Teacher= $_POST['Name_Teacher'];
$Group_name= $_POST['Group_name'];
if($Name_Teacher=="" || empty($Name_Teacher)|| $Group_name=="" || empty($Group_name))
{
	echo "กรุณากรอกข้อมูลให้ครบถ้วน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_form.php';
			</script>";
}else{
$sql = "insert into teacher(Name_Teacher,Group_name)
values('$Name_Teacher','$Group_name')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
}
mysqli_close($conn);
?>