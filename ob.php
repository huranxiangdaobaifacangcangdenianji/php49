<?php

//开启ob缓存区
ob_start();
echo "hello";
echo "<br/>";
echo "world";
echo "<br/>";
//清除缓存
ob_clean();
echo 'aaa';
echo '<br/>';
echo 'bbb';
echo '<br/>';
echo ob_get_contents();//得到缓存区里的数据