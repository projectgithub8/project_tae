<?php
include_once('conn.php');
$sql = "CREATE TABLE teacherr (Name_Teacher varchar(100) auto_increment
		,Group_name varchar(100)NOT NULL
		,CONSTRAINT pk_course PRIMARY KEY(ID_Teacher));";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Create tab ok');
			</script>";
}else{
	echo "<script>alert('Can\'t create');
			</script>";
}
mysqli_close($conn);
?>