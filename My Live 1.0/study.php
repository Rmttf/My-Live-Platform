<?php
	header("Content-type:text/html;charset=utf-8");
	$con= new mysqli("ip地址","用户名","密码","数据库");
	if (!$con)
  	{
  		echo"连接错误";
  	}
  	
  	$a=mysqli_select_db($con,"aa");//选在aa数据库
  	/*if(!$a)
  	{
  		echo "选择数据库失败";
	}
	else {
		echo "选择数据库成功";
	}*/
  	
  	$b=mysqli_query($con,"INSERT INTO message (time, content)
	VALUES
	(now(),'$_POST[content]')");

	
	/*if (!$b)
  	{
  		echo "数据插入失败";
  	}
	else {
		echo "一条数据添加成功";
	}*/
	
  	
  	
  	
  	
	mysqli_close($con);
?>