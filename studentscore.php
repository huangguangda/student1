<?php require_once 'base.php';?>
<?php

if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
require_once 'dbconfig.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from score where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<div id="page-wrapper" align='center'>
	<div class="row">
	<div class="col-md-12">
	<hr/>
	<h1 align='center'>编辑学生成绩</h1>
	<form action="studentscoredo.php" method='post'>
		<input type='hidden' name='id' value='<?=$row ['id']?>' />
		<table width=350 cellspacing=0 cellpadding=5 style="color: black; font-size: 16px;">
			<tr>
			<td width=100 align='center'><i class='fa fa-apple fa-1x'></i>学号</td>
			<td><input type='text' name='studentId' value='<?=$row ['studentId']?>' /></td>
			</tr>
			
		    <tr><td width=100 align='center'><i class='fa fa-pencil fa-1x'></i>学期</td>
			<td><input type='text' name='term' value=<?=$row ['term']?> /></td>
			</tr>
			
			<tr>
		    <td width=100 align='center'><i class='fa fa-list-alt fa-1x'></i>科目</td>
			<td><input type='text' name='subject' value=<?=$row ['subject']?> /></td>
			</tr>
        
			<tr>
			<td width=100 align='center'><i class='fa fa-book fa-1x'></i>成绩</td>
			<td><input type='text' name='mark' value=<?=$row ['mark']?> /></td>
			</tr>
				
				<td colspan=2 align='center'>
				<input type='submit' class="btn btn-success" value='确认修改' />
				</td> 
				
		</table>
		</form>
	</div>
<!-- 			<td width=100 align='center' colspan=2><input type='submit' value='确认修改' /></td> -->