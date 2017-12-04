<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(login()) {
        $a = array("","一","二","三","四","五","六","七","八","九","十");
        
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"99.css\" />";
            echo '<table>';
            
            if($username == '1246009411@qq.com' &&/* 偷看密码 -→_-→ */ $password == '20000303') {
                for($j=1; $j<10; $j++) {
                    echo '<tr>';
                    for($k=1; $k<=$j; $k++) {
                        $color1 = rand(0x000000,0xffffff);
                        $color = dechex($color1);
                        echo "<td style=\"background:#$color\">".$a[$k].''.$a[$j];
                        if($j*$k <= 10){
                            echo "得".$a[$j*$k];
                        } else {
                           echo $a[intval($j*$k/10)].'十'.$a[$j*$k%10];
                        }
                        echo '</td>';
                    }
                    echo '</tr>';
                }
//                echo "<script type=\"text/javascript\" src=\"99.js\"></script>";
            } else {
                echo '<p>账号或者密码错误！给你个数字版的乘法表！</p><br>';
                echo '<p>正确账号是我QQ邮箱，密码是我生日</p><br>';
                echo '<a href="index.html">点我重新进入登录界面</a><br>';
                for($j=1; $j<10; $j++) {
                    echo '<tr>';
                    for($k=1; $k<=$j; $k++) {
                        $color1 = rand(0x000000,0xffffff);
                        $color = dechex($color1);
                        echo "<td style=\"background:#$color\">".$k.'*'.$j.'='.$j*$k.'</td>';
                    }
                    echo '</tr>';
                }
            }
            echo '</table>';
    } else {
        echo '非法访问！';
    }

    function login()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        if( preg_match("/^1[34578]{1}\d{9}$/",$username) ){
            ;
        } elseif( preg_match("/^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,4}$/",$username) ) {
            ;
        }  else {
            return false;
        }
        if ( !preg_match("/^[\d]{6,16}$/",$password) ) {
            return false;
        }

        return true;
    }
?>

