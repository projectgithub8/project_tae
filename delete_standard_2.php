<?php
include_once('conn.php');
$std_id = $_GET['std_id'];
$sql = "delete from standard_2
		where std_id = '$std_id'";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_standard_2.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_standard_2.php';
			</script>";
}
mysqli_close($conn);
?>