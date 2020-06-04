<?php
    header("content-type:text/html;charset=gb2312"); 
        //获取来自问卷的内容
        $user_name = $_POST['user_name'];
        $user_url = $_POST['user_url'];
        $user_donate = $_POST['user_donate'];
	$pay_way = $_POST['pay_way'];

        //数据库需要的内容
        //获取ip https://blog.csdn.net/benben0729/article/details/87859314
        $ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
        $user_ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];

        date_default_timezone_set("Asia/Shanghai"); //获取填写时间
        $donate_time=date('Y-m-d H:i:s');

        $donate_confirm='NO'; //确认信息默认为'NO'

        //连接数据库
        $conn = new mysqli(localhost,'数据库用户名','数据库密码','数据库名');
        mysqli_set_charset($conn,"utf8");
        if ($conn->connect_error){ //连接失败javascript:;
            //echo '数据库连接失败，请联系博主！';
          	echo '<script>window.parent.errorRes("数据库连接失败，请联系博主！");</script>';
            exit(0);
        }else { //连接成功
            //查询该ip打赏次数、避免恶意刷取数据
            $sql = "select count(*) from donate_info where user_ip = '$user_ip'";
            $result = $conn->query($sql);
          	while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            	//因为使用的是关联数组方式获取每一行数据，所以只能使用关联数组的方法读取数据，不能使用索引的方式读取数据。
            	$ip_num=$row['count(*)'];
          	}
            if ($ip_num>=5) {
                //echo '<script>alert("上传失败，总打赏次数超限！");history.go(-1);</script>';
              	echo '<script>window.parent.errorRes("上传失败，总打赏次数超限！");</script>';
            } else {
                $sql_insert = "insert into 数据库名.`donate_info` (`user_name`, `user_url`, `user_donate`,`pay_way`, `user_ip`, `donate_time`, `donate_confirm`) VALUES ('$user_name', '$user_url', '$user_donate', '$pay_way', '$ip', '$donate_time', '$donate_confirm')";
             	$res_insert = $conn->query($sql_insert);
                if ($res_insert) {
                 	//echo "<script>alert($user_name);</script>";
                  	echo '<script>window.parent.successRes("导入数据库成功！");</script>';
                } else {
                    echo '<script>window.parent.warnRes("请检查数据格式是否正确！");</script>';
                }
            }
        }
        mysqli_close($conn);
?>