<?php
include_once('conn.php');
$User_id = $_GET['User_id'];
$sql = "delete from register
		where User_id = '$User_id'";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>