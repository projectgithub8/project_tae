<?php
include_once('conn.php');
$User_username= $_POST['User_username'];
$User_password= $_POST['User_password'];
$User_name= $_POST['User_name'];
$branch_id= $_POST['branch_id'];
$area_id= $_POST['area_id'];
if($User_username=="" || empty($User_username)|| $User_password=="" || empty($User_password)|| $User_name=="" || empty($User_name)|| $branch_id=="" || empty($branch_id)|| $area_id=="" || empty($area_id))
{
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_teacher.php';
			</script>";
}
$sql = "insert into register(User_username,User_password,User_name,branch_id,area_id)";
$sql .="values('$User_username','$User_password','$User_name','$branch_id','$area_id')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('สมัครสมาชิกเรียบร้อย')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถสมัครสมาชิกได้')
			</script>";
}
mysqli_close($conn);
?>