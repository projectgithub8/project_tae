<?php
include_once('conn.php');
$std_id = $_POST["std_id"];
$id = $_POST["id"];
$id_small = $_POST["id_small"];
$std_name = $_POST["std_name"];
$sql = "update standard_2 set 
			id = '$id'
		,	id_small = '$id_small'
		,	std_name = '$std_name'
		WHERE std_id = $std_id;";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_standard_2.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_standard_2.php';
			</script>";
}
mysqli_close($conn);
?>