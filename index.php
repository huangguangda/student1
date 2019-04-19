<?php require_once 'base.php';?>
<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from student";
$result = @mysql_query($query);
?>

<div id="page-wrapper">
	<div id="page-inner">
	<div class="row">
	<div class="col-md-12">
	<h2 style="color: white;">学生基本信息</h2>
	</div>
	</div>
		
 	<hr/> 
	<div class="row">
		<div class="col-md-12">
	     <div class="panel panel-default">
			<div class="panel-heading"><a href='insertstudent.php'><button class='btn btn-warning'>
			<i class='fa fa-user fa-1x'></i>添加学生信息</button></a></div>
			<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			 <thead>
				<tr style="text-color: green;">
				<th>学号</th>
				<th>姓名</th>
				<th>班级</th>
				<th>生日</th>
				<th>性别</th>
				<th>民族</th>
			  	<th>操作</th>
				</tr>
			</thead>
			<tbody>
             <?php
             $line = 0;
             while ($row = mysql_fetch_array($result)) {
                $line ++;
                $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                echo "<tr class='$linecolor'>";
                echo "<td>" . $row['studentId'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['className'] . "</td>";
                echo "<td>" . $row['birthday'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['nation'] . "</td>";
                echo "<td><a  href='edit.php?id=" . $row['id'] . "'>
				<button class='btn btn-warning'>
				<i class='fa fa-edit fa-1x'></i>编辑</a></button>&nbsp;&nbsp;<a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-warning'><i
				class='fa 	fa-remove fa-1x'></i>删除</a></button></td>";
                          
                echo "</tr>";
             }
             ?>
			</tbody>
			</table>
			</div>

			</div>
			</div>
            </div>
		</div>
	</div>
</div>
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>


<script>
	$(document).ready(function() {
		$('#dataTables-example').dataTable();
	});
</script>
<script src="assets/js/custom.js"></script>

</body>
</html>

