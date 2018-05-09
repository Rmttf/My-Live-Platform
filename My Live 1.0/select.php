<?php
	header("Content-type:text/html;charset=utf-8");
	$con= new mysqli("ip地址","用户名","密码","数据库");
																	
	$a=mysqli_select_db($con,"aa");//选在aa数据库
											
	$result = mysqli_query($con,"SELECT * FROM message");
	if(!$result){echo "连接失败";}
	else {echo "连接成功";}
											
	while($row = mysqli_fetch_array($result))
	{
	 echo $row['time'] ."&nbsp;". ": " ."&nbsp;". $row['content'];
	 echo "<br />";
	}
											
	mysqli_close($con);
?>