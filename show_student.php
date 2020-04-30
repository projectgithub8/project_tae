<?php
	require 'conn.php';
    $search = isset($_GET['search']) ? $_GET['search']: '';
	$query = mysqli_query($conn,"SELECT COUNT(Std_ID) FROM member WHERE Std_Name LIKE '%$search%'");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 5;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

	$q = "select * FROM member WHERE Std_Name";
    $q = "select member.ID,member.Std_ID, member.Std_Name, groupp.name_g,faculty.Faculty_name,member.Std_Pic ";
    $q .= "from member inner join groupp ON groupp.ID_group = member.Group_ID ";
    $q .= "inner join faculty ON faculty.Faculty_ID = member.Faculty_ID  ";	
	$q .= "order by member.Std_ID, member.ID $limit";
	$result = mysqli_query($conn,$q);

	$paginationCtrls = '';

	if($last != 1){

	if ($pagenum > 1) {
	$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';

		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}

	$paginationCtrls .= ''.$pagenum.' &nbsp; ';

	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="nofollow">
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div rel = "nofollow">
			<div style = "height: 20px;"></div>
			<div class = "row">
				<div class = "col-lg-2">
				</div>
				<div class = "col-lg-8">
				<table width = '1270px' height = '40px' class="table">
				<tr><td></td>
				<td width = '1020px'></td>
				<td width = '330px'>
				<form method = "get" id = "form" enctype = "multipart/form-data">
					<strong style="font-size : 18px">ค้นหาข้อมูล</strong><br>
					<input type = "text" name = "search" placeholder = "&nbsp&nbsp กรุณาใส่ชื่อที่ต้องการค้นหา" size = "30"/>
					<input type = "submit" value = "ค้นหา" class = "btn btn-primary"/>
				</form>
				</td></tr>
				</table>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info" >
							<th width = '20px'><center>ลำดับ</th>
							<th width = '100px'><center>รหัสนักศึกษา</th>
							<th width = '120px'><center>ชื่อนักศึกษา</th>
							<th width = '80px'><center>กลุ่มเรียน</th>
							<th width = '150px'><center>คณะ</th>
							<th width = '100px'><center>ภาพนักศึกษา</th>
							<th width = '80px'><center>แก้ไขข้อมูล</th>
							<th width = '80px'><center>ลบข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							?>
							<tr>
								<td align = center><?php echo $i ;?></td>
								<td align = center><?php echo $row['Std_ID'];?></td>
								<td><?php echo $row['Std_Name'];?></td>
								<td align = center><?php echo $row['name_g'];?></td>
								<td><?php echo $row['Faculty_name'];?></td>
								<td align = center><img src = "images/<?php echo $row['Std_Pic'];?>" width = "100px" height = "100px"></td>
								<td align = center><a href = "update_frm_std.php?Std_ID=<?php echo $row['ID'];?>"><img src = 'edit.png' width = '20px' height = '20px'></a></td>
								<td align = center><a href = "delete_frm_std.php?Std_ID=<?php echo $row['ID'];?>" onclick = "return confirm('ยืนยันการลบ')"><img src = 'delete.png' width = '20px' height = '20px'> </a></td>
							</tr>
							<?php
							$i++;
							}
							mysqli_free_result($result);
							mysqli_close($conn);
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</body>
</html>