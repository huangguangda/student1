<?php 
if (! isset ( $_SESSION )) {
    session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
    header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
//计算当前文件名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>期末</title>

<link rel="stylesheet" href="assets/css/reset.css">  
<link rel="stylesheet" href="assets/css/supersized.css">  
<!--           <link rel="stylesheet" href="assets/css/style.css">   -->

 <link href="assets/css/bootstrap.css" rel="stylesheet" /> 
 <link href="assets/css/font-awesome.css" rel="stylesheet" /> 
 <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" /> 
<!--  <link href="assets/css/custom.css" rel="stylesheet" />   -->

<script language="JavaScript">

  //获得文件的格式化最后修改时间
  function DocDate() { 
    StrofLastMod = document.lastModified;
    //获得文件的最后修改时间，它是一个string类型的变量。
    //它的格式如下：07/29/2002 18:28:55
    Millisec = Date.parse(StrofLastMod);//把字符串类型转化成int类型，代表从1970年到现在的毫秒数。
    if(Millisec == 0 || Millisec == null) //Opera3.2
      dateStr = "Unknown";
    else 
    {
      LastModDate = new Date();//得到Date类型的实例
      LastModDate.setTime(Millisec);//给LastModDate赋值，得到最后修改时间的Date类型值。
      months = new Array("January","February","March","April","May","June","July","August", 
      "September","October","November","December"); //月份名变量，供转换。
      days = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");//星期名变量，供转换
      var c = ":"; //用来分隔时，分，秒。
      
      miliSec = LastModDate.getMilliseconds();
      seconds = LastModDate.getSeconds();
      minutes = LastModDate.getMinutes();
      hours = LastModDate.getHours(); 
      dayofWeek = LastModDate.getDay();
      day = days[dayofWeek];
      date = LastModDate.getDate();
      monthNo = LastModDate.getMonth();
      month = months[monthNo];
      year = LastModDate.getYear();
      if(year < 2000)//获得年的值，year<2000时，由于是参照1900来计数的，所以要加上1900。
        year = year + 1900;
      dateStr = year+" "+month+" "+date+" "+day+" "+hours+c+minutes+c+seconds+"."+miliSec; //获得格式化的文件最后修改时间。
    }
    return dateStr;
  }
</script> 
</head>
<body>

<div id="wrapper">
   <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
   
   <div class="navbar-header"> 
   <a class="navbar-brand">期末</a>
   <a class="navbar-brand" href="mailto:SuiNiTian@sina.com" target="_blank" style="color: red;">给我留言</a>
   </div>
   
   <div style="color: green; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
     用户名：<?=$userName?>&nbsp;&nbsp;<a href='newpassword.php'>修改密码</a>&nbsp;&nbsp;
   <a href="loginout.php" class="btn btn-danger square-btn-adjust">退出登录</a>&nbsp;&nbsp;
 
   </div>
   </nav>
		
   <nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">

	<ul class="nav" id="main-menu" style="text-align:center;">
		
		<tr>
<!-- 		<li class="text-center"> class="user-image img-responsive"-->
		<img src="assets/img/find_user.png" />
<!-- 		</li> -->
		<td><a <?="index"==$menuName?"class='active-menu'":""?> href="index.php"><i class="fa fa-user fa-3x"></i> 学生信息</a></td>
		<td><a <?="dashboard"==$menuName?"class='active-menu'":""?> href="score.php"><i class="fa fa-book fa-3x"></i> 学生成绩</a></td>								
		<td><a <?="login"==$menuName?"class='active-menu'":""?> href="login.php"><i class="fa fa-bolt fa-3x"></i> 登录</a></td>
		<td><a <?="register"==$menuName?"class='active-menu'":""?> href="register.php"><i class="fa fa-laptop fa-3x"></i> 注册</a></td>
		</tr>
		
        <script language="JavaScript"> 
        document.writeln("<center> <font color= ff00ff>",document.lastModified,"</font></center>");
        </script> 
       		
    </ul>
    
    
	</div>
   </nav>
   
    <script src="assets/js/jquery-1.8.2.min.js" ></script>
    <script src="assets/js/supersized.3.2.7.min.js" ></script>
    <script src="assets/js/supersized-init.js" ></script>
    <script src="assets/js/scripts.js" ></script>