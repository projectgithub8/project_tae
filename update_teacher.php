<?php
include_once('conn.php');
$User_id = $_POST["User_id"];
$User_name = $_POST["User_name"];
$User_username = $_POST["User_username"];
$User_password = $_POST["User_password"];
$branch_id = $_POST["branch_id"];
$area_id = $_POST["area_id"];
$sql = "update register set 
			User_name = '$User_name'
		,	User_username = '$User_username'
		,	User_password = '$User_password'
		,	branch_id = '$branch_id'
		,	area_id = '$area_id'
		WHERE User_id = $User_id;";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>