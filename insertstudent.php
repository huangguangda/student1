<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
?>
<script type="text/javascript" src="js/laydate.js"></script>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo'});//绑定元素
}();
</script>
<div id="page-wrapper" align='center'>
	<div class="row">
	<div class="col-md-12">
	<hr />
	<h1>添加学生信息</h1>
		<form action="insertstudentdo.php" method='post'>
		
		<table width=300 align='center' style="color: black; font-size: 16px;">
		<tr>
		<td align='center'><i class='fa fa-circle-o-notch fa-1x'></i>学号</td>
		<td><input type='text' name='studentId' /></td>
		</tr>
		
		<tr>
		<td align='center'><i class='fa fa-tag fa-1x'></i>姓名</td>
		<td><input type='text' name='name' /></td>
		</tr>
		
		<tr>
		<td align='center'><i class='fa fa-flag fa-1x'></i>班级</td>
		<td><input type='text' name='className' /></td>
		</tr>
		
		<tr>
		<td align='center'><i class='fa fa-birthday-cake fa-1x'></i>生日</td>
		<td><input type='text' class="laydate-icon " name='birthday' id="birthday" onClick="laydate({elem: '#birthday'});"/></td>
					
		</tr>
		
		<tr>
		<td align='center'><i class='fa fa-female fa-1x'></i>性别</td>
		<td>
		<input type='radio' name='sex' value='男' checked>男 </input> 
		<input type='radio' name='sex' value='女'>女</input></td>
		</tr>
		
		<tr>
		<td align='center'><i class='fa fa-male fa-1x'></i>民族</td>
		<td><input type='text' name='nation' /></td>
		</tr>
					
		<tr>
		<td colspan=2 align='center'><input type='submit' class="btn btn-success" value='确认添加' /></td>
		</tr>
		
		</table>
		</form>
		</div>
	</div>
</div>

</body>
</html>