<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from score";
$result = @mysql_query($query);
?>
<div id="page-wrapper">
	<div id="page-inner">
	<div class="row">
	<div class="col-md-12">
	<h2 style="color: white;">学生成绩信息</h2>
	</div>
	</div>

	<hr />
	<div class="row">
	<div class="col-md-12">
	<div class="panel panel-default">
	<div class="panel-heading"><a href='insertscore.php'><button class='btn btn-warning'><i class='fa fa-paint-brush'>添加学生成绩</i></button></a></div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
				<tr>
				<th>学号</th>
				<th>学期</th>
				<th>科目</th>
				<th>成绩</th>
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
       echo "<td>" . $row['term'] . "</td>";
       echo "<td>" . $row['subject'] . "</td>";
       echo "<td>" . $row['mark'] . "</td>";
       echo "<td><a href='studentscore.php?id=" . $row['id'] . "'><button class='btn btn-warning'>
	    <i class='fa fa-tag'>编辑</i></button></a>&nbsp;&nbsp;<a href='deletescore.php?id=" . $row['id'] . "'><button class='btn btn-warning'>
		<i class='fa fa-remove'>删除</i></button></a></td>";
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

