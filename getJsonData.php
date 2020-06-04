<?php
  header("content-type:text/html;charset=gb2312");
    header('Access-Control-Allow-Origin:*');
    $servername = "localhost";
    $username = "数据库用户名";
    $password = "数据库密码";
    $dbname = "数据库名";
    // 创建连接
    $con =mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($con,"utf8");

    // 检测连接
    $sql = "select `user_name`, `user_url`, `user_donate`, `pay_way`, `donate_confirm`, `donate_out` from donate_info order by `donate_id` asc";
    $result = mysqli_query($con,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

	//输出数据库中的数据
    $jarr = array();
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        //因为使用的是关联数组方式获取每一行数据，所以只能使用关联数组的方法读取数据，不能使用索引的方式读取数据。
      	//`user_name`, `user_url`, `user_donate`, `user_ip`, `donate_time`, `donate_confirm`
       	// $user_name = $row['user_name'];
      	//$user_url = $row['user_url'];
     	//$user_donate = $row['user_donate'];
      	//$donate_confirm = $row['donate_confirm'];
        array_push($jarr,$row);
        //echo "$user_name:$user_url<br />";
    }

    //echo '编码后的json数据：';
    echo $str=json_encode($jarr);//将数组进行json编码

    mysqli_close($con);
?>