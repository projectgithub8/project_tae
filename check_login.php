<?php 
	require 'conn.php';
	$login_username = mysqli_real_escape_string($conn,$_POST['username']);
	$login_password = mysqli_real_escape_string($conn,$_POST['password']);
	$sql = "SELECT * FROM register WHERE User_username=? AND User_password=?";
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ss",$login_username,$login_password);
	mysqli_execute($stmt);
	$result_user = mysqli_stmt_get_result($stmt);
	if($result_user->num_rows == 1) {
		session_start();
		$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
		$_SESSION['User_username'] = $row_user['User_username'];
		header("Location: index.php");
	}else{
		echo mysqli_error($conn);
		echo "<script>
			alert('Username หรือ Password ไม่ถูกต้อง')
			window.location='login.php';
			</script>";
}
mysqli_close($conn);
?>