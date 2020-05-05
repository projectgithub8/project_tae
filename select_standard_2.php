<?php
	require 'conn.php';
    $search = isset($_GET['search']) ? $_GET['search']: '';
	$query = mysqli_query($conn,"SELECT * FROM standard_2 WHERE id_small LIKE '%$search%'");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 10;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 

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

	$q = "select * FROM standard_2 WHERE id_small ";
    $q = "select standard_2.std_id, standard.standard_id, standard_2.id_small, standard_2.std_name ";
    $q .= "from standard_2 inner join standard ON standard.id = standard_2.id ";
	$q .= "order by standard_2.std_id, standard_2.std_id $limit ";
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
    <title>ตารางมาตรฐานการเรียนรู้</title>
	</head>
	<body>
		<div rel = "nofollow">
			<div style = "height: 20px;"></div>
			<div class = "row">
				<div class = "col-lg-2">
				</div>
				<div class = "col-lg-8">
				<table width = '3000px' height = '40px' class="table">
				<tr><td></td>
				<td width = '1020px'></td>
				<td width = '600px'>
				<form method = "get" id = "form" enctype = "multipart/form-data">
					<strong style="font-size : 4">ค้นหาข้อมูล</strong>
                    <input type = "text" name = "search" placeholder = "&nbsp&nbsp กรุณาใส่ชื่อที่ต้องการค้นหา" size = "30"/>
					<input type = "submit" value = "ค้นหา" class = "btn btn-primary"/><BR>
				</form>
				</td></tr>
				<font size="4"><center><b><u>ตารางมาตรฐานการเรียนรู้</b></u></center></font>
				</table>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info" >
							<th><center>ลำดับ</th>
							<th><center>รหัสมาตรฐานการเรียนรู้</th>
							<th><center>รหัสมาตรฐานย่อย</th>
							<th><center>ชื่อมาตรฐานการเรียนรู้ย่อย</th>
							<th><center>แก้ไขข้อมูล</th>
							<th><center>ลบข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							?>
							<tr>
								<td align = center width = '50px'><?php echo $i ;?></td>
								<td align='center' width = '180px'><?php echo $row['standard_id']; ?></td>
								<td align='center' width = '130px'><?php echo $row['id_small']; ?></td>
								<td align='left'><?php echo $row['std_name']; ?></td>
								<td align = center><?php echo "<a href='update_from_standard_2.php?std_id=".$row['std_id']."'><img src='edit.png' width='20px' height='20px'></a></td></a>"; ?></td>
								<td align = center><?php echo "<a href='delete_standard_2.php?std_id=".$row['std_id']."' onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'><img src='deletee.png' width='20px' height='20px'></a></td></a>"; ?></td>
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
<center><a href='insert_from_standard_2.php'>เพิ่มข้อมูล</a></center> 