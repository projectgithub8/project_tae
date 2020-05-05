<?php
include_once('conn.php');
$id = $_POST["id"];
$standard_id = $_POST["standard_id"];
$standard_name = $_POST["standard_name"];
$sql = "update standard set standard_id = '$standard_id' ,standard_name = '$standard_name' WHERE id = $id;"; 
$result=mysqli_query($conn,$sql);
if($result){
echo "<script>
alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
window.location='select_standard.php';
</script>";
}else{
echo mysqli_error($conn);
echo "<script>
alert('ไม่สามารถแก้ไขข้อมูลได้')
window.location='select_standard.php';
</script>";
}
mysqli_close($conn);
?> 